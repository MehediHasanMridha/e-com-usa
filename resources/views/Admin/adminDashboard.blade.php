<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Admin Dashboard</h1>

    <a href="{{ route('addProductPage') }}">Add Product</a>
    <br>
    <br>
    <a href="{{ route('addCategoryPage') }}">Add Category</a>
    <br>
    <br>
    <a href="{{ route('addBrandPage') }}">Add Brand</a>
    <br>
    <br>
    <a href="{{ route('addSlideShowPage') }}">Add Slider</a>
    <br>
    <br>
    <a href="{{ route('addBlogPage') }}">Add Blog</a>
    <br>
    <br>


    <div class="cursor-pointer rounded-md border-b-2 border-gray-600 bg-white px-5 py-1 text-sm text-rbalck shadow-md hover:text-serpent"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}</div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</body>

</html>
