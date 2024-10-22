<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('tasks');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Get the current user's name
        //$username = Auth::user()->name; // You can also use Auth::user()->username depending on your model

        // Pass the username to the view
       // return view('tasks.create', compact('username'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $task = new Task();
        $validatedItem = $request->validate([
            'taskName' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'project' => 'required|string',
            'startDate' => 'required|date',
            'endDate' => 'required|date|after_or_equal:startDate', // Ensure endDate is after startDate
            'priority' => 'required',
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : View
    {
        return view('task', [
            'user' => User::findOrFail($id)
        ]);
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
