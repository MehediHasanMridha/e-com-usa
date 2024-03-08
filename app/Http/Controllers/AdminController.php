<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SlideShow;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('admin');
    // }


    public function admin_home()
    {
        return view('Admin.adminDashboard');
    }

    /**
     * Display a listing of the resource.
     */
    //.............add_category_page................
    public function add_category()
    {
        return view('Admin.Category.addCategoryPage');
    }

    // ..............add_category_data................
    public function add_category_data(Request $request)
    {
        $category_name = $request->input('category_name');
        $category = new Category();
        $category->category_name = $category_name;
        $category->save();
        return redirect()->back();
    }

    //.............add_brand_page................
    public function add_brand()
    {
        return view('Admin.Brand.addBrandPage');
    }

    // ..............add_brand_data................
    public function add_brand_data(Request $request)
    {
        $brand_name = $request->input('brand_name');
        $brand = new Brand();
        $brand->brand_name = $brand_name;
        $brand->save();
        return redirect()->back();
    }
    //.............add_product_page................
    public function add_product()
    {
        $category = Category::All();
        $brand = Brand::All();
        return view('Admin.Product.addProductPage', compact('category', 'brand'));
    }

    // ..............add_product_data................
    public function add_product_data(Request $request)
    {

        $messages = [
            'images.required' => 'Please upload at least one image.',
            'images.*.image' => 'Each file must be an image.',
            'images.*.mimes' => 'Each image must be a jpeg, png, jpg, gif, or svg file.',
            'images.*.max' => 'Each image must not exceed 2MB.',
            'category_name.required' => 'Please select a category.',
            'category_name.exists' => 'The selected category does not exist.',
            'brand_name.required' => 'Please select a brand.',
            'brand_name.exists' => 'The selected brand does not exist.',
            'title.required' => 'Please enter a title.',
            'title.max' => 'The title may not be greater than 255 characters.',
            'short_description.required' => 'Please enter a short description.',
            'short_description.max' => 'The short description may not be greater than 255 characters.',
            'description.required' => 'Please enter a description.',
            'type.required' => 'Please enter a type.',
            'type.max' => 'The type may not be greater than 255 characters.',
            'price.required' => 'Please enter a price.',
            'price.numeric' => 'The price must be a number.',
            'discount.required' => 'Please enter a discount.',
            'discount.numeric' => 'The discount must be a number.',
        ];

        $request->validate([
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_name' => 'required|exists:categories,category_name',
            'brand_name' => 'required|exists:brands,brand_name',
            'title' => 'required|max:255',
            'short_description' => 'required|max:255',
            'description' => 'required',
            'type' => 'required|max:255',
            'price' => 'required|numeric',
            'discount' => 'required|numeric',
        ], $messages);

        $data = [];
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {
                $upload_path = public_path('assets/product_image');
                $image_name = $image->getClientOriginalName();
                $generated_new_name = time() . '_' . $image->getClientOriginalName();
                $image->move($upload_path, $generated_new_name);
                $data[] = $generated_new_name;
            }
        }

        $category = Category::where('category_name', $request->input('category_name'))->first();
        $brand = Brand::where('brand_name', $request->input('brand_name'))->first();

        $product = new Product();
        $product->title = $request->input('title');
        $product->short_description = $request->input('short_description');
        $product->description = $request->input('description');
        $product->category_id = $category->id;
        $product->brand_id = $brand->id;
        $product->type = $request->input('type');
        $product->image = json_encode($data);
        $product->price = $request->input('price');
        $product->discount = $request->input('discount');
        $product->save();
        return redirect()->back();
    }

    public function add_slide_show()
    {
        return view('Admin.SlideShow.addSlideShowPage');
    }

    public function add_slide_show_data(Request $request)
    {
        $messages = [
            'image.required' => 'Please upload at least one image.',
            'image.*.image' => 'Each file must be an image.',
            'image.*.mimes' => 'Each image must be a jpeg, png, jpg, gif, or svg file.',
            'image.*.max' => 'Each image must not exceed 2MB.',
            'type.required' => 'Please enter a type.',
        ];
        $request->validate([
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type' => 'required',
        ], $messages);

        $slide_show = new SlideShow();
        $slide_show->type = $request->input('type');
        if ($request->hasfile('image')) {
            $upload_path = public_path('assets/slide_image');
            $image_name = $request->file('image')->getClientOriginalName();
            $generated_new_name = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move($upload_path, $generated_new_name);
            $slide_show->image = $generated_new_name;
        }
        $slide_show->save();
        return redirect()->back();
    }

    public function add_blog()
    {
        return view('Admin.Blog.addBogPage');
    }


    public function add_blog_data(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        if ($request->hasfile('image')) {
            $upload_path = public_path('assets/blog_image');
            $image_name = $request->file('image')->getClientOriginalName();
            $generated_new_name = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move($upload_path, $generated_new_name);
            $blog->image = $generated_new_name;
        }
        $blog->save();
        return redirect()->back();
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