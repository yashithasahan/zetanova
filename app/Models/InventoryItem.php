<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventoryItem extends Model
{
    protected $fillable = [
        'name',
        'description',
        'quantity',
        'price',
        'category',
    ];

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
