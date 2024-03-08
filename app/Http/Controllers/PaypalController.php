<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use URL;
use Session;
use Redirect;

/** All Paypal Details class **/
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use Auth;

class PaypalController extends Controller
{
    private $_api_context;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /** setup PayPal api context **/
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);
    }


    public function payWithPaypal()
    {
        $cart = Auth::user()->cart()->with('product')->get();
        return view('view_cart', compact('cart'));
    }

    /**
     * Store a details of payment with paypal.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postPaymentWithpaypal(Request $request)
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_list = new ItemList();
        $totalAmount = $request->input('amount');


        $cartItems = Auth::user()->cart()->with('product')->get();
        foreach ($cartItems as $cartItem) {
            $item = new Item();
            $item->setName($cartItem->product->title)
                ->setCurrency('USD')
                ->setQuantity($cartItem->quantity)
                ->setPrice($cartItem->product->price);
            $item_list->addItem($item);
        }


        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($totalAmount);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Your transaction description');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('payment.status')) /** Specify return URL **/
            ->setCancelUrl(URL::route('payment.status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        /** dd($payment->create($this->_api_context));exit; **/
        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                \Session::put('error', 'Connection timeout');
                return Redirect::route('addmoney.paywithpaypal');
                /** echo "Exception: " . $ex->getMessage() . PHP_EOL; **/
                /** $err_data = json_decode($ex->getData(), true); **/
                /** exit; **/
            } else {
                \Session::put('error', 'Some error occur, sorry for inconvenient');
                return Redirect::route('addmoney.paywithpaypal');
                /** die('Some error occur, sorry for inconvenient'); **/
            }
        }

        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        /** add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {
            /** redirect to paypal **/
            return Redirect::away($redirect_url);
        }

        \Session::put('error', 'Unknown error occurred');
        return Redirect::route('addmoney.paywithpaypal');
    }

    public function getPaymentStatus(Request $request)
    {
        $payment_id = Session::get('paypal_payment_id');
        if (empty($request->get('PayerID')) || empty($request->get('token'))) {
            \Session::put('error', 'Payment failed');
            return Redirect::route('addmoney.paywithpaypal');
        }
        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId($request->get('PayerID'));
        $result = $payment->execute($execution, $this->_api_context);
        /** dd($result);exit; /** DEBUG RESULT, remove it later **/
        if ($result->getState() == 'approved') {
            $order = new Order();
            $order->user_id = Auth::user()->id;
            $order->status = 'pending';
            $order->total_price = $result->transactions[0]->amount->total;
            $order->save();
            $cartItems = Auth::user()->cart()->with('product')->get();
            foreach ($cartItems as $cartItem) {
                $orderDetail = new OrderDetail();
                $orderDetail->order_id = $order->id;
                $orderDetail->product_id = $cartItem->product->id;
                $orderDetail->quantity = $cartItem->quantity;
                $orderDetail->price = $cartItem->product->price;
                $orderDetail->save();
            }
            Auth::user()->cart()->delete();
            \Session::put('success', 'Payment success');
            return Redirect::route('addmoney.paywithpaypal');
        }
        \Session::put('error', 'Payment failed');

        Session::forget('paypal_payment_id');
        return Redirect::route('addmoney.paywithpaypal');
    }

    public function refund($tran_id)
    {
        $paypal_conf = \Config::get('paypal');

        $paymentPayment = new Payment();
        $paymentInfo = $paymentPayment->get($tran_id, $this->_api_context);

        $transaction = $paymentInfo->getTransactions();

        if (empty($transaction[0])) {
            return false;
        }

        $relatedResource = $transaction[0]->getRelatedResources();
        if (empty($relatedResource[0])) {
            return false;
        }

        $sale = $relatedResource[0]->getSale();

        $refund = new Refund();
        $amt = (new Amount())->setTotal(10)->setCurrency('USD');
        $refund->setAmount($amt);
        $refund->setReason('Sale refund');

        $refundSuccess = $sale->refund($refund, $this->_api_context);

        if ($refundSuccess->getState() == 'approved') {
            \Session::put('success', 'Refund Success');
            return Redirect::route('addmoney.paywithpaypal');
        }
        dd($refundSuccess);
    }
}