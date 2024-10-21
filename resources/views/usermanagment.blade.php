@extends('layouts.user_type.auth')

@section('content')
    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>User Management</h2>
            </div>
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownFormButton" data-bs-toggle="dropdown" aria-expanded="false">
                Add User
            </button>
            <ul class="dropdown-menu p-4" aria-labelledby="dropdownFormButton">
                <li>
                    <form>
                        <div class="mb-3">
                            <label for="User First Name" class="form-label">User First Name</label>
                            <input type="text" class="form-control" id="userFirstName" required>
                        </div>
                        <div class="mb-3">
                            <label for="User Last Name" class="form-label">User Last Name</label>
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
                                <input class="form-check-input" type="checkbox" value="purchaser" id="purchaser">
                                <label class="form-check-label" for="flexCheckDefault">Purchaser</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="checkbox" value="Employee" id="marketing">
                                <label class="form-check-label" for="flexCheckChecked">Marketing</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="checkbox" value="sales" id="marketing">
                                <label class="form-check-label" for="flexCheckChecked">Sales</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="customerEmail" class="form-label">User Email</label>
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




        {{--
        <form action="usermanagment" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="User First name" aria-label="User First name" id="userFirstName">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="User Last name" aria-label="Customers Last name" id="userLastName">
                </div>
            </div>
            <div class="mb-3">
                <input type="tel" class="form-control" placeholder="User Phone Number" id="userPhoneNumber">
            </div>
            <select class="form-select form-select-lg mb-3" aria-label="User Role">
                <option selected>Open this select menu</option>
                <option value="admin">Admin</option>
                <option value="employee">Employee with out any lables</option>
                <option value="purchaser">Purchaser</option>
                <option value="marketing">Marketing</option>
                <option value="sales">Sales</option>
            </select>

            <div class="form-check form-check-inline mb-3">
                <input class="form-check-input" type="checkbox" value="Admin" id="Admin">
                <label class="form-check-label" for="flexCheckDefault">
                    Admin
                </label>
            </div>
            <div class="form-check form-check-inline mb-3">
                <input class="form-check-input" type="checkbox" value="Employee" id="Employee" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Employee with out any lables
                </label>
            </div>
            <div class="form-check form-check-inline mb-3">
                <input class="form-check-input" type="checkbox" value="purchaser" id="purchaser">
                <label class="form-check-label" for="flexCheckDefault">
                    Purchaser
                </label>
            </div>
            <div class="form-check form-check-inline mb-3">
                <input class="form-check-input" type="checkbox" value="Employee" id="marketing">
                <label class="form-check-label" for="flexCheckChecked">
                    Marketing
                </label>
            </div>
            <div class="form-check form-check-inline mb-3">
                <input class="form-check-input" type="checkbox" value="sales" id="marketing">
                <label class="form-check-label" for="flexCheckChecked">
                    Sales
                </label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        --}}


                    @php
                        use App\Models\User;
                        $users = User::all();
                    @endphp
        <div class="tabular--wrapper">
            <section class="tabel-body">
                    <table>
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full name</th>
                            <th>User name</th>
                            <th>Email</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->fullname }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>{{ $user->updated_at }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
            </section>
        </div>



    </div>

@endsection
