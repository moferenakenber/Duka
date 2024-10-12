@extends('layouts.user_type.auth')

 @section('content')
{{--
<!DOCTYPE html>
<html lang=en>
<head>
<meta charset="UTF-8">
<title>Yewbdar Stationery</title>
<link rel="stylesheet" href="dashboard.css"/>--}}
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
                <a href="additempage" class="additem">+</a>
            </div>

            @php
                use App\Models\Item;
                $items = Item::all();
            @endphp

            <div class="tabular--wrapper">
                <section class="tabel-body">
                    <table>
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>category</th>
                            <th>Packaging Selling Options</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Stock</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td> <img src="{{ asset('img/A4paper.jpeg') }}" alt="paper img"></td>
                                <td>{{$item->description}}</td>
                                <td>{{$item->category}}</td>
                                <td>{{implode(', ', json_decode($item->option))}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->status}}</td>
                                <td>{{$item->stock}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </section>
            </div>

        </div>
 @endsection
