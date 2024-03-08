@extends('layout.master')
@section('content')
    <section>
        <div class=" xl:w-4/5 mx-auto mt-10 md:my-20">
            <div class="md:grid grid-cols-12 gap-6   shadow-sm md:pt-10 md:px-10">
                <div class="lg:col-span-7 md:col-span-5">
                    <div class="">
                        <h2 class=" text-xl  font-semibold text-rbalck text-center">Help 24/7</h2>
                        <h2 class=" text-3xl text-bold text-serpent text-center font-bold mt-4">Welcome Back</h2>
                        <p class=" text-sm text-rbalck  text-center mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing
                            elit Nam adipisci est quibusdam</p>
                    </div>
                    <div class="login_img" style="background-image: url({{ asset('assets/img/login.png') }})">
                    </div>
                </div>
                <div class="lg:col-span-5 md:col-span-7 p-4 md:p-10 bg-serpent">
                    <h2 class=" text-lg text-center text-white  font-medium">Sign In</h2>
                    <form action="" method="">
                        <div class="input-area mt-5">
                            <div class="w-full">
                                <input
                                    class=" w-full border-b border-white focus:outline-none pl-3 pr-10 py-1 text-sm  bg-transparent font-light  text-white placeholder:text-white"
                                    type="text" placeholder="Email Or Username">
                            </div>
                            <div class="inupt-icon">
                                <p class=" text-xl text-white"><iconify-icon icon="bx:user"></iconify-icon></p>
                            </div>
                        </div>
                        <div class="input-area mt-2">
                            <div class="w-full">
                                <input
                                    class=" w-full border-b border-white  pl-3 pr-10 py-1 text-sm  font-light  bg-transparent text-white placeholder:text-white focus:outline-none autofill:none"
                                    type="password" placeholder="password" id="myInput">
                            </div>
                            <div class="inupt-icon">
                                <p class=" text-xl text-white"><iconify-icon
                                        icon="solar:lock-password-outline"></iconify-icon></p>
                            </div>

                        </div>
                        <div class="mt-4  flex justify-between">
                            <div class=" flex items-center  gap-3">
                                <div class="mt-1">
                                    <input type="checkbox" class="  accent-orange-400 border-none outline-none "
                                        onclick="myFunction()">
                                </div>
                                <div class="">
                                    <p class=" text-sm  font-light text-white">Show Password</p>
                                </div>
                            </div>
                            <div class="">
                                <a href="{{ url('signup') }}" class="text-sm  font-light text-white hover:underline"> Create
                                    An Account ?</a>
                            </div>
                        </div>
                        <div class=" mt-4">
                            <button type="submit"
                                class=" text-serpent  hover:bg-cultured bg-white py-1 px-4 w-full rounded-md">Sign
                                In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
