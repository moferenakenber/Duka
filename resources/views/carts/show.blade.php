
        @extends('layouts.user_type.auth')

        @section('content')

            <div class="main--content">

                <!-- Tab Navbar -->
                <div class="header--wrapper">
                    <div class="header--title">
                        <h2>Carts</h2>
                    </div>

                    <!-- Create Customer Button -->
{{--                    s--}}
                </div>

                <!-- Customer Table -->
                <div class="container">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Cart items</th>
                            <th>Cart quantity</th>
                            <th>Cart Action</th>
                            <th>Cart Action</th>
{{--                            <th>Created By</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cart as $carts)
                            <tr>
                                <td>{{ $cart->cart_name }}</td>
                                <td>{{ $cart->cart_name }}</td>
                                <td><a href="#">View</a></td>
                                <td><a href="#">Delete</a></td>
{{--                                <td>{{ $customer->user->fullname }}</td>--}}
                                {{--                        <td>{{ optional($customer->user)->username }}--}}
                            </tr>
                        @endforeach
                        <tr class="button">Sale</tr>
                        </tbody>
                    </table>
                    <ul>
                        @foreach($cart->items as $item)
                            <li>{{ $item->name }} - {{ $item->quantity }}</li>
                        @endforeach
                    </ul>

                </div>
            </div>

        @endsection




{{--    </div>--}}



{{--@endsection--}}
