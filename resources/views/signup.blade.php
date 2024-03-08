@extends('layout.master')
@section('content')
    <section>
        <div class="py-10">
            <div class="container mx-auto">
                <div class=" w-2/4 mx-auto shadow-sshadow p-6 rounded-md">
                    <h2 class=" text-2xl text-serpent font-semibold text-center mb-6">Sign Up</h2>
                    <form action="">
                        <div class="grid grid-cols-2 items-center gap-6">
                            <div class="w-full">
                                <input
                                    class=" border-b  border-serpent bg-transparent  focus:outline-none px-3 py-1 text-sm  text-rbalck w-full"type="text"
                                    placeholder="First name">
                            </div>
                            <div class="w-full">
                                <input
                                    class=" border-b  border-serpent bg-transparent  focus:outline-none px-3 py-1 text-sm  text-rbalck w-full"type="text"
                                    placeholder="Last name">
                            </div>
                            <div class="w-full">
                                <input type="text"
                                    class=" border-b  border-serpent bg-transparent  focus:outline-none px-3 py-1 text-sm  text-rbalck w-full"
                                    placeholder="Birth Date(DD/MM/YYYY)">
                            </div>
                            <div class="w-full">
                                <select name="" id=""
                                    class=" border-b  border-serpent bg-transparent  focus:outline-none px-3 py-1  w-full">
                                    <option value="" class="text-sm  text-rbalck">Gender</option>
                                    <option value="" class="text-sm  text-rbalck">Male</option>
                                    <option value="" class="text-sm  text-rbalck">Female</option>
                                </select>

                            </div>
                            <div class="w-full">
                                <input type="text"
                                    class=" border-b  border-serpent bg-transparent  focus:outline-none px-3 py-1 text-sm  text-rbalck w-full"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                    maxlength="11" placeholder="Phone Number">
                            </div>
                            <div class="w-full">
                                <input type="email"
                                    class=" border-b  border-serpent bg-transparent  focus:outline-none px-3 py-1 text-sm  text-rbalck w-full"
                                    placeholder="Email">
                            </div>
                        </div>
                        <div class="mt-6">
                            <h2 class="text-sm text-rbalck font-light mb-3">Address</h2>
                            <div class="grid  grid-cols-2 gap-6 items-center">
                                <div class="w-full ">
                                    <input type="email"
                                        class=" border-b  border-serpent bg-transparent  focus:outline-none px-3 py-1 text-sm  text-rbalck w-full"
                                        placeholder="Door No , Street">
                                </div>
                                <div class="w-full ">
                                    <input type="email"
                                        class=" border-b  border-serpent bg-transparent  focus:outline-none px-3 py-1 text-sm  text-rbalck w-full"
                                        placeholder="City">
                                </div>
                                <div class="w-full ">
                                    <input type="email"
                                        class=" border-b  border-serpent bg-transparent  focus:outline-none px-3 py-1 text-sm  text-rbalck w-full"
                                        placeholder="State">
                                </div>
                                <div class="w-full ">
                                    <input type="email"
                                        class=" border-b  border-serpent bg-transparent  focus:outline-none px-3 py-1 text-sm  text-rbalck w-full"
                                        placeholder="Zip code">
                                </div>
                                <div class="w-full ">
                                    <input type="password"
                                        class=" border-b  border-serpent bg-transparent  focus:outline-none px-3 py-1 text-sm  text-rbalck w-full"
                                        placeholder="Password">
                                </div>
                                <div class="w-full ">
                                    <input type="password"
                                        class=" border-b  border-serpent bg-transparent  focus:outline-none px-3 py-1 text-sm  text-rbalck w-full"
                                        placeholder="Confirm Password">
                                </div>
                            </div>
                        </div>
                        <div class=" mt-10">
                            <button type="submit"
                                class=" text-white bg-serpent   hover:bg-rbalck py-1 px-4 w-full rounded-md">Sign
                                Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
