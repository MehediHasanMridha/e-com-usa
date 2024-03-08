<?php
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/admin_home', [AdminController::class, 'admin_home'])->name('adminHome');
Route::get('/add_category', [AdminController::class, 'add_category'])->name('addCategoryPage');
Route::post('/add_category_data', [AdminController::class, 'add_category_data'])->name('addCategoryData');
Route::get('/add_brand', [AdminController::class, 'add_brand'])->name('addBrandPage');
Route::post('/add_brand_data', [AdminController::class, 'add_brand_data'])->name('addBrandData');
Route::get('/add_product', [AdminController::class, 'add_product'])->name('addProductPage');
Route::post('/add_product_data', [AdminController::class, 'add_product_data'])->name('addProductData');
Route::get('/add_slide_show', [AdminController::class, 'add_slide_show'])->name('addSlideShowPage');
Route::post('/add_slide_show_data', [AdminController::class, 'add_slide_show_data'])->name('addSlideShowData');
Route::get('/add_blog', [AdminController::class, 'add_blog'])->name('addBlogPage');
Route::post('/add_blog_data', [AdminController::class, 'add_blog_data'])->name('addBlogData');