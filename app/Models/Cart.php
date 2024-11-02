<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'cart_name', 'status'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function cartItems(): HasMany
    {
        return $this->hasMany(CartItems::class);
    }

    public function createCart(Request $request)
    {
        $request->validate([
            'cart_name' => 'nullable|string|max:255',
        ]);

        $cart = Cart::create([
            'user_id' => auth()->id(),
            'cart_name' => $request->input('cart_name'),
        ]);

        return redirect()->route('cart.show', $cart->id);
    }

    public function items(): BelongsToMany
    {
        return $this->belongsToMany(Item::class, 'cart_item')
            ->withPivot('quantity'); // Assuming you want to store the quantity in the pivot table
    }
}
