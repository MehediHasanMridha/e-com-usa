<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductReview;
use Auth;
use Illuminate\Http\Request;

class ShopeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categoryParam = $request->input('category');
        $brandParam = $request->input('brand');
        $typeParam = $request->input('type');
        $sortParam = $request->input('sort');
        $categoryArray = [];
        $brandArray = [];
        $typeArray = [];
        $sortData = '';
        $product = Product::query(); // Start the query, but don't execute it yet

        if ($sortParam == 'high_price') {
            $sortData = 'high_price';
            $product = $product->orderBy('price', 'desc');
        } elseif ($sortParam == 'low_price') {
            $sortData = 'low_price';
            $product = $product->orderBy('price', 'asc');
        } elseif ($sortParam == 'newest') {
            $sortData = 'newest';
            $product = $product->orderBy('created_at', 'desc');
        } elseif ($sortParam == 'recomaded') {
            $sortData = 'recomaded';
            $product = $product->orderBy('created_at', 'asc');
        }

        if ($categoryParam) {
            $categoryArray = explode(',', $categoryParam);
            $product = $product->whereIn('category_id', $categoryArray);
        }

        if ($brandParam) {
            $brandArray = explode(',', $brandParam);
            $product = $product->whereIn('brand_id', $brandArray);
        }

        if ($typeParam) {
            $typeArray = explode(',', $typeParam);
            $product = $product->whereIn('type', $typeArray);
        }

        $product = $product->paginate(8);
        $category = Category::withCount('products')->get();
        $brand = Brand::withCount('products')->get();
        return view('shop', compact('category', 'brand', 'product', 'categoryArray', 'brandArray', 'typeArray', 'sortData'));
    }

    public function viewProduct(string $id)
    {
        // $id = decrypt($id);
        // $product = Product::with(['productReview', 'productReview.user'])->find($id);


        $id = decrypt($id);
        $product = Product::find($id);
        $productReviews = $product->productReview()->with([
            'user' => function ($query) {
                $query->select('id', 'first_name', 'last_name', 'image');
            }
        ])->paginate(3);

        $ratingCounts = $product->productReview()->selectRaw('rating, COUNT(*) as count')->groupBy('rating')->get()->keyBy('rating');

        return view('singleproduct', compact('product', 'productReviews', 'ratingCounts'));


    }

    public function add_comment(Request $request, $id = null)
    {
        $id = decrypt($id);
        $product = Product::find($id);
        $productReview = new ProductReview();
        $productReview->product_id = $product->id;
        $productReview->user_id = Auth::user()->id;
        if ($request->input('comment')) {
            $productReview->comment = $request->input('comment');
        }
        if ($request->input('rating')) {
            $productReview->rating = $request->input('rating');
        }
        $productReview->save();
        // return $request->input('rating');
        return redirect()->back();
    }

    public function add_to_cart(Request $request, $id = null)
    {
        $id = decrypt($id);
        $qty = $request->input('qty');
        $userId = Auth::user()->id;
        $cart = Cart::where('user_id', $userId)->where('product_id', $id)->first();

        if ($cart) {
            $cart->quantity += $qty;
        } else {
            $cart = new Cart();
            $cart->user_id = $userId;
            $cart->product_id = $id;
            $cart->quantity = $qty;
        }

        $cart->save();
        return redirect()->back();
    }

    public function view_cart()
    {
        $cart = Auth::user()->cart()->with('product')->get();
        return view('view_cart', compact('cart'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}