@extends('layout.master')

@section('content')
    <section>
        <div class="bg-rbalck py-10">
            <div class="container mx-auto">
                <h2 class="text-xl font-medium text-white">{{ $blog->title }}</h2>
            </div>

        </div>
    </section>
    {{-- ==============Blog-details-start=========== --}}
    <section>
        <div class="blog-image" style="background-image: url('{{ asset('assets/blog_image/' . $blog->image) }}')"></div>
        <div class="container mx-auto">
            <div class="grid grid-cols-12 gap-10 py-10">
                <div class="col-span-8">
                    <div class="">
                        <div class="">
                            <div class="">
                                <div class="flex items-center gap-2">
                                    <div class="">
                                        <a href="#" class="text-sm text-serpent hover:text-white">@ By
                                            {{ $blog->author }}</a>
                                    </div>
                                    <div class="">
                                        <a href="#" class="text-xs text-rbalck hover:text-serpent">Fashion</a>
                                    </div>
                                    <div class="mt-1">
                                        <p class="text-center text-xs text-rbalck">--
                                            {{ $blog->created_at->format('d M Y') }}</p>
                                    </div>
                                </div>
                                <h2 class="text-xl font-medium text-rbalck">{{ $blog->title }}</h2>
                            </div>

                        </div>
                        <div class="mt-10">
                            <p class="text-justify text-sm font-light text-rbalck">Lorem ipsum dolor sit, amet consectetur
                                {{ $blog->content }}
                            </p>

                        </div>
                    </div>
                </div>
                {{-- <div class="col-span-4">
                    <div class="">
                        <div class="border-b border-b-serpent">
                            <h2 class="text-base font-semibold text-serpent">Filters</h2>
                            <div class="mt-4">
                                <div class="mb-2 flex items-center gap-3">
                                    <div class="mt-1">
                                        <input class="" type="radio" name="filter">
                                    </div>
                                    <div class="">
                                        <p class="text-sm font-light text-rbalck">Men</p>
                                    </div>
                                </div>
                                <div class="mb-2 flex items-center gap-3">
                                    <div class="mt-1">
                                        <input class="" type="radio" name="filter">
                                    </div>
                                    <div class="">
                                        <p class="text-sm font-light text-rbalck">Woman</p>
                                    </div>
                                </div>
                                <div class="mb-2 flex items-center gap-3">
                                    <div class="mt-1">
                                        <input class="" type="radio" name="filter">
                                    </div>
                                    <div class="">
                                        <p class="text-sm font-light text-rbalck">Boy</p>
                                    </div>
                                </div>
                                <div class="mb-2 flex items-center gap-3">
                                    <div class="mt-1">
                                        <input class="" type="radio" name="filter">
                                    </div>
                                    <div class="">
                                        <p class="text-sm font-light text-rbalck">Girl</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-10 border-b border-b-serpent">
                            <h2 class="text-base font-semibold text-serpent">Categories</h2>
                            <div class="mt-4">
                                <div class="mb-2 flex items-center gap-3">
                                    <div class="mt-1">
                                        <input class="" type="checkbox" value="">
                                    </div>
                                    <div class="">
                                        <p class="text-sm font-light text-rbalck">Tops <span
                                                class="text-serpent">(53812)</span></p>
                                    </div>
                                </div>
                                <div class="mb-2 flex items-center gap-3">
                                    <div class="mt-1">
                                        <input class="" type="checkbox" value="">
                                    </div>
                                    <div class="">
                                        <p class="text-sm font-light text-rbalck">Shari <span
                                                class="text-serpent">(350)</span></p>
                                    </div>
                                </div>
                                <div class="mb-2 flex items-center gap-3">
                                    <div class="mt-1">
                                        <input class="" type="checkbox" value="">
                                    </div>
                                    <div class="">
                                        <p class="text-sm font-light text-rbalck">Pant <span
                                                class="text-serpent">(134)</span></p>
                                    </div>
                                </div>
                                <div class="mb-2 flex items-center gap-3">
                                    <div class="mt-1">
                                        <input class="" type="checkbox" value="">
                                    </div>
                                    <div class="">
                                        <p class="text-sm font-light text-rbalck">T shart<span
                                                class="text-serpent">(134)</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-10 border-b border-b-serpent">
                            <h2 class="text-base font-semibold text-serpent">Brands</h2>
                            <div class="mt-4">
                                <div class="mb-2 flex items-center gap-3">
                                    <div class="mt-1">
                                        <input class="" type="checkbox" value="">
                                    </div>
                                    <div class="">
                                        <p class="text-sm font-light text-rbalck">Easy</p>
                                    </div>
                                </div>
                                <div class="mb-2 flex items-center gap-3">
                                    <div class="mt-1">
                                        <input class="" type="checkbox" value="">
                                    </div>
                                    <div class="">
                                        <p class="text-sm font-light text-rbalck">Appel</p>
                                    </div>
                                </div>
                                <div class="mb-2 flex items-center gap-3">
                                    <div class="mt-1">
                                        <input class="" type="checkbox" value="">
                                    </div>
                                    <div class="">
                                        <p class="text-sm font-light text-rbalck">Honda</p>
                                    </div>
                                </div>
                                <div class="mb-2 flex items-center gap-3">
                                    <div class="mt-1">
                                        <input class="" type="checkbox" value="">
                                    </div>
                                    <div class="">
                                        <p class="text-sm font-light text-rbalck">Yamaha</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    {{-- ==============Blog-details-end=========== --}}

    {{-- =============blog-slider-start============ --}}
    @include('component.blogSlider')
    {{-- =============blog-slider-end============ --}}
@endsection
