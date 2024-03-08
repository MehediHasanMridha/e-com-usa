<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>addBrandPage</h1>
    <form action="{{ route('addBrandData') }}" method="POST">
        @csrf
        <label for="brand_name">Brand Name</label>
        <input type="text" name="brand_name" id="name">
        <input type="submit" value="Add Brand">
    </form>
</body>

</html>
