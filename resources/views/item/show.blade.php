<!-- resources/views/items/show.blade.php -->

@extends('layouts.user_type.auth')

@section('content')

{{--    @php--}}
{{--        use App\Models\Item;--}}
{{--        $items = Item::all();--}}
{{--    @endphp--}}
<div class="main--content">
    <div class="header--wrapper">
        <div class="header--title">
            <h2>{{$item->name}}</h2>
        </div>
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownFormButton" data-bs-toggle="dropdown" aria-expanded="false">
            Edit Profile
        </button>
        <ul class="dropdown-menu p-4" aria-labelledby="dropdownFormButton">
            <li>
                <form>
                    <div class="mb-3">
                        <label for="User First Name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="userFirstName" required>
                    </div>
                    <div class="mb-3">
                        <label for="User Last Name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="userLastName" required>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <br>
                        <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" type="checkbox" value="Admin" id="Admin">
                            <label class="form-check-label" for="flexCheckDefault">Admin</label>
                        </div>
                        <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" type="checkbox" value="Employee" id="Employee" checked>
                            <label class="form-check-label" for="flexCheckChecked">Employee without any labels</label>
                        </div>
                        <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" type="checkbox" value="purchaser" id="purchaser" name="purchaser">
                            <label class="form-check-label" for="flexCheckDefault">Purchaser</label>
                        </div>
                        <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" type="checkbox" value="Employee" id="marketing" name="marketing">
                            <label class="form-check-label" for="flexCheckChecked">Marketing</label>
                        </div>
                        <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" type="checkbox" value="sales" id="sales" name="sales">
                            <label class="form-check-label" for="flexCheckChecked">Sales</label>
                        </div>
                        <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" type="checkbox" value="logistics" id="logistics" name="logistics">
                            <label class="form-check-label" for="flexCheckChecked">Logistics</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="customerEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="userEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="customerPhone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="userPhone" value="+251" required placeholder="e.g., 912345678">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="dropdown">Close</button>
                </form>
            </li>
        </ul>
    </div>
    <br>

{{--    <!-- Card View -->--}}
{{--    <div class="card" style="width: 18rem;">--}}
{{--        @if($item->images->isNotEmpty())--}}
{{--            <img src="{{ asset('storage/' . $item->images->first()->path) }}" class="card-img-top" alt="Item Image">--}}
{{--        @else--}}
{{--            <img src="{{ asset('path/to/default/image.jpg') }}" class="card-img-top" alt="Default Item Image">--}}
{{--        @endif--}}

