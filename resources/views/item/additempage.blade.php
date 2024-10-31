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

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <h2>{{ isset($item) ? 'Edit Product' : 'Add New Product' }}</h2>
                <div class="product-description">
                    <form action="{{ isset($item) ? route('item.update', $item->id) : route('item.store') }}" method="POST">
                        @csrf
                        @if(isset($item))
                            @method('PUT')
                        @endif

                        <!-- Form inputs -->
                        <h2>Product Name</h2>
                        <div class="product-category">
                            <label for="name">Product Name</label>
                            <br>
{{--                            <input type="text" id="name" name="name">--}}
                            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $item->name ?? '') }}">
                            <br>
                            <label for="description">Product-description</label>
                            <br>
                            <textarea rows="5" cols="30" name="description" placeholder="enter product description">{{ old('description', $item->description ?? '') }}</textarea>
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
                            <input type="checkbox" name="catoption[]" value="office" {{ isset($item) && in_array('office', json_decode($item->catoption) ?? []) ? 'checked' : '' }} >office<br>
                            <input type="checkbox" name="catoption[]" value="school" {{ isset($item) && in_array('school', json_decode($item->catoption) ?? []) ? 'checked' : '' }} >school<br>
                            <input type="checkbox" name="catoption[]" value="cartoon" {{ isset($item) && in_array('cartoon', json_decode($item->catoption) ?? []) ? 'checked' : '' }} >Kids<br>
                            <input type="checkbox" name="catoption[]" value="Kids" {{ isset($item) && in_array('Kids', json_decode($item->catoption) ?? []) ? 'checked' : '' }} >Gift<br>
                            <input type="checkbox" name="catoption[]" value="government" {{ isset($item) && in_array('government', json_decode($item->catoption) ?? []) ? 'checked' : '' }} >Government<br>
                            <input type="checkbox" name="catoption[]" value="cartoon" {{ isset($item) && in_array('cartoon', json_decode($item->catoption) ?? []) ? 'checked' : '' }} >Cartoon<br>

                            {{--                            </select>--}}
                        </div>

                        <h2>Packaging Selling Options </h2>
                        <div class="selling-type">
                            {{-- By adding [] to the name the result of the input will be sent as an
                                                 array since the user may select two or more options --}}

                            <input type="checkbox" name="pacoption[]" value="pieces" {{ isset($item) && in_array('pieces', json_decode($item->pacoption) ?? []) ? 'checked' : '' }} >Pieces<br>
                            <input type="checkbox" name="pacoption[]" value="packet" {{ isset($item) && in_array('packet', json_decode($item->pacoption) ?? []) ? 'checked' : '' }} >Packet<br>
                            <input type="checkbox" name="pacoption[]" value="cartoon" {{ isset($item) && in_array('cartoon', json_decode($item->pacoption) ?? []) ? 'checked' : '' }} >Cartoon<br>

                        </div>
                        <h2>pricing</h2>
                        <div class="pricing">

                            <label>Price</label><br>
                            <input type="number" name="price" min="0" value="{{ old('price', $item->price ?? '') }}">

                        </div>
                        <br>

                        <h2>Status</h2>
                        <div class="product-category">

                            <label for="Category">product-category</label>
                            <br>
                            <select name="status">
{{--                                <option value="Available">Available</option>--}}
{{--                                <option value="Not Available">Not Available</option>--}}
                                <option value="Available" {{ old('status', $item->status ?? '') == 'Available' ? 'selected' : '' }}>Available</option>
                                <option value="Not Available" {{ old('status', $item->status ?? '') == 'Not Available' ? 'selected' : '' }}>Not Available</option>
                            </select>
                        </div>

                        <h2>Stock</h2>
                        <div class="pricing">

                            <label>Stock</label><br>
{{--                            <input type="number" name="stock" min="0">--}}
                            <input type="number" name="stock" min="0" value="{{ old('stock', $item->stock ?? '') }}">

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
                                <input type="number" name="piecesinapacket" min="0" max="1000" value="{{ old('piecesinapacket', $item->piecesinapacket ?? '') }}>
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
                                <input type="number" name="packetsinacartoon" min="0" max="1000" value="{{ old('packetsinacartoon', $item->packetsinacartoon ?? '') }}>
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
{{--                            <button>add product</button>--}}
                            <button type="submit">{{ isset($item) ? 'Update Product' : 'Add Product' }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


