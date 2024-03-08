<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\ShopeController;
use App\Http\Controllers\StripePaymentController;
use App\Models\Product;
use App\Models\SlideShow;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    $product = Product::orderBy('created_at', 'desc')->paginate(8);
    $best_product = Product::withCount('productReview')->orderBy('product_review_count', 'desc')->take(30)->get();
    $slide = SlideShow::where('status', 'active')->get();
    return view('home', compact('product', 'slide', 'best_product'));
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/shope', [ShopeController::class, 'index'])->name('shope');
Route::get('/shope/{type?}/{category?}/{brand?}/{sort?}', [ShopeController::class, 'index'])->name('shope');
Route::get('/view_product/{id?}', [ShopeController::class, 'viewProduct'])->name('view_product');
Route::post('/view_product/{id?}/comment', [ShopeController::class, 'add_comment'])->name('add_comment');
Route::post('/view_product/{id?}/add_to_cart', [ShopeController::class, 'add_to_cart'])->name('add_to_cart');
Route::get('/view_cart', [ShopeController::class, 'view_cart'])->name('view_cart');
Route::get('/offer', [HomeController::class, 'offer'])->name('offer');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog_item/{id?}', [HomeController::class, 'blog_item'])->name('blog_item');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/promotion', function () {
    return view('promotion');
});

Route::get('paywithpaypal', [PaypalController::class, 'payWithPaypal'])->name('addmoney.paywithpaypal');
Route::post('paypal', [PaypalController::class, 'postPaymentWithpaypal'])->name('addmoney.paypal');
Route::get('paypal', [PaypalController::class, 'getPaymentStatus'])->name('payment.status');
Route::get('refund/{trns_id}', [PaypalController::class, 'refund'])->name('payment.refund');


Route::controller(StripePaymentController::class)->group(function () {
    Route::get('stripe', 'stripe')->name('stripe.index');
    Route::post('stripe/checkout', 'stripeCheckout')->name('stripe.checkout');
    Route::get('stripe/checkout/success', 'stripeCheckoutSuccess')->name('stripe.checkout.success');
});

/* PayPal */
// Route::post('paypal', [PaypalController::class, 'payment'])->name('paypal');
// Route::get('paypal', [PaypalController::class, 'getPaymentStatus'])->name('paypal_success');
// Route::get('paypal/cancel', [PaypalController::class, 'cancel'])->name('paypal_cancel');

//.................admin routes.................
Route::middleware(['auth', 'admin'])->group(function () {
    require base_path('routes/adminRoutes.php');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
