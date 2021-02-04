<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'sku', 'description'
    ];

    public function productVariants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function productVariantPrices()
    {
        return $this->hasMany(productVariantPrice::class);
    }
}
