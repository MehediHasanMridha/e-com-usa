<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Auth;
use Illuminate\Http\Request;
use Stripe;
use Illuminate\View\View;


class StripePaymentController extends Controller
{
    public function stripe(): View
    {
        return view('view_cart');
    }

    public function stripeCheckout(Request $request)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        $redirectUrl = route('stripe.checkout.success') . '?session_id={CHECKOUT_SESSION_ID}';
        $cartItems = Auth::user()->cart()->with('product')->get();
        $lineItems = [];
        foreach ($cartItems as $item) {
            $lineItems[] = [
                'price_data' => [
                    'product_data' => [
                        'name' => $item->product->title,
                    ],
                    'unit_amount' => $item->product->price * 100,
                    // Stripe expects amounts in cents
                    'currency' => 'usd',
                ],
                'quantity' => $item->quantity,
            ];
        }

        $response = $stripe->checkout->sessions->create([
            'success_url' => $redirectUrl,

            'customer_email' => Auth::user()->email,

            'payment_method_types' => ['link', 'card'],

            'line_items' => $lineItems,

            'mode' => 'payment',
            'allow_promotion_codes' => true,
        ]);

        return redirect($response['url']);
    }

    public function stripeCheckoutSuccess(Request $request)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        $response = $stripe->checkout->sessions->retrieve($request->session_id);
        if (!$response->payment_status) {
            return redirect()->route('view_cart')
                ->with('error', 'Payment failed.');
        }
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->status = 'pending';
        $order->total_price = $response->amount_total / 100;
        $order->save();
        $cartItems = Auth::user()->cart()->with('product')->get();
        foreach ($cartItems as $item) {
            $orderDetail = new OrderDetail();
            $orderDetail->order_id = $order->id;
            $orderDetail->product_id = $item->product->id;
            $orderDetail->quantity = $item->quantity;
            $orderDetail->price = $item->product->price;
            $orderDetail->save();
        }
        Auth::user()->cart()->delete();
        return redirect()->route('view_cart')
            ->with('success', 'Payment successful.');
    }
}