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
        <form action="customers" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Customers First name" aria-label="Customers First name" id="customerFirstName">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Customers Last name" aria-label="Customers Last name" id="customerLastName">
                </div>
            </div>
            <div class="mb-3">
                <input type="tel" class="form-control" placeholder="Customers Phone Number" id="customerPhoneNumber">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>



    </div>

@endsection

