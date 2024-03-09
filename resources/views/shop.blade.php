@vite('resources/js/app.js')
@extends('layout.master')
@section('content')
    <section>
        <div class="bg-rbalck py-10">
            <div class="container mx-auto">
                <h2 class="text-xl font-medium text-white">Ladies Tops</h2>
                <a class="text-sm font-light text-white" href="{{ url('/offer') }}">Indian Price Drop on 12 Aug.Get up to
                    <span class="font-bold text-serpent">70%</span>
                    discount</a>
            </div>
        </div>
    </section>
    {{-- ===================Product-start========== --}}
    <section>
        <div class="py-10">
            <div class="container mx-auto">
                <div class="flex items-center justify-between">
                    <div class="">
                        <h2 class="text-sm text-rbalck"><span class="font-medium text-serpent">Showing 1 - 30</span> out
                            of {{ $product->count() }}</h2>
                    </div>
                    <div class="flex items-center gap-3">
                        <h2 class="text-sm text-serpent">Short by:</h2>
                        <select name="sort" id="sort" onchange="isChecked()"
                            class="text-sm text-rbalck focus:outline-none">
                            <option value="recomaded" {{ $sortData == 'recomaded' ? 'selected' : '' }}>
                                Recomaded</option>
                            <option value="newest" {{ $sortData == 'newest' ? 'selected' : '' }}>
                                Newest
                            </option>
                            <option value="low_price" {{ $sortData == 'low_price' ? 'selected' : '' }}>
                                Low price
                            </option>
                            <option value="high_price" {{ $sortData == 'high_price' ? 'selected' : '' }}>
                                High price
                            </option>
                        </select>
                    </div>
                </div>
                <div class="mt-16 grid grid-cols-12 gap-5">
                    <div class="col-span-3">
                        <div class="">
                            <div class="border-b border-b-serpent">
                                <h2 class="text-base font-semibold text-serpent">Filters</h2>
                                <div class="mt-4">
                                    <div class="mb-2 flex items-center gap-3">
                                        <div class="mt-1">
                                            <input class="" type="radio" name="filter" value="global"
                                                {{ in_array('global', $typeArray) ? 'checked' : '' }} onclick="isChecked()">
                                        </div>
                                        <div class="">
                                            <p class="text-sm font-light text-rbalck">Global</p>
                                        </div>
                                    </div>
                                    <div class="mb-2 flex items-center gap-3">
                                        <div class="mt-1">
                                            <input class="" type="radio" name="filter" value="china"
                                                {{ in_array('china', $typeArray) ? 'checked' : '' }} onclick="isChecked()">
                                        </div>
                                        <div class="">
                                            <p class="text-sm font-light text-rbalck">China</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10 border-b border-b-serpent">
                                <h2 class="text-base font-semibold text-serpent">Categories</h2>
                                <div class="mt-4">
                                    @if (count($category) > 0)
                                        @foreach ($category as $item)
                                            <div class="mb-2 flex items-center gap-3">
                                                <div class="mt-1">
                                                    <input class="" type="checkbox"
                                                        {{ in_array($item->id, $categoryArray) ? 'checked' : '' }}
                                                        value="{{ $item->id }}" name="category" onclick="isChecked()">
                                                </div>
                                                <div class="">
                                                    <p class="text-sm font-light text-rbalck">{{ $item->category_name }}
                                                        <span class="text-serpent">({{ $item->products_count }})</span>
                                                    </p>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="mt-10 border-b border-b-serpent">
                                <h2 class="text-base font-semibold text-serpent">Brands</h2>
                                <div class="mt-4">
                                    @if (count($brand) > 0)
                                        @foreach ($brand as $item)
                                            <div class="mb-2 flex items-center gap-3">
                                                <div class="mt-1">
                                                    <input class=""
                                                        {{ in_array($item->id, $brandArray) ? 'checked' : '' }}
                                                        type="checkbox" value="{{ $item->id }}" name="brand"
                                                        onclick="isChecked()">
                                                </div>
                                                <div class="">
                                                    <p class="text-sm font-light text-rbalck">{{ $item->brand_name }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-9">
                        <div class="grid grid-cols-4 gap-4">
                            @include('component.productcardsell')
                        </div>
                        <div class="mt-6 flex justify-center">
                            {{ $product->withQueryString()->links('pagination.tailwind') }}
                            {{-- <ul class="flex gap-1">
                                <li><a class="rounded-md text-2xl text-rbalck hover:text-serpent"
                                        href="#"><iconify-icon icon="ei:arrow-left"></iconify-icon></a></li>
                                <li><a class="rounded-md text-sm text-rbalck hover:text-serpent" href="#">1</li>
                                <li><a class="rounded-md text-sm text-rbalck hover:text-serpent" href="#">2</li>
                                <li><a class="rounded-md text-sm text-rbalck hover:text-serpent" href="#">3</li>
                                <li><a class="rounded-md text-2xl text-rbalck hover:text-serpent"
                                        href="#"><iconify-icon icon="ei:arrow-right"></iconify-icon></a></li>

                            </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ===================Product-start========== --}}
@endsection


@section('filterJS')
    <script>
        function isChecked() {
            const categoryCheckboxes = document.querySelectorAll('input[name="category"]');
            const brandCheckboxes = document.querySelectorAll('input[name="brand"]');
            const types = document.querySelectorAll('input[name="filter"]');
            const sortValue = document.getElementById('sort');
            let selectedCategories = [];
            let selectedBrands = [];
            let selectedTypes = [];

            categoryCheckboxes.forEach(function(checkbox) {
                if (checkbox.checked) {
                    selectedCategories.push(checkbox.value);
                }
            });

            brandCheckboxes.forEach(function(checkbox) {
                if (checkbox.checked) {
                    selectedBrands.push(checkbox.value);
                }
            });

            types.forEach(function(checkbox) {
                if (checkbox.checked) {
                    selectedTypes.push(checkbox.value);
                }
            });

            let url = "{{ url()->current() }}";
            console.log("🚀 ~ file: shop.blade.php:181 ~ isChecked ~ sortValue.value:", sortValue.value)
            if (sortValue.value != "") {
                // if (url.includes('?')) {
                //     url = url + "&sort=" + sortValue.value.toString();
                // } else {
                // }
                url = url + "?sort=" + sortValue.value.toString();
            }
            if (selectedCategories.length > 0) {
                if (url.includes('?')) {
                    url = url + "&category=" + selectedCategories.toString();
                } else {
                    url = url + "?category=" + selectedCategories.toString();
                }
            }
            if (selectedBrands.length > 0) {
                if (url.includes('?')) {
                    url = url + "&brand=" + selectedBrands.toString();
                } else {
                    url = url + "?brand=" + selectedBrands.toString();
                }
            }
            if (selectedTypes.length > 0) {
                if (url.includes('?')) {
                    url = url + "&type=" + selectedTypes.toString();
                } else {
                    url = url + "?type=" + selectedTypes.toString();
                }
            }
            window.location.href = url;
            console.log(selectedCategories.toString());
            console.log(selectedBrands.toString());
            console.log(selectedTypes.toString());
        }
    </script>
@endsection
