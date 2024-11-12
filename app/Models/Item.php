<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'catoption',
        'pacoption',
       // 'sellingoption',
       // 'availablecolors',
        'price',
        'status',
        'stock',
        'image',
        'piecesinapacket',
        'packetsinacartoon',
    ];

    // Mutator to capitalize the first letter of the product name

    // Mutator to capitalize the first letter of each word in specified attributes
    public function setNameAttribute($value) : void
    {
        $this->attributes['name'] = ucwords(strtolower($value));
    }

    public function setDescriptionAttribute($value) : void
    {
        $this->attributes['description'] = ucwords(strtolower($value));
    }

    // Define the one-to-many relationship with images
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
