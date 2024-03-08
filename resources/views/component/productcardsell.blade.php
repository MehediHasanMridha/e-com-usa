 @if ($product)
     @foreach ($product as $item)
         <div class="sel_product_cart">
             <div class="sell_product"
                 style="background-image: url('{{ asset('assets/product_image/' . collect(json_decode($item->image))->first()) }}');">
                 {{-- <div class="selDiscount flex items-center justify-center">
                     <p class="px-6 py-4 text-sm font-semibold text-white">New</p>
                 </div> --}}
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
                         class="text-base font-semibold text-white hover:text-serpent">
                         {{ $item->title }}</a>
                     <div class="">
                         <h2 class="text-sm text-white">Prize: {{ $item->price }}$ </h2>
                     </div>
                     <div class="mt-10 flex justify-center">
                         <form id="add-to-cart-form"
                             action="{{ Auth::user() ? route('add_to_cart', ['id' => encrypt($item->id)]) : route('login') }}"
                             method="{{ Auth::user() ? 'POST' : 'GET' }}" class="">
                             @csrf
                             <input type="hidden" id="qty-input" name="qty" value="1">
                             <button
                                 class="rounded-full border-2 border-serpent px-4 py-2 text-white hover:bg-serpent">Add
                                 To
                                 Cart</button>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     @endforeach
 @endif

 {{-- <div class="sel_product_cart">
     <div class="sell_product" style="background-image: url('{{ asset('assets/img/product01.jpg') }}')">
         <div class="selDiscount flex items-center justify-center">
             <p class="px-6 py-4 text-sm font-semibold text-white">New</p>
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
             <a href="#" class="text-base font-semibold text-white hover:text-serpent">On
                 all
                 new
                 arrival
                 product</a>
             <div class="">
                 <h2 class="text-sm text-white">Prize: 90$ </h2>
             </div>
             <div class="mt-10 flex justify-center">
                 <button class="rounded-full border-2 border-serpent px-4 py-2 text-white hover:bg-serpent">Add
                     To
                     Cart</button>
             </div>
         </div>
     </div>
 </div>
 <div class="sel_product_cart">
     <div class="sell_product" style="background-image: url('{{ asset('assets/img/product03.jpg') }}')">
         <div class="selDiscount flex items-center justify-center">
             <p class="px-6 py-4 text-sm font-semibold text-white">New</p>
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
             <a href="#" class="text-base font-semibold text-white hover:text-serpent">On
                 all
                 new
                 arrival
                 product</a>
             <div class="">
                 <h2 class="text-sm text-white">Prize: 90$ </h2>
             </div>
             <div class="mt-10 flex justify-center">
                 <button class="rounded-full border-2 border-serpent px-4 py-2 text-white hover:bg-serpent">Add
                     To
                     Cart</button>
             </div>
         </div>
     </div>
 </div>
 <div class="sel_product_cart">
     <div class="sell_product" style="background-image: url('{{ asset('assets/img/product04.jpg') }}')">
         <div class="selDiscount flex items-center justify-center">
             <p class="px-6 py-4 text-sm font-semibold text-white">New</p>
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
             <a href="#" class="text-base font-semibold text-white hover:text-serpent">On
                 all
                 new
                 arrival
                 product</a>
             <div class="">
                 <h2 class="text-sm text-white">Prize: 90$ </h2>
             </div>
             <div class="mt-10 flex justify-center">
                 <button class="rounded-full border-2 border-serpent px-4 py-2 text-white hover:bg-serpent">Add
                     To
                     Cart</button>
             </div>
         </div>
     </div>
 </div>
 <div class="sel_product_cart">
     <div class="sell_product" style="background-image: url('{{ asset('assets/img/product01.jpg') }}')">
         <div class="selDiscount flex items-center justify-center">
             <p class="px-6 py-4 text-sm font-semibold text-white">New</p>
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
             <a href="#" class="text-base font-semibold text-white hover:text-serpent">On
                 all
                 new
                 arrival
                 product</a>
             <div class="">
                 <h2 class="text-sm text-white">Prize: 90$ </h2>
             </div>
             <div class="mt-10 flex justify-center">
                 <button class="rounded-full border-2 border-serpent px-4 py-2 text-white hover:bg-serpent">Add
                     To
                     Cart</button>
             </div>
         </div>
     </div>
 </div>
 <div class="sel_product_cart">
     <div class="sell_product" style="background-image: url('{{ asset('assets/img/product03.jpg') }}')">
         <div class="selDiscount flex items-center justify-center">
             <p class="px-6 py-4 text-sm font-semibold text-white">New</p>
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
             <a href="#" class="text-base font-semibold text-white hover:text-serpent">On
                 all
                 new
                 arrival
                 product</a>
             <div class="">
                 <h2 class="text-sm text-white">Prize: 90$ </h2>
             </div>
             <div class="mt-10 flex justify-center">
                 <button class="rounded-full border-2 border-serpent px-4 py-2 text-white hover:bg-serpent">Add
                     To
                     Cart</button>
             </div>
         </div>
     </div>
 </div>
 <div class="sel_product_cart">
     <div class="sell_product" style="background-image: url('{{ asset('assets/img/product02.jpg') }}')">
         <div class="selDiscount flex items-center justify-center">
             <p class="px-6 py-4 text-sm font-semibold text-white">New</p>
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
             <a href="#" class="text-base font-semibold text-white hover:text-serpent">On
                 all
                 new
                 arrival
                 product</a>
             <div class="">
                 <h2 class="text-sm text-white">Prize: 90$ </h2>
             </div>
             <div class="mt-10 flex justify-center">
                 <button class="rounded-full border-2 border-serpent px-4 py-2 text-white hover:bg-serpent">Add
                     To
                     Cart</button>
             </div>
         </div>
     </div>
 </div>
 <div class="sel_product_cart">
     <div class="sell_product" style="background-image: url('{{ asset('assets/img/product01.jpg') }}')">
         <div class="selDiscount flex items-center justify-center">
             <p class="px-6 py-4 text-sm font-semibold text-white">New</p>
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
             <a href="#" class="text-base font-semibold text-white hover:text-serpent">On
                 all
                 new
                 arrival
                 product</a>
             <div class="">
                 <h2 class="text-sm text-white">Prize: 90$ </h2>
             </div>
             <div class="mt-10 flex justify-center">
                 <button class="rounded-full border-2 border-serpent px-4 py-2 text-white hover:bg-serpent">Add
                     To
                     Cart</button>
             </div>
         </div>
     </div>
 </div> --}}
