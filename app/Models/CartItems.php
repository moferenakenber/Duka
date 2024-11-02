<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CartItems extends Model
{
    use HasFactory;

    protected $fillable = ['cart_id', 'item_id', 'quantity', 'price'];

    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class);
    }

    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class);
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
