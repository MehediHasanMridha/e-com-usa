<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="m-2 rounded-lg bg-red-500 p-3 text-center">{{ $error }}</div>
            <br>
        @endforeach
    @endif
    <h1>addProductPage</h1>
    <form action="{{ route('addProductData') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">title</label>
        <input type="text" name="title" id="name">
        <br>
        <label for="category_name">Category</label>
        <select name="category_name" id="">
            @foreach ($category as $item)
                <option value="{{ $item->category_name }}">{{ $item->category_name }}</option>
            @endforeach
        </select>
        <br>
        <label for="brand_name">Brand</label>
        <select name="brand_name" id="">
            @foreach ($brand as $item)
                <option value="{{ $item->brand_name }}">{{ $item->brand_name }}</option>
            @endforeach
        </select>
        <br>
        <label for="brand_name">Type</label>
        <select name="type" id="">
            <option value="global">Global</option>
            <option value="china">China</option>
        </select>
        <br>
        <label for="brand_name">short Description</label>
        <textarea name="short_description" id="" cols="30" rows="10"></textarea>
        <br>
        <label for="brand_name">Description</label>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <br>
        <label for="brand_name">Price</label>
        <input type="number" name="price" id="" />
        <br>
        <label for="brand_name">discount</label>
        <input type="number" name="discount" id="" />
        <br>
        <label for="brand_name">image</label>
        <input type="file" name="images[]" id="" multiple />
        <br>

        <input type="submit" value="Add Product">
    </form>
</body>

</html>
