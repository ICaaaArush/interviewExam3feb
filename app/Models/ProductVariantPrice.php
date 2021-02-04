<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariantPrice extends Model
{
	public function products()
	{
		return $this->belongsTo(Product::class);
	}
	public function productVariants()
	{
		return $this->belongsTo(ProductVariant::class);
	}
}
