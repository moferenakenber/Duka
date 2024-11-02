<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Item;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // Display all carts for the authenticated user
    public function index()
    {
        $carts = auth()->user()->carts()->with('cartItems.item')->get(); // Load carts with items
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
        $cart->items()->attach($request->item_id, ['quantity' => $request->quantity]);

        return redirect()->route('carts.show', $cart->id)->with('success', 'Item added to cart successfully!');
    }


    // Show a single cart with items
    public function show(Cart $cart)
    {
        $this->authorize('view', $cart); // Ensure user owns the cart
        $cart->load('cartItems.item'); // Load related items for the cart
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
