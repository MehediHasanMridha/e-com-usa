    {{-- =================Blog-slider-start=========== --}}
    <section>
        <div class="swiper blogSwiper">
            <div class="swiper-wrapper">
                @foreach ($slider_blog as $item)
                    <div class="swiper-slide">
                        <div class="">
                            <div class="blog-card">
                                <div class="blog-card-img h-[350px]"
                                    style="background-image: url('{{ asset('assets/blog_image/' . $item->image) }}')">
                                </div>
                                <div class="blog-info">
                                    <div class="">
                                        <div class="flex items-center justify-center gap-2">
                                            <div class="">
                                                <a href="#" class="text-sm text-serpent hover:text-white">@ By
                                                    {{ $item->title }}</a>
                                            </div>
                                            <div class="">
                                                <a href="#"
                                                    class="text-xs text-white hover:text-serpent">Fashion</a>
                                            </div>
                                            <div class="">
                                                <a href="#" class="text-xs text-white hover:text-serpent">Life
                                                    Style</a>
                                            </div>
                                        </div>
                                        <div class="mt-1 flex justify-center">
                                            <a href="{{ route('blog_item', encrypt($item->id)) }}"
                                                class="text-center text-lg text-white hover:text-serpent">{{ $item->title }}</a>
                                        </div>
                                        <div class="mt-3">
                                            <p class="text-center text-xs text-[#dddd]">
                                                {{ $item->created_at->format('d M y') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    {{-- =================Blog-slider-end=========== --}}
