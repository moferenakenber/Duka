<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartItemController extends Controller
{
    // Add an item to a specific cart
    public function store(Request $request, Cart $cart)
    {
        $this->authorize('update', $cart); // Ensure user owns the cart

        $request->validate([
            'item_id' => 'required|exists:items,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $item = Item::findOrFail($request->item_id);

        CartItem::create([
            'cart_id' => $cart->id,
            'item_id' => $item->id,
            'quantity' => $request->quantity,
            'price' => $item->price,
        ]);

        return redirect()->route('carts.show', $cart->id)->with('success', 'Item added to cart.');
    }
}
