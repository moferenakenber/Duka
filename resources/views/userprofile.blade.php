@extends('layouts.user_type.auth')

@section('content')

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>User Profile</h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                    <i class='bx bx-search'></i>
                    <input type="text" placeholder="search">
                </div>
            </div>
        </div>
        <!--user image-->
        <div>
            <br>
            <img src="#" alt="user image">
            <br>
            <h1>user name </h1>
            <div>
                <form action="#" method="POST">
                    @csrf
                    <label for="full-name">Full name:</label>
                    <input type="text" id="full-name" name="full_name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="phonenumber">Phone Number:</label>
                    <input type="tel" id="phoneNumber" name="phoneNumber" required>
                </form>
            </div>
        </div>
    </div>

@endsection
