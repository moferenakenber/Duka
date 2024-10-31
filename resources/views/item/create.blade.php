{{--<!-- resources/views/items/create.blade.php -->--}}
{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>Add New product</title>--}}
{{--    <link rel="stylesheet" href="css/addproduct.css">--}}
{{--    @vite('resources/css/addproduct.css')--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="container">--}}
{{--    <h2>Description</h2>--}}
{{--    <div class="product-description">--}}
{{--        <form action="{{ route('item.store') }}" method="POST">--}}
{{--            @csrf--}}
{{--            <h2>Product Name</h2>--}}
{{--            <div class="product-category">--}}
{{--                <label for="name">Product Name</label>--}}
{{--                <br>--}}
{{--                <input type="text" id="name" name="name">--}}
{{--                <br>--}}
{{--                <label for="description">Product-description</label>--}}
{{--                <br>--}}
{{--                <textarea rows="5" cols="30" name="description" placeholder="enter product description"></textarea>--}}
{{--            </div>--}}
{{--            <h2>Category</h2>--}}
{{--            <div class="product-category">--}}

{{--                <label for="Category">product-category</label>--}}
{{--                <br>--}}
{{--                <select name="category">--}}
{{--                    <option value="office">office</option>--}}
{{--                    <option value="school">school</option>--}}
{{--                    <option value="kids">Kids</option>--}}
{{--                    <option value="gift">Gift</option>--}}
{{--                    <option value="gov">Government</option>--}}

{{--                </select>--}}
{{--            </div>--}}
{{--            <h2>Packaging Selling Options </h2>--}}
{{--            <div class="selling-type">--}}
{{--                --}}{{-- By adding [] to the name the result of the input will be sent as an--}}
{{--                                     array since the user may select two or more options --}}

{{--                <input type="checkbox" name="option[]" value="pieces" >Pieces<br>--}}
{{--                <input type="checkbox" name="option[]" value="packet" >Packet<br>--}}
{{--                <input type="checkbox" name="option[]" value="cartoon" >Cartoon<br>--}}

{{--            </div>--}}
{{--            <h2>pricing</h2>--}}
{{--            <div class="pricing">--}}

{{--                <label>Price</label><br>--}}
{{--                <input type="number" name="price" min="0">--}}

{{--            </div>--}}
{{--            <br>--}}

{{--            <h2>Status</h2>--}}
{{--            <div class="product-category">--}}

{{--                <label for="Category">product-category</label>--}}
{{--                <br>--}}
{{--                <select name="status">--}}
{{--                    <option value="Available">Available</option>--}}
{{--                    <option value="Not Available">Not Available</option>--}}
{{--                </select>--}}
{{--            </div>--}}

{{--            <h2>Stock</h2>--}}
{{--            <div class="pricing">--}}

{{--                <label>Stock</label><br>--}}
{{--                <input type="number" name="stock" min="0">--}}

{{--            </div>--}}

{{--            <div class="add-button">--}}
{{--                <button>add product</button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</div>--}}
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

    <div class="container">
        <div class="createcontainerchild">
        <h2>Description</h2>
            <div class="product-description">
                <form action="/item" method="POST">
                    @csrf
                    <h2>Product Name</h2>
                    <div class="product-category">
                        <label for="name">Product Name</label>
                        <br>
                        <input type="text" id="name" name="name">
                        <br>
                        <label for="description">Product-description</label>
                        <br>
                        <textarea rows="5" cols="30" name="description" placeholder="enter product description"></textarea>
                    </div>
                    <h2>Category</h2>
                    <div class="product-category">

                        <label for="Category">product-category</label>
                        <br>
                        {{--                            <select name="category">--}}
                        {{--                                <option value="office">office</option>--}}
                        {{--                                <option value="school">school</option>--}}
                        {{--                                <option value="kids">Kids</option>--}}
                        {{--                                <option value="gift">Gift</option>--}}
                        {{--                                <option value="gov">Government</option>--}}
                        <input type="checkbox" name="catoption[]" value="office" >office<br>
                        <input type="checkbox" name="catoption[]" value="school" >school<br>
                        <input type="checkbox" name="catoption[]" value="cartoon" >Kids<br>
                        <input type="checkbox" name="catoption[]" value="Kids" >Gift<br>
                        <input type="checkbox" name="catoption[]" value="government" >Government<br>
                        <input type="checkbox" name="catoption[]" value="cartoon" >Cartoon<br>

                        {{--                            </select>--}}
                    </div>
                    <h2>Packaging Selling Options </h2>
                    <div class="selling-type">
                        {{-- By adding [] to the name the result of the input will be sent as an
                                             array since the user may select two or more options --}}

                        <input type="checkbox" name="pacoption[]" value="pieces" >Pieces<br>
                        <input type="checkbox" name="pacoption[]" value="packet" >Packet<br>
                        <input type="checkbox" name="pacoption[]" value="cartoon" >Cartoon<br>

                    </div>
                    <h2>pricing</h2>
                    <div class="pricing">

                        <label>Price</label><br>
                        <input type="number" name="price" min="0">

                    </div>
                    <br>

                    <h2>Status</h2>
                    <div class="product-category">

                        <label for="Category">product-category</label>
                        <br>
                        <select name="status">
                            <option value="Available">Available</option>
                            <option value="Not Available">Not Available</option>
                        </select>
                    </div>

                    <h2>Stock</h2>
                    <div class="pricing">

                        <label>Stock</label><br>
                        <input type="number" name="stock" min="0">

                    </div>


                        <div class="mb-3">
                            <h2>Packaging Standard</h2>
                        </div>

                        <!-- Packet Section -->
                        <div class="row mb-3 align-items-center">
                            <div class="col-auto">
                                <label for="packetHolds" class="form-label">1 Packet holds</label>
                            </div>
                            <div class="col-auto">
                                    <input type="number" name="piecesinapacket" min="0" max="1000">
                            </div>

                            <div class="col-auto">
                                <label class="form-label">pieces</label>
                            </div>
                        </div>

                        <!-- Carton Section -->
                        <div class="row mb-3 align-items-center">
                            <div class="col-auto">
                                <label for="cartonHolds" class="form-label">1 Carton holds</label>
                            </div>
                            <div class="col-auto">
                                <input type="number" name="packetsinacartoon" min="0" max="1000">
                            </div>
                            <div class="col-auto">
                                <label class="form-label">packets</label>
                            </div>
                        </div>



                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                    </div>

                    <div class="add-button">
                        <br>
                        <button>add product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
