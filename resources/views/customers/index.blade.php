@extends('layouts.user_type.auth')

@section('content')

    <div class="main--content">

        <!-- Tab Navbar -->
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Customers</h2>
            </div>

            <!-- Create Customer Button -->
            <a href="{{ route('customers.create') }}" class="additem">+</a>
        </div>

        <!-- Customer Table -->
        <div class="container">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>City</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Created By</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->customerFirstName }}</td>
                        <td>{{ $customer->customerLastName }}</td>
                        <td>{{ $customer->city }}</td>
                        <td>{{ $customer->customerEmail }}</td>
                        <td>{{ $customer->customerPhoneNo }}</td>
                        <td>{{ $customer->user->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

