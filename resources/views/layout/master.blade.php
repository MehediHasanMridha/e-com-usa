<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/coustom.css') }}">
    <style>

    </style>
</head>

<body>
    {{-- =========Header-start=========== --}}
    <header>
        <div class="hidden bg-white py-2 md:flex">
            <div class="container mx-auto">
                <div class="grid grid-cols-3 items-center justify-between">
                    <div class="flex items-center gap-10">
                        <div class="flex items-center gap-5">
                            @if (Auth::user())
                                <div class="flex items-center gap-2 text-taupeGray hover:text-serpent">
                                    <p class="mt-1 text-base"><iconify-icon icon="ic:outline-call"></iconify-icon></p>
                                    <p class="text-xs text-taupeGray hover:text-serpent">
                                        {{ Auth::user()->phone_number }}</p>
                                </div>
                            @endif
                        </div>
                        <div class="flex items-center gap-5">
                            @if (Auth::user())
                                <div class="flex items-center gap-2 text-taupeGray hover:text-serpent">
                                    <p class="mt-1 text-base"><iconify-icon
                                            icon="fluent:mail-24-regular"></iconify-icon>
                                    </p>
                                    <p class="text-xs text-taupeGray hover:text-serpent">{{ Auth::user()->email }}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="">
                        <p class="text-center text-xs text-taupeGray">Summer sale discount off <span
                                class="text-vred">50%!</span> Shop Now</p>
                    </div>
                    <div class="flex justify-end">
                        <ul class="flex items-center gap-3">
                            <li>
                                <a href="#" class="text-xl text-rbalck hover:text-serpent"><iconify-icon
                                        icon="bxl:facebook"></iconify-icon></iconify-icon></a>
                            </li>
                            <li>
                                <a href="#" class="text-xl text-rbalck hover:text-serpent"><iconify-icon
                                        icon="uil:twitter"></iconify-icon></a>
                            </li>
                            <li>
                                <a href="#" class="text-xl text-rbalck hover:text-serpent"><iconify-icon
                                        icon="ri:instagram-line"></iconify-icon></a>
                            </li>
                            <li>
                                <a href="#" class="text-xl text-rbalck hover:text-serpent"><iconify-icon
                                        icon="jam:pinterest"></iconify-icon></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- =========Header-End=========== --}}
    {{-- =========Nav-start=========== --}}
    <nav>
        <div class="nav-area bg-serpent px-3 pb-3 pt-4">
            <div class="container mx-auto">
                <div class="grid grid-cols-12 items-center justify-between">
                    <div class="col-span-3">
                        <div class="">
                            <a href="#">
                                <img class="w-20" src="{{ asset('assets/img/logo.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="dropdown order-4 col-span-12 lg:order-2 lg:col-span-6">
                        <div class="">
                            <ul class="justify-between lg:flex">
                                <li><a class="font-sm uppercase text-white hover:text-rbalck"
                                        href="{{ url('/home') }}">Home</a>
                                </li>
                                <li><a class="font-sm uppercase text-white hover:text-rbalck"
                                        href="{{ url('/shope') }}">Shope</a>
                                </li>
                                <li><a class="font-sm uppercase text-white hover:text-rbalck"
                                        href="{{ url('/promotion') }}">Promotion</a>

                                <li><a class="font-sm uppercase text-white hover:text-rbalck"
                                        href="{{ url('/offer') }}">Offer</a>
                                </li>
                                <li><a class="font-sm uppercase text-white hover:text-rbalck"
                                        href="{{ url('/blog') }}">Blog</a>
                                </li>
                                <li><a class="font-sm uppercase text-white hover:text-rbalck"
                                        href="{{ url('/contact') }}">Contact</a>
                                </li>
                                @if (Auth::check() && Auth::user()->role == 'admin')
                                    <li><a class="font-sm uppercase text-white hover:text-rbalck"
                                            href="{{ route('adminHome') }}">Admin Dashboard</a>
                                    </li>
                                @endif

                        </div>
                    </div>
                    <div class="order-2 col-span-8 lg:order-last lg:col-span-3">
                        <div class="flex items-center justify-center gap-4 lg:justify-end">
                            <div class="">
                                <button class="text-2xl leading-none text-white hover:text-rbalck">
                                    <iconify-icon icon="fluent:search-24-regular" class="mt-2"></iconify-icon>
                                </button>
                            </div>
                            <div class="userAccount">
                                <button class="text-2xl leading-none text-white hover:text-rbalck">
                                    <iconify-icon icon="ph:user-light" class="mt-2"></iconify-icon>
                                </button>
                                <div class="auth">
                                    @if (Auth::user())
                                        <div class="bg-white">
                                            <div
                                                class="cursor-pointer rounded-md border-b-2 border-gray-600 bg-white px-5 py-1 text-sm text-rbalck shadow-md hover:text-serpent">
                                                {{ Auth::user()->first_name }}</div>
                                            <div class="cursor-pointer rounded-md border-b-2 border-gray-600 bg-white px-5 py-1 text-sm text-rbalck shadow-md hover:text-serpent"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}</div>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    @else
                                        <a class="rounded-md bg-white px-5 py-1 text-sm text-rbalck shadow-md hover:text-serpent"
                                            href="{{ url('login') }}">Login</a>
                                    @endif
                                </div>
                            </div>
                            <div class="">
                                <button class="text-xl leading-none text-white hover:text-rbalck">
                                    <iconify-icon
                                        icon="streamline:interface-favorite-heart-reward-social-rating-media-heart-it-like-favorite-love"
                                        class="mt-2"></iconify-icon>
                                </button>

                            </div>
                            <a href="{{ Auth::user() ? route('view_cart') : route('login') }}" class="addCart">
                                <button class="text-2xl leading-none text-white hover:text-rbalck">
                                    <iconify-icon icon="ph:bag-light" class="mt-2"></iconify-icon>
                                </button>
                                @if (Auth::user())
                                    <div class="adding_number text-white hover:text-rbalck">
                                        <p class="text-sm leading-none">{{ Auth::user()->cart->count() }}</p>
                                    </div>
                                @endif
                            </a>
                        </div>
                    </div>
                    <div class="order-3 col-span-1 lg:hidden">
                        <div class="flex justify-end">
                            <button class="menu-btn text-3xl text-white"><iconify-icon
                                    icon="majesticons:menu-line"></iconify-icon></button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </nav>
    {{-- =========Nav-end=========== --}}

    @yield('content')

    {{-- ===============Footer-start============== --}}
    <footer>
        <div class="bg-rbalck px-3 py-10 lg:px-16 xl:px-0">
            <div class="container mx-auto">
                <div class="grid gap-10 md:grid-cols-12 lg:grid-cols-10">
                    <div class="md:col-span-4 lg:col-span-2">
                        <h2 class="text-center text-xl font-medium text-white md:text-left">Categories</h2>
                        <div class="mt-5 lg:mt-10">
                            <ul>
                                <li class="text-center md:text-left"><a
                                        class="text-sm font-normal text-white hover:text-serpent"
                                        href="#">Canvas</a></li>
                                <li class="text-center md:text-left"><a
                                        class="text-sm font-normal text-white hover:text-serpent"
                                        href="#">Mugs</a></li>
                                <li class="text-center md:text-left"><a
                                        class="text-sm font-normal text-white hover:text-serpent" href="#">Phone
                                        Cases</a></li>
                                <li class="text-center md:text-left"><a
                                        class="text-sm font-normal text-white hover:text-serpent"
                                        href="#">Sweatshirts</a></li>
                                <li class="text-center md:text-left"><a
                                        class="text-sm font-normal text-white hover:text-serpent" href="#">Throw
                                        Pillows</a></li>
                                <li class="text-center md:text-left"><a
                                        class="text-sm font-normal text-white hover:text-serpent" href="#">Tote
                                        Bags</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:col-span-4 lg:col-span-2">
                        <h2 class="text-center text-xl font-medium text-white md:text-left">Information</h2>
                        <div class="mt-5 lg:mt-10">
                            <ul>
                                <li class="text-center md:text-left"><a
                                        class="text-sm font-normal text-white hover:text-serpent" href="#">About
                                        Us</a></li>
                                <li class="text-center md:text-left"><a
                                        class="text-sm font-normal text-white hover:text-serpent"
                                        href="#">Contact Us</a></li>
                                <li class="text-center md:text-left"><a
                                        class="text-sm font-normal text-white hover:text-serpent"
                                        href="#">Privacy Policy</a></li>
                                <li class="text-center md:text-left"><a
                                        class="text-sm font-normal text-white hover:text-serpent"
                                        href="#">Shipping & Delivery</a></li>
                                <li class="text-center md:text-left"><a
                                        class="text-sm font-normal text-white hover:text-serpent" href="#">Terms
                                        & Conditions</a></li>
                                <li class="text-center md:text-left"><a
                                        class="text-sm font-normal text-white hover:text-serpent"
                                        href="#">Returns & Exchanges</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:col-span-4 lg:col-span-2">
                        <h2 class="text-center text-xl font-medium text-white md:text-left">Useful links</h2>
                        <div class="mt-5 lg:mt-10">
                            <ul>
                                <li class="text-center md:text-left"><a
                                        class="text-sm font-normal text-white hover:text-serpent" href="#">Store
                                        Location</a></li>
                                <li class="text-center md:text-left"><a
                                        class="text-sm font-normal text-white hover:text-serpent"
                                        href="#">Latest
                                        Posts</a></li>
                                <li class="text-center md:text-left"><a
                                        class="text-sm font-normal text-white hover:text-serpent" href="#">My
                                        Account</a></li>
                                <li class="text-center md:text-left"><a
                                        class="text-sm font-normal text-white hover:text-serpent" href="#">Size
                                        Guide</a></li>
                                <li class="text-center md:text-left"><a
                                        class="text-sm font-normal text-white hover:text-serpent"
                                        href="#">FAQs</a></li>
                                <li class="text-center md:text-left"><a
                                        class="text-sm font-normal text-white hover:text-serpent" href="#">FAQs
                                        2</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:col-span-4 lg:col-span-2">
                        <h2 class="text-center text-xl font-medium text-white md:text-left">Services</h2>
                        <div class="mt-5 lg:mt-10">
                            <ul>
                                <li class="text-center md:text-left"><a
                                        class="text-sm font-normal text-white hover:text-serpent"
                                        href="#">Canvas</a></li>
                                <li class="text-center md:text-left"><a
                                        class="text-sm font-normal text-white hover:text-serpent"
                                        href="#">Latest
                                        Posts</a></li>
                                <li class="text-center md:text-left"><a
                                        class="text-sm font-normal text-white hover:text-serpent" href="#">Phone
                                        Cases</a></li>
                                <li class="text-center md:text-left"><a
                                        class="text-sm font-normal text-white hover:text-serpent"
                                        href="#">Sweatshirts</a></li>
                                <li class="text-center md:text-left"><a
                                        class="text-sm font-normal text-white hover:text-serpent" href="#">Throw
                                        Pillows</a></li>
                                <li class="text-center md:text-left"><a
                                        class="text-sm font-normal text-white hover:text-serpent" href="#">Tote
                                        Bags</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:col-span-8 lg:col-span-2">
                        <h2 class="text-center text-5xl font-bold text-white lg:text-left">Claue</h2>
                        <div class="mt-6">
                            <div class="justify-center gap-4 md:flex lg:justify-start">
                                <div class="">
                                    <p class="text-center text-2xl text-white md:text-left"><iconify-icon
                                            icon="bx:map"></iconify-icon></p>
                                </div>
                                <div class="">
                                    <p class="text-center text-sm font-normal text-white md:text-left"> 184 Main Rd E,
                                        St Albans
                                        VIC 3021, Australia</p>
                                </div>
                            </div>
                            <div class="mt-3 justify-center gap-4 md:flex lg:justify-start">
                                <div class="">
                                    <p class="text-center text-xl text-white md:text-left"><iconify-icon
                                            icon="octicon:mail-24"></iconify-icon></p>
                                </div>
                                <div class="">
                                    <p class="text-center text-sm font-normal text-white md:text-left">
                                        contact@company.com</p>
                                </div>
                            </div>
                            <div class="mt-3 justify-center gap-4 md:flex lg:justify-start">
                                <div class="">
                                    <p class="text-center text-xl text-white md:text-left"><iconify-icon
                                            icon="tdesign:call"></iconify-icon>
                                    </p>
                                </div>
                                <div class="">
                                    <p class="text-center text-sm font-normal text-white md:text-left">+001 2233 456
                                    </p>
                                </div>
                            </div>
                            <div class="mt-6">
                                <ul class="flex items-center justify-center gap-3 lg:justify-start">
                                    <li>
                                        <a href="#" class="text-xl text-white hover:text-serpent"><iconify-icon
                                                icon="bxl:facebook"></iconify-icon></iconify-icon></a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-xl text-white hover:text-serpent"><iconify-icon
                                                icon="uil:twitter"></iconify-icon></a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-xl text-white hover:text-serpent"><iconify-icon
                                                icon="ri:instagram-line"></iconify-icon></a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-xl text-white hover:text-serpent"><iconify-icon
                                                icon="jam:pinterest"></iconify-icon></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-serpent py-2">
            <div class="container mx-auto">
                <div class="">
                    <p class="text-center text-xs text-white"> &copy; 2024 Copyright By BSMRSTU.</p>
                </div>
            </div>
        </div>
    </footer>
    {{-- ===============Footer-end============== --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/coustom.js') }}"></script>
    @yield('filterJS')
    @yield('increment&decrement')
</body>

</html>
