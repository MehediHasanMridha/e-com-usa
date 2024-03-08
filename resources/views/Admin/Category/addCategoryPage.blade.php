<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>addCategoryPage</h1>
    <form action="{{ route('addCategoryData') }}" method="POST">
        @csrf
        <label for="category_name">Category Name</label>
        <input type="text" name="category_name" id="name">
        <input type="submit" value="Add Category">
    </form>
</body>

</html>
