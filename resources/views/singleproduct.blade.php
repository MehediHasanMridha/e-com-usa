@extends('layout.master')
@section('content')
    <section>
        <div class="product_banner bg-rbalck py-10">
            <div class="container mx-auto">
                <div class="flex gap-2">
                    <div class="mt-[2px] text-sm font-light text-white">
                        <a href="#">Home > </h2>
                    </div>
                    <div class="mt-[2px] text-sm font-light text-white">
                        <a href="#" class="text-sm font-light text-white hover:text-serpent hover:underline">shop >
                            </h2>
                    </div>
                    <div class="">
                        <a href="#" class="text-sm font-light text-white hover:text-serpent hover:underline">
                            Talking & Dancing Cactus Mimicking
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section>
        <div class="py-20">
            <div class="container mx-auto">
                <div class="grid grid-cols-12 gap-10">
                    <div class="col-span-4">
                        <div class="swiper product_slider">
                            <div class="swiper-wrapper">
                                @foreach (json_decode($product->image) as $image)
                                    <div class="swiper-slide">
                                        <div class="product_slider_img"
                                            style="background-image:url('{{ asset('assets/product_image/' . $image) }}')">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="col-span-8">
                        <div class="">
                            <h2 class="text-xl font-medium text-rbalck">{{ $product->title }}</h2>
                            <div class="mt-3 flex gap-1">
                                <ul class="flex gap-1">
                                    <li class="text-lg text-yellow-400"><iconify-icon icon="ic:round-star"></iconify-icon>
                                    </li>
                                    <li class="text-lg text-yellow-400"><iconify-icon icon="ic:round-star"></iconify-icon>
                                    </li>
                                    <li class="text-lg text-yellow-400"><iconify-icon icon="ic:round-star"></iconify-icon>
                                    </li>
                                    <li class="text-lg text-yellow-400"><iconify-icon icon="ic:round-star"></iconify-icon>
                                    </li>
                                    <li class="text-lg text-yellow-400"><iconify-icon icon="ic:round-star"></iconify-icon>
                                    </li>
                                </ul>
                                <p class="text-sm text-rbalck">({{ count($product->productReview) }})</p>
                            </div>
                            <div class="">
                                <div class="flex items-center gap-2">
                                    <div class="">
                                        <p class="text-sm font-bold">Brand:</p>
                                    </div>
                                    <div class="">
                                        <a href="#"
                                            class="text-sm font-medium hover:text-serpent hover:underline">{{ $product->brand->brand_name }}</a>
                                    </div>
                                    <div class="">
                                        <p class="text-sm font-medium">||</p>
                                    </div>
                                    <div class="">
                                        <a href="{{ url('/shop') }}"
                                            class="text-sm font-medium hover:text-serpent hover:underline"> Suggest for
                                            you</a>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h2 class="text-xl font-bold text-serpent">Short Discription :</h2>
                                <p class="mt-3 text-justify text-sm font-light"> {{ $product->short_description }}</p>
                            </div>
                            <div class="mt-4 flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <h2 class="text-base font-medium text-serpent">Price :</h2>
                                    <h2 class="text-balck text-base font-medium line-through">
                                        {{ number_format($product->price, 0) }}$
                                    </h2>
                                    @if ($product->discount > 0)
                                        @php
                                            $discounted_price = $product->price - $product->price * ($product->discount / 100);
                                        @endphp
                                        <h2 class="text-balck text-base font-medium">
                                            {{ number_format($discounted_price, 0) }}$</h2>
                                    @endif
                                </div>
                                <div class="mt-1">
                                    <div class="flex gap-4">
                                        <div class="share_social">
                                            <button class="text-xl text-serpent"><iconify-icon
                                                    icon="ic:outline-share"></iconify-icon></button>
                                            <div class="social_share_product">
                                                <ul
                                                    class="flex items-center gap-3 rounded-md bg-white px-4 pt-2 shadow-sshadow">
                                                    <li>
                                                        <a href="#"
                                                            class="text-2xl leading-none text-serpent hover:text-rbalck">
                                                            <iconify-icon icon="ic:baseline-facebook"></iconify-icon></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="text-2xl leading-none text-serpent hover:text-rbalck">
                                                            <iconify-icon icon="ri:instagram-fill"></iconify-icon>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="text-2xl leading-none text-serpent hover:text-rbalck">
                                                            <iconify-icon icon="ri:twitter-fill"></iconify-icon>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="text-2xl leading-none text-serpent hover:text-rbalck">
                                                            <iconify-icon icon="mdi:google-plus"></iconify-icon>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <button class="text-xl text-serpent">
                                            <iconify-icon
                                                icon="streamline:interface-favorite-heart-reward-social-rating-media-heart-it-like-favorite-love">
                                            </iconify-icon></button>
                                    </div>
                                </div>

                            </div>
                            <div class="mt-4 flex items-center gap-4">
                                <div class="flex items-center gap-3">
                                    <div class="" onclick="increment()">
                                        <button
                                            class="rounded-l-full bg-serpent px-3 text-2xl leading-none text-white hover:bg-rbalck">+</button>
                                    </div>
                                    <div class="">
                                        <p class="text-lg text-rbalck" id="qty">0</p>
                                    </div>
                                    <div class="" onclick="decrement()">
                                        <button
                                            class="rounded-r-full bg-serpent px-3 text-2xl leading-none text-white hover:bg-rbalck">-</button>
                                    </div>
                                </div>
                                <form id="add-to-cart-form"
                                    action="{{ Auth::user() ? route('add_to_cart', ['id' => encrypt($product->id)]) : route('login') }}"
                                    method="{{ Auth::user() ? 'POST' : 'GET' }}" class="">
                                    @csrf
                                    <input type="hidden" id="qty-input" name="qty" value="0">
                                    <button id="add-to-cart-button"
                                        class="rounded-full bg-serpent px-3 py-2 leading-none text-white hover:bg-rbalck">Add
                                        To Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-10">
                    <div class="">
                        <div class="border-b border-b-rbalck">
                            <h2 class="py-3 text-xl font-bold text-serpent">Discription</h2>
                        </div>

                        <p class="mt-3 text-justify text-sm font-light">{{ $product->description }}</p>
                        </p>
                    </div>
                    <div class="">
                        <div class="border-b border-b-rbalck">
                            <h2 class="py-3 text-xl font-bold text-serpent">Review</h2>
                        </div>
                        <div class="mx-auto mt-6 w-2/4">
                            <div class="gap1-10 grid grid-cols-3">
                                <div class="">
                                    <div class="">
                                        <h2 class="text-center text-3xl font-bold text-rbalck">5</h2>
                                    </div>
                                    <div class="flex justify-center gap-1">
                                        <ul class="flex gap-1">
                                            <li class="text-lg text-yellow-400"><iconify-icon
                                                    icon="ic:round-star"></iconify-icon>
                                            </li>
                                            <li class="text-lg text-yellow-400"><iconify-icon
                                                    icon="ic:round-star"></iconify-icon>
                                            </li>
                                            <li class="text-lg text-yellow-400"><iconify-icon
                                                    icon="ic:round-star"></iconify-icon>
                                            </li>
                                            <li class="text-lg text-yellow-400"><iconify-icon
                                                    icon="ic:round-star"></iconify-icon>
                                            </li>
                                            <li class="text-lg text-yellow-400"><iconify-icon
                                                    icon="ic:round-star"></iconify-icon>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="">
                                        <p class="text-center text-sm text-rbalck">({{ $ratingCounts[5]->count ?? 0 }})
                                        </p>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="">
                                        <h2 class="text-center text-3xl font-bold text-rbalck">4</h2>
                                    </div>
                                    <div class="flex justify-center gap-1">
                                        <ul class="flex gap-1">
                                            <li class="text-lg text-yellow-400"><iconify-icon
                                                    icon="ic:round-star"></iconify-icon>
                                            </li>
                                            <li class="text-lg text-yellow-400"><iconify-icon
                                                    icon="ic:round-star"></iconify-icon>
                                            </li>
                                            <li class="text-lg text-yellow-400"><iconify-icon
                                                    icon="ic:round-star"></iconify-icon>
                                            </li>
                                            <li class="text-lg text-yellow-400"><iconify-icon
                                                    icon="ic:round-star"></iconify-icon>
                                            </li>
                                            <li class="text-lg text-yellow-200"><iconify-icon
                                                    icon="ic:round-star"></iconify-icon>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="">
                                        <p class="text-center text-sm text-rbalck">({{ $ratingCounts[4]->count ?? 0 }})
                                        </p>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="">
                                        <h2 class="text-center text-3xl font-bold text-rbalck">3</h2>
                                    </div>
                                    <div class="flex justify-center gap-1">
                                        <ul class="flex gap-1">
                                            <li class="text-lg text-yellow-400"><iconify-icon
                                                    icon="ic:round-star"></iconify-icon>
                                            </li>
                                            <li class="text-lg text-yellow-400"><iconify-icon
                                                    icon="ic:round-star"></iconify-icon>
                                            </li>
                                            <li class="text-lg text-yellow-400"><iconify-icon
                                                    icon="ic:round-star"></iconify-icon>
                                            </li>
                                            <li class="text-lg text-yellow-200"><iconify-icon
                                                    icon="ic:round-star"></iconify-icon>
                                            </li>
                                            <li class="text-lg text-yellow-200"><iconify-icon
                                                    icon="ic:round-star"></iconify-icon>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="">
                                        <p class="text-center text-sm text-rbalck">({{ $ratingCounts[3]->count ?? 0 }})
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="border-b border-b-rbalck">
                            <h2 class="py-3 text-xl font-bold text-serpent">Comments</h2>
                        </div>
                        <div class="mx-auto mt-6 w-3/4">
                            @if (count($productReviews) > 0)
                                @foreach ($productReviews as $itemReview)
                                    <div class="mb-4 rounded-md bg-white px-10 py-5 shadow-sshadow">
                                        <div class="flex items-center gap-2">
                                            <div class="h-[60px] w-[60px] rounded-full bg-cover bg-center bg-no-repeat"
                                                style="background-image: url('{{ asset('assets/img/clint.jpeg') }}')">

                                            </div>
                                            <div class="">
                                                <div class="">
                                                    <div class="">
                                                        <p class="text-sm font-light text-rbalck">
                                                            {{ $itemReview->user->first_name }}
                                                            {{ $itemReview->user->last_name }}</p>
                                                    </div>
                                                    <div class="flex gap-1">
                                                        @if ($itemReview->rating)
                                                            <ul class="flex gap-1">
                                                                @for ($i = 0; $i < $itemReview->rating; $i++)
                                                                    <li class="text-lg text-yellow-400"><iconify-icon
                                                                            icon="ic:round-star"></iconify-icon>
                                                                    </li>
                                                                @endfor
                                                                @for ($i = 0; $i < 5 - $itemReview->rating; $i++)
                                                                    <li class="text-lg text-yellow-200"><iconify-icon
                                                                            icon="ic:round-star"></iconify-icon>
                                                                    </li>
                                                                @endfor
                                                            </ul>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-5">
                                            <p class="text-sm font-light text-rbalck">{{ $itemReview->comment }}
                                            </p>
                                        </div>
                                        {{-- <div class="mt-3 flex items-center justify-end gap-4">
                                    <div class="flex gap-2">
                                        <div class="mt-1">
                                            <p class="text-sm font-light text-rbalck">(50)</p>
                                        </div>
                                        <div class="">
                                            <button class="text-2xl text-serpent hover:text-rbalck"><iconify-icon
                                                    icon="iconamoon:like-thin"></iconify-icon></button>
                                        </div>
                                    </div>
                                    <div class="flex gap-2">
                                        <div class="">
                                            <p class="text-sm font-light text-rbalck">(50)</p>
                                        </div>
                                        <div class="">
                                            <button class="text-2xl text-serpent hover:text-rbalck"><iconify-icon
                                                    icon="iconamoon:dislike-light"></iconify-icon></button>
                                        </div>
                                    </div>

                                </div> --}}
                                    </div>
                                @endforeach
                            @endif
                            {!! $productReviews->links() !!}
                        </div>
                    </div>
                </div>
                <div class="mx-auto mt-6 w-3/4">
                    <div class="">
                        <form
                            action="{{ Auth::user() ? route('add_comment', ['id' => encrypt($product->id)]) : route('login') }}"
                            method="{{ Auth::user() ? 'POST' : 'GET' }}">
                            @csrf
                            <textarea name="comment" id="" cols="30" rows="10"
                                class="w-full border border-serpent p-4 text-sm text-rbalck focus:outline-none" placeholder="Your Comment's"></textarea>
                            <h1>Rating</h1>
                            <select name="rating" id=""
                                class="w-full border border-serpent p-4 text-sm text-rbalck focus:outline-none">
                                <option value="">Select Rating</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <br>
                            <button class="mt-4 rounded-md bg-serpent px-3 py-1 text-white">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('increment&decrement')
    <script>
        let qty = document.getElementById('qty');
        let qtyInput = document.getElementById('qty-input');

        document.getElementById('add-to-cart-button').addEventListener('click', (event) => {
            let qty = parseInt(document.getElementById('qty').innerText);
            if (qty < 1) {
                event.preventDefault();
                alert('Please select at least 1 quantity before adding to cart.');
            }
        });

        function increment() {
            let value = qty.innerText;
            qty.innerText = parseInt(value) + 1;
            qtyInput.value = qty.innerText;
        }

        function decrement() {
            let value = qty.innerText;
            qty.innerText = parseInt(value) - 1;
            if (qty.innerText < 0) {
                qty.innerText = 0;
            }
            qtyInput.value = qty.innerText;
        }
    </script>
@endsection
