@extends('layouts.user_type.auth')

@section('content')

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Profile</h2>
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
    </div>

@endsection
