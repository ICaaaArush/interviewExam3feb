<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
	public function detail()
	{
		return $this->belongsTo(Variant::class,'variant_id','id');
	}

}
