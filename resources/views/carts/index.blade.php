@extends('layouts.user_type.auth')

@section('content')

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Carts</h2>
            </div>
        </div>

        <div class="container">
            <h1>Your Carts</h1>
            <a href="{{ route('carts.create') }}" class="btn btn-primary">Create New Cart</a>

            <div class="mt-4">
                @foreach ($carts as $cart)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $cart->cart_name ?? 'Unnamed Cart' }}</h5>
                            <p>Status: {{ ucfirst($cart->status) }}</p>
                            <a href="{{ route('carts.show', $cart->id) }}" class="btn btn-secondary">View Cart</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{--    <x-countdown-timer />--}}

@endsection
