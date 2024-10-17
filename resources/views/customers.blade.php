@extends('layouts.user_type.auth')

@section('content')

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Customers</h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                    <i class='bx bx-search'></i>
                    <input type="text" placeholder="search">
                </div>
                <!--user image-->
            </div>
            <a href="additempage" class="additem">+</a>
        </div>
        <x-form.input />
    </div>

@endsection

