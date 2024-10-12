<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemsController extends Controller
{
    public function store(Request $request) : RedirectResponse
    {
        $item = new Item();

        $validatedItem = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'category' => 'required|string',
            'option' => 'required|array|min:1',
            'price' => 'required|min:1',
            'status' => 'required',
            'stock' => 'required|min:1',

        ]);
        /*
                $item->name = $request->name;
                $item->save();
        */

                $item = Item::create([
                    'name' => $validatedItem['name'],
                    'description' => $validatedItem['description'],
                    'category' => $validatedItem['category'],
                    'option' => json_encode($validatedItem['option']),
                    'price' => $validatedItem['price'],
                    'status' => $validatedItem['status'],
                    'stock' => $validatedItem['stock'],
                ]);


        return redirect()->route('items')->with('success', 'item registered successfully!');
    }
}

