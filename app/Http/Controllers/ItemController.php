<?php
// app/Http/Controllers/ItemController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;



//This single line generates the following routes:
//
//GET /item                → index method
//GET /item/create         → create method
//POST /item               → store method
//GET /item/{item}         → show method
//GET /item/{item}/edit    → edit method
//PUT/PATCH /item/{item}   → update method
//DELETE /item/{item}      → destroy method

class ItemController extends Controller
{
    // Display a listing of items
    public function index() : RedirectResponse
    {
//        $items = Item::all();
    //  return view('items.index', compact('items'));
        return redirect()->route('items')->with('success', 'item registered successfully!');
    }

    // Show the form for creating a new item
    public function create()  : View
    {
        return view('item.create');
    }

    // Store a newly created item in storage
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
            'piecesinapacket' => 'required|min:1',
            'packetsinacartoon' => 'required|min:1',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'

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
            'piecesinapacket' => $validatedItem['piecesinapacket'],
            'packetsinacartoon' => $validatedItem['packetsinacartoon'],
        ]);

        // Handle image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName(); // Create a unique filename
                $image->storeAs('uploads', $filename, 'public'); // Store in storage/app/public/uploads
                // Optionally, you might want to save the image paths to the database associated with the item
                // For example, you can push to an array, or save paths in a separate column if necessary
                $item->images()->create(['path' => 'uploads/' . $filename]); // Assuming you have a relation set up for images
            }
        }

        return redirect()->route('item.index')->with('success', 'item registered successfully!');
    }

    // Display the specified item
    public function show($id) : View
    {
        // Retrieve the item by ID
        $item = Item::findOrFail($id);
        return view('item.show', compact('item'));
    }

    // Show the form for editing the specified item
    public function edit($id) : View
    {
        $item = Item::findOrFail($id);
        return view('item.additempage', compact('item'));
    }

    // Update the specified item in storage
    public function update(Request $request, Item $item) : RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'catoption' => 'required|array|min:1',
            'pacoption' => 'required|array|min:1',
            'price' => 'required|min:1',
            'status' => 'required',
            'stock' => 'required|min:1',
            'piecesinapacket' => 'required|min:1',
            'packetsinacartoon' => 'required|min:1',
        ]);

        $item->update($validated);
        return redirect()->route('item.index')->with('success', 'Item updated successfully.');
    }

    // Remove the specified item from storage
    public function destroy(Item $item)  : RedirectResponse
    {
        $item->delete();
        return redirect()->route('item.index')->with('success', 'Item deleted successfully.');
    }
}
