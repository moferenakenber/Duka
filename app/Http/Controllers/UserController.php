<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store (Request $request) : RedirectResponse
    {
        //$name = $request->input('name');
        //store user here
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'username' => 'required|string|unique:users|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|min:5',
        ]);

        //Create new user instance
        //$user = new User;

        //Set variables
        $user = User::create([
            'fullname' => $validatedData['fullname'],
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);
/*
        $user->fullname = $validatedData['name'];
        $user->username = $validatedData['username'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);

        //Save the user in the database
        $user->save();
*/
        //Handle success
        Auth::login($user);
        session()->regenerate();
        return redirect()->route('dashboard')->with('success', 'User registered successfully!');
    }
}
