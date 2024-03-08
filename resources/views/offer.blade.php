@extends('layout.master')
@section('content')
    {{-- ====================Offer-slider-start======= --}}
    <section>
        <div class="swiper offer-slider">
            <div class="swiper-wrapper">
                @foreach ($slide as $item)
                    @if ($item->type == 'offer')
                        <div class="swiper-slide">
                            <div class="offer-slider"
                                style="background-image: url('{{ asset('assets/slide_image/' . $item->image) }}')">
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    {{-- ====================Offer-slider-End======= --}}

    {{-- ===========offer-grid start======= --}}
    <section>
        <div class="py-20">
            <div class="container mx-auto">
                <div class="container mx-auto">
                    <h2 class="text-3xl font-medium text-rbalck">Exclusive Offers</h2>
                </div>
                <div class="mt-10 grid grid-cols-3 gap-4">
                    @foreach ($product as $item)
                        <div>
                            <img class="h-64 w-96 rounded-lg"
                                src="{{ asset('assets/product_image/' . collect(json_decode($item->image))->first()) }}"
                                alt="">
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
    {{-- ===========offer-grid end======= --}}
@endsection
