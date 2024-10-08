<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    @yield('styles')
    <link rel="stylesheet" href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <link rel="stylesheet" href="css/dashboard.css">
</head>

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection


@session('status')
    <div class="p-4 bg-green-100">
        {{ $value }}
    </div>
@endsession

{{--@include('view')--}}
{{-- This comment will not be present in the rendered HTML --}}

<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li class="active">
                <a href="dashboard">
                    <i class='bx bxs-dashboard'></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="userprofile">
                    <i class='bx bxs-user-circle'></i>
                    <span>user profile</span>
                </a>
            </li>
            <li>
                <a href="usermanagment">
                    <i class='bx bxs-user-detail'></i>
                    <span>user managment</span>
                </a>
            </li>
            <li>
                <a href="customers">
                    <i class='bx bxs-user-account'></i>
                    <span>Customers</span>
                </a>
            </li>
            <li>
                <a href="items">
                    <i class='bx bxs-dashboard'></i>
                    <span>Items</span>
                </a>
            </li>
            <li>
                <a href="carts">
                    <i class='bx bx-cart'></i>
                    <span>Carts</span>
                </a>
            </li>
            <li>
                <a href="sales">
                    <i class='bx bxs-objects-vertical-bottom'></i>
                    <span>Sale</span>
                </a>
            </li>
            <li>
                <a href="tasks">
                    <i class='bx bx-task'></i>
                    <span>Task</span>
                </a>
            </li>
            <li>
                <a href="calander">
                    <i class='bx bxs-dashboard'></i>
                    <span>Calander</span>
                </a>
            </li>

            <li>
                <a href="logout" class="logout">
                    <i class='bx bx-log-out'></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Primary</span>
                <h2>Dashboard</h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                <i class='bx bx-search'></i>
                <input type="text" placeholder="search">
                </div>
                <!--user image-->
            </div>
        </div>

        <div>
           <x-report />
           <x-link />
           <x-form.input />

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

           {{-- <x-button />
           <x-alert /> --}}
        </div>
    </div>


    </body>


</html>
