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
                    <form>
                        <div class="mb-3">
                            <label for="Customer First Name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="customerFirstName" required>
                        </div>
                        <div class="mb-3">
                            <label for="Customer Last Name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="customerLastName" required>
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">City</label>
                            <br>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="checkbox" value="addisababa" id="addisababa" checked>
                                <label class="form-check-label" for="flexCheckChecked">Addis Ababa</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="checkbox" value="adama" id="adama">
                                <label class="form-check-label" for="flexCheckDefault">Adama</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="checkbox" value="direDawa" id="direDawa">
                                <label class="form-check-label" for="flexCheckChecked">Dire Dawa</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="checkbox" value="Bahir Dar" id="bahirDar">
                                <label class="form-check-label" for="bahirDar">Bahir Dar</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="checkbox" value="Bishoftu" id="bishoftu">
                                <label class="form-check-label" for="bishoftu">Bishoftu</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="checkbox" value="Dessie" id="dessie">
                                <label class="form-check-label" for="dessie">Dessie</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="checkbox" value="Gonder" id="gonder">
                                <label class="form-check-label" for="gonder">Gonder</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="checkbox" value="Jimma" id="jimma">
                                <label class="form-check-label" for="jimma">Jimma</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="checkbox" value="Jijiga" id="jijiga">
                                <label class="form-check-label" for="jijiga">Jijiga</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="checkbox" value="Mekele" id="mekele">
                                <label class="form-check-label" for="mekele">Mekele</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="checkbox" value="Shashamanea" id="shashamanea">
                                <label class="form-check-label" for="shashamanea">Shashamanea</label>
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
    </div>

@endsection

