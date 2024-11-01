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

    // Define the one-to-many relationship with images
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
