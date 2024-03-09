<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>View</title>
</head>

<body>
    {{-- {{ $category }} --}}
    <div class="relative left-4 top-3">
        @foreach ($category as $item)
            <div class="flex flex-row space-x-11">
                <div class="items-center">{{ $item->category_name }}</div>
                <a href="{{ route('deleteCategory', ['id' => $item->id]) }}" class="text-red-600">Detete</a>
            </div>
        @endforeach
        <a href="/admin_home">Back</a>
    </div>
</body>

</html>
