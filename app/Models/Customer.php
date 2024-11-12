<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'customerFirstName',
        'customerLastName',
        'city',
        'customerEmail',
        'customerPhoneNo',
//        'customerCreatedBy',
        'user_id',
    ];

    public function setCustomerFirstNameAttribute($value) : void
    {
        $this->attributes['customerFirstName'] = ucwords(strtolower($value));
    }

    public function setCustomerLastNameAttribute($value) : void
    {
        $this->attributes['customerLastName'] = ucwords(strtolower($value));
    }

    // Define the relationship to the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
