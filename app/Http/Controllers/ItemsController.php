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
            'catoption' => 'required|array|min:1',
            'pacoption' => 'required|array|min:1',
            'price' => 'required|min:1',
            'status' => 'required',
            'stock' => 'required|min:1',
            'piecesinapacket' => 'nullable|integer|min:0', // Allow null if this field is optional
            'packetsinacartoon' => 'nullable|integer|min:0',

        ]);
        /*
                $item->name = $request->name;
                $item->save();
        */

                $item = Item::create([
                    'name' => $validatedItem['name'],
                    'description' => $validatedItem['description'],
                    'catoption' => json_encode($validatedItem['catoption']),
                    'pacoption' => json_encode($validatedItem['pacoption']),
                    'price' => $validatedItem['price'],
                    'status' => $validatedItem['status'],
                    'stock' => $validatedItem['stock'],
                    'piecesinapacket' => 'nullable|integer|min:0', // Allow null if this field is optional
                    'packetsinacartoon' => 'nullable|integer|min:0',
                ]);


        return redirect()->route('items')->with('success', 'item registered successfully!');
    }
}

