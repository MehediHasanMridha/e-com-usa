    {{-- =========Hero-slider======== --}}
    <section>
        <div class="swiper heroslider">
            <div class="swiper-wrapper">
                @foreach ($slide as $item)
                    @if ($item->type == 'home')
                        <div class="swiper-slide">
                            <div class="hero-slider"
                                style="background-image: url('{{ asset('assets/slide_image/' . $item->image) }}');">
                                <div class="container mx-auto">
                                    <div class="hero-slider_info w-1/2 lg:w-2/5">
                                        <div class="slider-main-info">
                                            <p class="mb-3 text-xs font-bold text-rbalck md:text-lg">Spring - Summer 2023
                                            </p>
                                            <h2 class="mb-3 text-lg font-bold text-rbalck lg:text-3xl">FLASH SALE OF 70%
                                            </h2>
                                            <p class="mb-8 hidden text-sm font-normal text-rbalck md:flex">
                                                Duis aute irure dolor in reprehenderit in voluptate velit
                                                essecillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat
                                                cupidatat
                                                nonproident u
                                                fugiat nulla pariatur.Excepteur sint occaecat cupidatat nonproident
                                            </p>
                                            <a href="#"
                                                class="mt-4 rounded-full border-2 border-serpent px-4 py-1 text-sm text-rbalck hover:bg-serpent hover:text-white md:py-2 md:text-base lg:mt-0">Shop
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    {{-- =========Hero-slider======== --}}