{{--        <div class="card-body">--}}
{{--            <h5 class="card-title">{{ $item->name }}</h5>--}}
{{--            <p class="card-text">{{ $item->description }}</p>--}}
{{--            <a href="#" class="btn btn-primary">Add to Cart</a>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!--Description-->--}}
{{--    <h2>{{$item->describtion}}</h2>--}}
{{--    <!--catoption-->--}}
{{--    <h2>{{$item->catoption}}</h2>--}}
{{--    <!--pacoption-->--}}
{{--    <h2>{{$item->pacoption}}</h2>--}}
{{--    <!--sellingoption-->--}}
{{--    <h2>{{$item->sellingoption}}</h2>--}}
{{--    <!--availablecolors-->--}}
{{--    <h2>{{$item->availablecolors}}</h2>--}}
{{--    <!--price-->--}}
{{--    <h2>{{$item->price}}</h2>--}}
{{--    <!--status-->--}}
{{--    <h2>{{$item->status}}</h2>--}}
{{--    <!--stock-->--}}
{{--    <h2>{{$item->stock}}</h2>--}}
{{--    <!--piecesinapacket-->--}}
{{--    <h2>{{$item->piecesinapacket}}</h2>--}}
{{--    <!--packetsinacartoon-->--}}
{{--    <h2>{{$item->packetsinacartoon}}</h2>--}}
    <div class="container mt-5">
        <!-- Breadcrumb Navigation -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('item.index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $item->name }}</li>
            </ol>
        </nav>
        <!-- End of Breadcrumb Navigation -->

        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2 class="card-title">{{ $item->name }}</h2>
            </div>

            <!-- Carousel for Images -->
            <div id="itemCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @if($item->images->isNotEmpty())
                        @foreach($item->images as $index => $image)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <img src="{{ asset('storage/' . $image->path) }}" class="d-block w-100" alt="Item Image {{ $index + 1 }}">
                            </div>
                        @endforeach
                    @else
                        <div class="carousel-item active">
                            <img src="{{ asset('images/default.jpg') }}" class="d-block w-100" alt="Default Item Image">
                        </div>
                    @endif
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#itemCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#itemCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- End of Carousel -->

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p class="card-text"><strong>Description:</strong> {{ $item->description }}</p>
                        <p class="card-text"><strong>Categories:</strong> {{ implode(', ', json_decode($item->catoption)) }}</p>
                        <p class="card-text"><strong>Selling Options:</strong> {{ implode(', ', json_decode($item->pacoption)) }}</p>
                        <p class="card-text"><strong>Status:</strong> {{ ucfirst($item->status) }}</p>
                    </div>
                    <div class="col-md-6">
                        <p class="card-text"><strong>Price:</strong> ${{ number_format($item->price, 2) }}</p>
                        <p class="card-text"><strong>Stock:</strong> {{ $item->stock }}</p>
                        <p class="card-text"><strong>Pieces in a Packet:</strong> {{ $item->piecesinapacket }}</p>
                        <p class="card-text"><strong>Packets in a Cartoon:</strong> {{ $item->packetsinacartoon }}</p>
                    </div>
                </div>

                <!-- Add to Cart Form -->
                <form action="{{ route('carts.store') }}" method="POST" class="mt-4">
                    @csrf
                    <!-- item_id -->
                    <input type="hidden" name="item_id" value="{{ $item->id }}">
                    <input type="hidden" name="price" value="{{ $item->price }}">

                    <!-- cart_id -->
                    <div class="form-group">
                        <label for="cart_id">Select Cart:</label>
                        <select name="cart_id" id="cart_id" class="form-control">
                            <option value="">-- Select existing Cart --</option>
                            @foreach (auth()->user()->carts() as $cart)
                                <option value="{{ $cart->id }}">{{ $cart->cart_name }}</option>
                            @endforeach
                        </select>
                    </div>

{{--                    <div class="form-group">--}}
{{--                        <label for="new_cart_name">New Cart Name:</label>--}}
{{--                        <input type="text" name="new_cart_name" id="new_cart_name" class="form-control" placeholder="Enter new cart name" required>--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <label for="cart_id">Select Cart:</label>--}}
{{--                        <select name="cart_id" id="cart_id" class="form-control">--}}
{{--                            <option value="">-- Create a New Cart --</option>--}}
{{--                            @foreach (auth()->user()->carts as $cart)--}}
{{--                                <option value="{{ $cart->id }}">{{ $cart->cart_name }}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}


                    <!-- new_cart_name -->
                    <div class="form-group">
                        <label for="customer_id">Create new Cart:</label>
                        <select name="new_cart_name" id="customer_id" class="form-control">
                            <option value="">-- Select a Customer to Create Cart for --</option>
                            @foreach ($customers as $customer)
                                <option value="{{ $customer->customerFirstName }}">{{ $customer->customerFirstName }} {{ $customer->customerLastName }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Optionally, include a "Create a New Cart" section here -->
                    <!-- (You can display this after the user selects a customer or through a modal) -->

                    <div class="form-group">
                        <label for="quantity">Quantity:</label>
                        <input type="number" name="quantity" value="1" min="1" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-success btn-lg">Add to Cart</button>
                </form>

                <!-- End of Add to Cart Button -->
            </div>
        </div>
    </div>


</div>
@endsection
