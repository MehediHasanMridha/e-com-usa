<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('addBlogData') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Title</label>
        <input type="text" name="title" id="">
        <br>
        <br>
        <label for="">Content</label>
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <br>
        <br>
        <label for="">Image</label>
        <input type="file" name="image" id="">
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>

</body>

</html>
