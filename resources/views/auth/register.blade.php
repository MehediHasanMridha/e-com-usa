@extends('layout.master')
@section('content')
    <section>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="m-2 rounded-lg bg-red-500 p-3 text-center">{{ $error }}</div>
            @endforeach
        @endif
        <div class="py-10">
            <div class="container mx-auto">
                <div class="mx-auto w-2/4 rounded-md p-6 shadow-sshadow">
                    <h2 class="mb-6 text-center text-2xl font-semibold text-serpent">Sign Up</h2>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-2 items-center gap-6">
                            <div class="w-full">
                                <input
                                    class="w-full border-b border-serpent bg-transparent px-3 py-1 text-sm text-rbalck focus:outline-none"type="text"
                                    name="first_name" placeholder="First name">
                            </div>
                            <div class="w-full">
                                <input
                                    class="w-full border-b border-serpent bg-transparent px-3 py-1 text-sm text-rbalck focus:outline-none"type="text"
                                    name="last_name" placeholder="Last name">
                            </div>
                            <div class="w-full">
                                <input type="text"
                                    class="w-full border-b border-serpent bg-transparent px-3 py-1 text-sm text-rbalck focus:outline-none"
                                    name="birth_date" placeholder="Birth Date(DD/MM/YYYY)">
                            </div>
                            <div class="w-full">
                                <select name="gender" id=""
                                    class="w-full border-b border-serpent bg-transparent px-3 py-1 focus:outline-none">
                                    <option value="" class="text-sm text-rbalck">Gender</option>
                                    <option value="male" class="text-sm text-rbalck">Male</option>
                                    <option value="female" class="text-sm text-rbalck">Female</option>
                                </select>

                            </div>
                            <div class="w-full">
                                <input type="text"
                                    class="w-full border-b border-serpent bg-transparent px-3 py-1 text-sm text-rbalck focus:outline-none"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                    name="phone_number" maxlength="11" placeholder="Phone Number">
                            </div>
                            <div class="w-full">
                                <input type="email"
                                    class="w-full border-b border-serpent bg-transparent px-3 py-1 text-sm text-rbalck focus:outline-none"
                                    name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="mt-6">
                            <h2 class="mb-3 text-sm font-light text-rbalck">Address</h2>
                            <div class="grid grid-cols-2 items-center gap-6">
                                <div class="w-full">
                                    <input type="text"
                                        class="w-full border-b border-serpent bg-transparent px-3 py-1 text-sm text-rbalck focus:outline-none"
                                        name="street" placeholder="Door No , Street">
                                </div>
                                <div class="w-full">
                                    <input type="text"
                                        class="w-full border-b border-serpent bg-transparent px-3 py-1 text-sm text-rbalck focus:outline-none"
                                        name="city" placeholder="City">
                                </div>
                                <div class="w-full">
                                    <input type="text"
                                        class="w-full border-b border-serpent bg-transparent px-3 py-1 text-sm text-rbalck focus:outline-none"
                                        name="state" placeholder="State">
                                </div>
                                <div class="w-full">
                                    <input type="text"
                                        class="w-full border-b border-serpent bg-transparent px-3 py-1 text-sm text-rbalck focus:outline-none"
                                        name="zip_code" placeholder="Zip code">
                                </div>
                                <div class="w-full">
                                    <input type="password"
                                        class="w-full border-b border-serpent bg-transparent px-3 py-1 text-sm text-rbalck focus:outline-none"
                                        name="password" autocomplete="new-password" placeholder="Password">
                                </div>
                                <div class="w-full">
                                    <input type="password"
                                        class="w-full border-b border-serpent bg-transparent px-3 py-1 text-sm text-rbalck focus:outline-none"
                                        name="password_confirmation" autocomplete="new-password"
                                        placeholder="Confirm Password">
                                </div>
                            </div>
                        </div>
                        <div class="mt-10">
                            <button type="submit"
                                class="w-full rounded-md bg-serpent px-4 py-1 text-white hover:bg-rbalck">Sign
                                Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
