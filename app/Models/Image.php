<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'path',
    ];

    // Define the inverse relationship back to the item
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
