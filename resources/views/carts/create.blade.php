@extends('layouts.user_type.auth')

@section('content')

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Carts</h2>
            </div>
        </div>

        <div class="container">
            <h1>Create a New Cart</h1>
            <form action="{{ route('carts.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="cart_name" class="form-label">Cart Name (Optional)</label>
                    <input type="text" name="cart_name" id="cart_name" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Create Cart</button>
            </form>
        </div>

    </div>

    {{--    <x-countdown-timer />--}}

@endsection
