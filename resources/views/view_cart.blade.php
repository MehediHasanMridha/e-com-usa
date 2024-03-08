@extends('layout.master')
@section('content')
    <div class="">
        <div class="border-spacing-3 border-b-2 border-black text-center text-6xl">Cart</div>
        <div class="space-y-10">
            @php
                $total = 0;
            @endphp
            @foreach ($cart as $item)
                @php
                    $total += $item->quantity * $item->product->price;
                @endphp
                <div class="flex w-full justify-between px-10">
                    <h1 class="text-2xl">{{ $item->product->title }}</h1>
                    <div class="text-2xl">({{ $item->quantity }}*{{ number_format($item->product->price, 2) }})=</div>
                    <div class="text-2xl">${{ $item->quantity * number_format($item->product->price, 2) }}</div>
                </div>
            @endforeach
        </div>
        <hr>
        <div class="border-spacing-3 border-b-2 border-black text-center text-3xl">Total={{ $total }}</div>
        <button class="mx-auto my-4 w-40 cursor-pointer bg-green-600 p-2 text-center font-bold text-white">CheckOut</button>
        <form action="{{ route('addmoney.paypal') }}" method="POST">
            @csrf
            <input type="hidden" name="amount" value="{{ $total }}">
            <button type="submit"><img width="60" height="60" src="https://img.icons8.com/fluency/48/paypal.png"
                    alt="paypal" /></button>
        </form>
        <form action="{{ route('stripe.checkout') }}" method="POST">
            @csrf
            <input type="hidden" name="amount" value="{{ $total }}">
            <button type="submit"><img width="48" height="48" src="https://img.icons8.com/fluency/48/stripe.png"
                    alt="stripe" /></button>
        </form>
        {{ \Session::get('success') }}
        {{ \Session::get('error') }}
    </div>
@endsection
