@extends('layouts.user_type.auth')

@section('content')

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Carts</h2>
            </div>
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownFormButton" data-bs-toggle="dropdown" aria-expanded="false">
                Add Cart
            </button>
            <ul class="dropdown-menu p-4" aria-labelledby="dropdownFormButton">
                <li>
                    <form>
                        <div class="mb-3">
                            <label for="customer" class="form-label">Customer</label>
                            <select class="form-select" id="customer" required>
                                <option value="" disabled selected>Select a customer</option> <!-- Placeholder option -->
                                <option value="Customer A">Customer A</option>
                                <option value="Customer B">Customer B</option>
                                <option value="Customer C">Customer C</option>
                                <option value="Customer D">Customer D</option>
                                <option value="Customer E">Customer E</option>
                                <!-- Add more customers as needed -->
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="dropdown">Close</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>

@endsection
