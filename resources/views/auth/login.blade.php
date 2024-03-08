@extends('layout.master')
@section('content')
    <section>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="m-2 rounded-lg bg-red-500 p-3 text-center">{{ $error }}</div>
            @endforeach
        @endif
        <div class="mx-auto mt-10 md:my-20 xl:w-4/5">
            <div class="grid-cols-12 gap-6 shadow-sm md:grid md:px-10 md:pt-10">
                <div class="md:col-span-5 lg:col-span-7">
                    <div class="">
                        <h2 class="text-center text-xl font-semibold text-rbalck">Help 24/7</h2>
                        <h2 class="text-bold mt-4 text-center text-3xl font-bold text-serpent">Welcome Back</h2>
                        <p class="mt-3 text-center text-sm text-rbalck">Lorem ipsum dolor, sit amet consectetur adipisicing
                            elit Nam adipisci est quibusdam</p>
                    </div>
                    <div class="login_img" style="background-image: url({{ asset('assets/img/login.png') }})">
                    </div>
                </div>
                <div class="bg-serpent p-4 md:col-span-7 md:p-10 lg:col-span-5">
                    <h2 class="text-center text-lg font-medium text-white">Sign In</h2>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="input-area mt-5">
                            <div class="w-full">
                                <input
                                    class="w-full border-b border-white bg-transparent py-1 pl-3 pr-10 text-sm font-light text-white placeholder:text-white focus:outline-none"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                    type="text" placeholder="Email Or Username">
                            </div>
                            <div class="inupt-icon">
                                <p class="text-xl text-white"><iconify-icon icon="bx:user"></iconify-icon></p>
                            </div>
                        </div>
                        <div class="input-area mt-2">
                            <div class="w-full">
                                <input
                                    class="autofill:none w-full border-b border-white bg-transparent py-1 pl-3 pr-10 text-sm font-light text-white placeholder:text-white focus:outline-none"
                                    name="password" required autocomplete="current-password" type="password"
                                    placeholder="password" id="myInput">
                            </div>
                            <div class="inupt-icon">
                                <p class="text-xl text-white"><iconify-icon
                                        icon="solar:lock-password-outline"></iconify-icon></p>
                            </div>

                        </div>
                        <div class="mt-4 flex justify-between">
                            <div class="flex items-center gap-3">
                                <div class="mt-1">
                                    <input type="checkbox" class="border-none accent-orange-400 outline-none"
                                        onclick="myFunction()">
                                </div>
                                <div class="">
                                    <p class="text-sm font-light text-white">Show Password</p>
                                </div>
                            </div>
                            <div class="">
                                <a href="{{ route('register') }}" class="text-sm font-light text-white hover:underline">
                                    Create
                                    An Account ?</a>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit"
                                class="w-full rounded-md bg-white px-4 py-1 text-serpent hover:bg-cultured">Sign
                                In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
