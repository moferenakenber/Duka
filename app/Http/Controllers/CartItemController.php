<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Item;
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

      $cartItem = CartItem::updateOrCreate(
          [
              'cart_id' => $request->cart_id,
              'item_id' => $request->item_id,
          ],
          [
              'quantity' => $request->quantity,
          ]
        );

        return redirect()->route('carts.show', $cart->id)->with('success', 'Item added to cart.');
    }

    public function addItemToCart(Request $request, $cartId)
    {
        $request->validate([
            'item_id' => 'required|exists:items,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $item = Item::find($request->item_id);

        CartItem::create([
            'cart_id' => $cartId,
            'item_id' => $item->id,
            'quantity' => $request->quantity,
            'price' => $item->price, // Assuming `price` is a column in items
        ]);

        return back()->with('success', 'Item added to cart.');
    }
}
