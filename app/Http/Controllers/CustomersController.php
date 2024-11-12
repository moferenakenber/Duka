<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//This single line generates the following routes:
//
//GET /item                → index method
//GET /item/create         → create method
//POST /item               → store method
//GET /item/{customer}         → show method
//GET /item/{customer}/edit    → edit method
//PUT/PATCH /item/{customer}   → update method
//DELETE /item/{customer}      → destroy method

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::with('user')->get();
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, User $user)
    {
        $request->validate([
            'customerFirstName' => 'required|string|max:255',
            'customerLastName' => 'required|string|max:255',
            'city' => 'nullable|string|max:255',
            'customerEmail' => 'required|email|unique:customers,customerEmail',
            'customerPhoneNo' => 'required|string|max:15',
        ]);

        Customer::create([
            'customerFirstName' => $request->customerFirstName,
            'customerLastName' => $request->customerLastName,
            'city' => $request->city,
            'customerEmail' => $request->customerEmail,
            'customerPhoneNo' => $request->customerPhoneNo,
            'customerCreatedBy' => auth()->id(),
            'user_id' => Auth::id(), // Get the currently authenticated user's ID
        ]);

        return redirect()->route('customers.index')->with('success', 'Customer created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
