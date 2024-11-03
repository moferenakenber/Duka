@extends('layouts.user_type.auth')

@section('content')

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Customers</h2>
            </div>
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownFormButton" data-bs-toggle="dropdown" aria-expanded="false">
                Add Customer
            </button>
            <ul class="dropdown-menu p-4" aria-labelledby="dropdownFormButton">
                <li>

                    <!-- Form inputs -->
                    <form action="{{ isset($item) ? route('item.update', $item->id) : route('item.store') }}" method="POST">
                        @csrf

                        <!-- Customer First Name -->
                        <div class="mb-3">
                            <label for="Customer First Name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="customerFirstName" name="customerFirstName" required>
                        </div>

                        <!-- Customer Last Name -->
                        <div class="mb-3">
                            <label for="Customer Last Name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="customerLastName" name="customerLastName" required>
                        </div>

                        <!-- City -->
                        <div class="mb-3">
                            <label for="role" class="form-label">City</label>
                            <br>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="radio" value="addisababa" id="addisababa" name="city[]" checked>
                                <label class="form-check-label" for="flexCheckChecked">Addis Ababa</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="radio" value="adama" id="adama" name="city[]">
                                <label class="form-check-label" for="flexCheckDefault">Adama</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="radio" value="direDawa" id="direDawa" name="city[]">
                                <label class="form-check-label" for="flexCheckChecked">Dire Dawa</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="radio" value="Bahir Dar" id="bahirDar" name="city[]">
                                <label class="form-check-label" for="bahirDar">Bahir Dar</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="radio" value="Bishoftu" id="bishoftu" name="city[]">
                                <label class="form-check-label" for="bishoftu">Bishoftu</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="radio" value="Dessie" id="dessie" name="city[]">
                                <label class="form-check-label" for="dessie">Dessie</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="radio" value="Gonder" id="gonder" name="city[]">
                                <label class="form-check-label" for="gonder">Gonder</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="radio" value="Jimma" id="jimma" name="city[]">
                                <label class="form-check-label" for="jimma">Jimma</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="radio" value="Jijiga" id="jijiga" name="city[]">
                                <label class="form-check-label" for="jijiga">Jijiga</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="radio" value="Mekele" id="mekele" name="city[]">
                                <label class="form-check-label" for="mekele">Mekele</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="radio" value="Shashamanea" id="shashamanea" name="city[]">
                                <label class="form-check-label" for="shashamanea">Shashamanea</label>
                            </div>
                        </div>

                        <!-- Customer Email -->
                        <div class="mb-3">
                            <label for="customerEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="userEmail" name="customerEmail">
                        </div>

                        <!-- Customer Phone No  -->
                        <div class="mb-3">
                            <label for="customerPhone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" id="userPhone" name="customerPhoneNo" value="+251" required placeholder="e.g., 912345678">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="dropdown">Close</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>

@endsection

