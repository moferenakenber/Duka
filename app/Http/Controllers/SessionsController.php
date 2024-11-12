<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('session.login-session');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);


        if(Auth::attempt($attributes))
        {
            // Authentication passed, regenerate session ID to prevent session fixation attacks
            session()->regenerate();

            // Redirect to the intended location or a default page
            return redirect()->intended('dashboard')->with(['success'=>'You are logged in.']);
        }
        else{

            return back()->withErrors(['email'=>'Email or password invalid.', 'password'=>'Email or password invalid.']);
        }
    }

    public function destroy()
    {

        Auth::logout();
        session()->invalidate();      // Invalidate the session
        session()->regenerateToken(); // Regenerate the CSRF token

        return redirect('/login')->with(['success'=>'You\'ve been logged out.']);
    }
}
