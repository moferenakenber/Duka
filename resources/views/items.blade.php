@extends('layouts.user_type.auth')

@section('content')

<div class="main--content">

    <div class="header--wrapper">
        <div class="header--title">
            <h2>Items</h2>
        </div>
        <div class="user--info">
            <div class="search--box">
                <i class='bx bx-search'></i>
                <input type="text" placeholder="search">
            </div>
            <!--user image-->
        </div>
        <a href="/item/create" class="additem">+</a>
    </div>

    @php
        use App\Models\Item;
        $item = Item::all();
    @endphp

    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Selling Options</th>
                <th scope="col">Available Colors</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
                <th scope="col">Stock</th>
                <th scope="col" colspan="3" class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            @foreach($item as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
{{--                    <td>{{implode(', ', json_decode($item->catoption))}}</td>--}}
{{--                    <td>{{implode(', ', json_decode($item->pacoption))}}</td>--}}
                    {{--            <td>{{$item->availablecolors}}</td>--}}
                    <td>Category</td>
                <td>Selling Options</td>
                    <td>Available Colors</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->status}}</td>
                    <td>{{$item->stock}}</td>
                    <td>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="/item/{{$item->id}}" class="btn btn-success btn-sm">View</a>
                            {{--                                        <td><a href="/item/{{$item->id}}/edit" class="btn btn-primary">Edit</a></td>--}}
                            <a href="{{ route('item.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
{{--                            <a href="/item/{item}" class="btn btn-danger btn-sm">Delete</a>--}}

                            <form action="{{ route('item.destroy', $item->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                            </form>



                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

{{--    <div class="tabular--wrapper">--}}
{{--        <section class="tabel-body">--}}
{{--            <table>--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th>Name</th>--}}
{{--                    --}}{{--       <th>Image</th>            --}}
{{--                    --}}{{--       <th>Description</th>              --}}
{{--                    --}}{{--        <th>category</th>.              --}}
{{--                    <th>Selling Options</th>--}}
{{--                    <th>Price</th>--}}
{{--                    <th>Status</th>--}}
{{--                    <th>Stock</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @foreach($items as $item)--}}
{{--                    <tr>--}}
{{--                        <td>{{$item->id}}</td>--}}
{{--                        <td>{{$item->name}}</td>--}}
{{--                        --}}{{--           <td> <img src="{{ asset('img/A4paper.jpeg') }}" alt="paper img"></td>         --}}
{{--                        --}}{{--           <td>{{$item->description}}</td>       --}}
{{--                        --}}{{--                                <td>{{$item->category}}</td>--}}
{{--                        <td>{{implode(', ', json_decode($item->option))}}</td>--}}
{{--                        <td>{{$item->price}}</td>--}}
{{--                        <td>{{$item->status}}</td>--}}
{{--                        <td>{{$item->stock}}</td>--}}
{{--                        <td>--}}
{{--                            <div class="d-grid gap-2 d-md-block">--}}
{{--                                <a href="/item/{{$item->id}}" class="btn btn-success">View</a>--}}
{{--                                --}}{{--                                        <td><a href="/item/{{$item->id}}/edit" class="btn btn-primary">Edit</a></td>--}}
{{--                                <td><a href="{{ route('item.edit', $item->id) }}" class="btn btn-primary">Edit</a></td>--}}

{{--                                <td><a href="/item/{item}" class="btn btn-danger">Delete</a></td>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        </section>--}}
{{--    </div>--}}


</div>
@endsection
