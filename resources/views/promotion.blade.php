@extends('layout.master')
@section('content')
    <section>
        <div class=" bg-rbalck py-10">
            <div class=" container mx-auto">
                <h2 class=" text-xl font-medium text-white">Our Store</h2>
            </div>
        </div>
    </section>
    {{-- ==============page-header======= --}}
    <section>
        <div class="mt-10">
            <div class="container mx-auto">
                <div class="grid  grid-cols-12 gap-10">
                    <div class=" col-span-4">
                        <img class=" rounded-md" src="{{ asset('assets/img/shoping.jpg') }}" alt="">
                    </div>
                    <div class=" col-span-8">
                        <div class="">
                            <h2 class=" text-3xl  font-medium text-rbalck"> About Store</h2>

                        </div>
                        <div class="">
                            <div class=" mt-6">
                                <p class=" text-sm font-light  text-rbalck">Lorem ipsum dolor sit amet consectetur
                                    adipisicing
                                    elit.
                                    Molestias omnis quae similique at
                                    dolore modi placeat debitis, dolorem voluptatum esse rem porro nostrum consectetur
                                    pariatur
                                    aut accusamus quam corrupti doloribus facilis illo nobis beatae odio voluptas
                                    voluptatem.
                                    Beatae optio error repudiandae rem deleniti voluptas? Vitae quod voluptas adipisci
                                    cupiditate eos.</p>
                            </div>
                            <div class=" mt-6">
                                <p class=" text-sm font-light  text-rbalck">Lorem ipsum dolor sit amet consectetur
                                    adipisicing
                                    elit.
                                    Molestias omnis quae similique at
                                    dolore modi placeat debitis, dolorem voluptatum esse rem porro nostrum consectetur
                                    pariatur
                                    aut accusamus quam corrupti doloribus facilis illo nobis beatae odio voluptas
                                    voluptatem.
                                    Beatae optio error repudiandae rem deleniti voluptas? Vitae quod voluptas adipisci
                                    cupiditate eos.</p>
                            </div>
                        </div>
                        <div class="mt-10">
                            <div class="grid grid-cols-2 gap-10  items-center">
                                <div class=" flex justify-center">
                                    <div class=" flex gap-5 ">
                                        <div class="">
                                            <img src="{{ asset('assets/img/totaluser.png') }}" alt="">
                                        </div>
                                        <div class=" mt-4">
                                            <p class=" text-serpent text-base font-medium">Guest</p>
                                            <h2 class=" text-lg  text-rbalck font-semibold">200000+</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <div class=" flex gap-5 ">
                                        <div class="">
                                            <img src="{{ asset('assets/img/totalsell.png') }}" alt="">
                                        </div>
                                        <div class=" mt-4">
                                            <p class=" text-serpent text-base font-medium">Sell</p>
                                            <h2 class=" text-lg  text-rbalck font-semibold">18659+</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <div class=" flex gap-5 ">
                                        <div class="">
                                            <img src="{{ asset('assets/img/producticon.png') }}" alt="">
                                        </div>
                                        <div class=" mt-4">
                                            <p class=" text-serpent text-base font-medium">Product</p>
                                            <h2 class=" text-lg  text-rbalck font-semibold">8659+</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-center">
                                    <div class=" flex gap-5 ">
                                        <div class="">
                                            <img src="{{ asset('assets/img/coumtrys.png') }}" alt="">
                                        </div>
                                        <div class=" mt-4">
                                            <p class=" text-serpent text-base font-medium">Countrys</p>
                                            <h2 class=" text-lg  text-rbalck font-semibold">120+</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ==============Promotion counting=========== --}}
    <section>
        <div class=" py-10  bg-yellow-400 mt-10">
            <div class="container mx-auto">
                <div class="grid grid-cols-4 gap-10">
                    <div class="  bg-white p-6 rounded-md">
                        <div class=" flex justify-center">
                            <img src="{{ asset('assets/img/discount.png') }}" alt="">
                        </div>
                        <div class="mt-3">
                            <h2 class=" text-lg text-rbalck font-medium text-center"> Top (%) Discount</h2>

                        </div>

                        <div class="mt-4">
                            <p class=" text-sm  font-light text-rbalck text-center"> Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit. Iste
                                inventore
                                eaque voluptate quas
                                ea accusantium deserunt. Consequatur facere tenetur numquam.</p>
                        </div>
                    </div>
                    <div class="  bg-white p-6 rounded-md">
                        <div class=" flex justify-center">
                            <img src="{{ asset('assets/img/crown.png') }}" alt="">
                        </div>
                        <div class="mt-3">
                            <h2 class=" text-lg text-rbalck font-medium text-center">Premium Product</h2>

                        </div>

                        <div class="mt-4">
                            <p class=" text-sm  font-light text-rbalck text-center"> Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit. Iste
                                inventore
                                eaque voluptate quas
                                ea accusantium deserunt. Consequatur facere tenetur numquam.</p>
                        </div>
                    </div>
                    <div class="  bg-white p-6 rounded-md">
                        <div class=" flex justify-center">
                            <img src="{{ asset('assets/img/delivery.png') }}" alt="">
                        </div>
                        <div class="mt-3">
                            <h2 class=" text-lg text-rbalck font-medium text-center">Fastest Delivery</h2>

                        </div>

                        <div class="mt-4">
                            <p class=" text-sm  font-light text-rbalck text-center"> Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit. Iste
                                inventore
                                eaque voluptate quas
                                ea accusantium deserunt. Consequatur facere tenetur numquam.</p>
                        </div>
                    </div>
                    <div class="  bg-white p-6 rounded-md">
                        <div class=" flex justify-center">
                            <img src="{{ asset('assets/img/product-return.png') }}" alt="">
                        </div>
                        <div class="mt-3">
                            <h2 class=" text-lg text-rbalck font-medium text-center">Returns & Exchanges</h2>

                        </div>

                        <div class="mt-4">
                            <p class=" text-sm  font-light text-rbalck text-center"> Lorem ipsum dolor sit amet consectetur
                                adipisicing
                                elit. Iste
                                inventore
                                eaque voluptate quas
                                ea accusantium deserunt. Consequatur facere tenetur numquam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ===============Subscribe-area============ --}}
    <section>
        <div class="py-20">
            <div class="container mx-auto">
                <div class=" w-3/4 mx-auto bg-black p-6 rounded-md ">
                    <h2 class=" text-3xl text-white text-center  font-semibold"> Get's Update</h2>
                    <div class=" w-1/2 mx-auto mt-10 pb-10">
                        <form action="">
                            <div class=" flex items-center">
                                <div class=" w-full">
                                    <input
                                        class=" bg-transparent border border-white  border-r-0 w-full px-3 text-white text-base font-light py-2 focus:outline-none"
                                        type="email" placeholder="Your Mail">
                                </div>
                                <div class="">
                                    <button type="submit"
                                        class=" bg-yellow-400 px-6 py-2 text-base border  border-yellow-400  text-rbalck hover:bg-serpent hover:text-white">
                                        Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
