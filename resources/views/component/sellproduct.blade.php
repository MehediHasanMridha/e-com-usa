    {{-- =========sell-Product start======== --}}
    <section>
        <div class="bg-white px-3 py-3 lg:px-16 lg:py-10 xl:px-0">
            <div class="container mx-auto">
                <div class="">
                    <div class="mb-6 border-b-2 border-b-serpent py-3 lg:mb-10">
                        <h2 class="text-2xl font-bold uppercase text-rbalck">Best Selling Product</h2>
                    </div>

                    <div class="swiper sellProduct">
                        <div class="swiper-wrapper pb-10 lg:pb-16">
                            @foreach ($best_product as $item)
                                <div class="swiper-slide">
                                    <div class="sel_product_cart">
                                        <div class="sell_product"
                                            style="background-image: url('{{ asset('assets/product_image/' . collect(json_decode($item->image))->first()) }}');">
                                            <div class="selDiscount flex items-center justify-center">
                                                <p class="px-6 py-4 text-sm font-semibold text-white">
                                                    {{ number_format($item->discount, 0) }}% Off</p>
                                            </div>
                                            <div class="cart_option">
                                                <div class="cart_icon">
                                                    <button class="text-xl leading-none text-white" title="Quick View">
                                                        <iconify-icon icon="mdi:eye-outline"></iconify-icon>
                                                    </button>
                                                </div>
                                                <div class="cart_icon">
                                                    <button class="text-xl leading-none text-white" title="Wish list">
                                                        <iconify-icon icon="teenyicons:heart-outline"><iconify-icon>
                                                    </button>
                                                </div>
                                                <div class="cart_icon">
                                                    <button class="text-xl text-white" title="Compare">
                                                        <iconify-icon icon="fluent:branch-compare-20-regular">
                                                        </iconify-icon></button>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <div class="product_info_text">
                                                <a href="{{ route('view_product', ['id' => encrypt($item->id)]) }}"
                                                    class="text-base font-semibold text-white hover:text-serpent">{{ $item->title }}</a>
                                                <div class="">
                                                    <h2 class="text-sm text-white">Prize: <span
                                                            class="line-through">{{ number_format($item->price, 0) }}$</span>
                                                        @if ($item->discount > 0)
                                                            @php
                                                                $discounted_price = $item->price - $item->price * ($item->discount / 100);
                                                            @endphp
                                                            {{ number_format($discounted_price, 0) }}$
                                                        @endif
                                                    </h2>
                                                </div>
                                                <div class="mt-10 flex justify-center">
                                                    <form id="add-to-cart-form"
                                                        action="{{ Auth::user() ? route('add_to_cart', ['id' => encrypt($item->id)]) : route('login') }}"
                                                        method="{{ Auth::user() ? 'POST' : 'GET' }}" class="">
                                                        @csrf
                                                        <input type="hidden" id="qty-input" name="qty"
                                                            value="1">
                                                        <button
                                                            class="rounded-full border-2 border-serpent px-4 py-2 text-white hover:bg-serpent">Add
                                                            To
                                                            Cart</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- =========Sell Product end======== --}}
