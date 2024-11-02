<?php
namespace App\Policies;

use App\Models\User;
use App\Models\Cart;

    class CartPolicy
    {
        public function view(User $user, Cart $cart) : bool
            {
                // Check if the user owns the cart
                return $user->id === $cart->user_id; // Assuming there's a user_id field on the Cart model
            }
    }
