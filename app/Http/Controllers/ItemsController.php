<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function store(Request $request) : RedirectResponse
    {
        $validatedItem = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|unique:users|max:255',
            'category' => 'required|string|email|unique:users',
            'pieces' => 'required|min:5',
            'packet' => 'required|min:5',
            'cartoon' => 'required|min:5',
            'price' => 'required|min:5',
        ]);

        $item = Item::create([
            'name' => $validatedItem['name'],
            'description' => $validatedItem['description'],
            'category' => $validatedItem['category'],
            'pieces' => $validatedItem['pieces'],
            'packet' => $validatedItem['packet'],
            'cartoon' => $validatedItem['cartoon'],
            'price' => $validatedItem['price'],
        ]);

        return redirect()->route('items')->with('success', 'item registered successfully!');
    }
}

