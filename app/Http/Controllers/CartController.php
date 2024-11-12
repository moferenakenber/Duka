<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Item;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Http\Request;

//This single line generates the following routes:
//
//GET /carts                → index method
//GET /carts/create         → create method
//POST /carts               → store method
//GET /carts/{item}         → show method
//GET /carts/{carts}/edit    → edit method
//PUT/PATCH /carts/{carts}   → update method
//DELETE /carts/{carts}      → destroy method

class CartController extends Controller
{
    // Display all carts for the authenticated user
    public function index()
    {
        $carts = auth()->user()->carts()->with('cartItems')->get(); // Load carts with items
        return view('carts.index', compact('carts'));
    }

    // Show form to create a new cart
    public function create()
    {
        return view('carts.create');
    }

    // Store a new cart
    public function store(Request $request)
    {
        $request->validate([
            'cart_id' => 'nullable|exists:carts,id',
            'new_cart_name' => 'nullable|string|max:255',
            'quantity' => 'required|integer|min:1',
        ]);

        // Determine if the user is selecting an existing cart or creating a new one
        if ($request->filled('cart_id')) {
            $cart = auth()->user()->carts()->find($request->cart_id);

            if (!$cart) {
                return redirect()->route('carts.index')->with('error', 'Selected cart not found.');
            }
        } elseif ($request->filled('new_cart_name')) {
            // Create a new cart if no existing cart is selected
            $cart = auth()->user()->carts()->create([
                'cart_name' => $request->new_cart_name,
            ]);
        } else {
            return redirect()->route('carts.index')->with('error', 'You must select an existing cart or create a new one.');
        }

        // Assuming you have a pivot table for cart items, add the item with the specified quantity
        $cart->cartItems()->attach($request->item_id, ['quantity' => $request->quantity,
                                                        'price' => $request->price,]);

        return redirect()->route('item.index')->with('success', 'Cart created successfully.');
        //return redirect()->route('carts.show', $cart->id)->with('success', 'Item added to cart successfully!');
    }


    // Show a single cart with items
    public function show(Cart $cart)
    {
        $this->authorize('view', $cart); // Ensure user owns the cart
        $cart->load('cartItems'); // Loads the related `Item` models via the `cartItems` relationship
        $items = Item::all(); // Get all items for dropdown

        return view('carts.show', compact('cart', 'items'));

    }

    /**
     * Get the items associated with the cart.
     *
     * @return BelongsToMany
     */
    public function items(): BelongsToMany
    {
        return $this->belongsToMany(Item::class, 'cart_item')
            ->withPivot('quantity'); // Assuming you want to store the quantity in the pivot table
    }
}
