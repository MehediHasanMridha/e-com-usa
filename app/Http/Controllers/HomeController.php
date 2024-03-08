<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use App\Models\ProductReview;
use App\Models\SlideShow;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $product = Product::orderBy('created_at', 'desc')->paginate(8);
        $best_product = Product::withCount('productReview')->orderBy('product_review_count', 'desc')->take(30)->get();
        $slide = SlideShow::where('status', 'active')->get();
        return view('home', compact('product', 'slide', 'best_product'));
    }
    public function offer()
    {
        $slide = SlideShow::where('status', 'active')->get();
        $product = Product::where('status', 'active')->orderBy('discount', 'desc')->select('image')->take(30)->get();
        return view('offer', compact('slide', 'product'));
    }
    public function blog()
    {
        $blog = Blog::where('status', 'active')->orderBy('created_at', 'desc')->paginate(4);
        $slider_blog = Blog::where('status', 'active')->orderBy('created_at', 'desc')->take(4)->get();
        return view('blog', compact('blog', 'slider_blog'));
    }

    public function blog_item($id)
    {
        $id = decrypt($id);
        $blog = Blog::find($id);
        $slider_blog = Blog::where('status', 'active')->orderBy('created_at', 'desc')->take(4)->get();
        return view('blogdetails', compact('blog', 'slider_blog'));
    }

    public function contact()
    {
        return view('contact');
    }
}