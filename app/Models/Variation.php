<?php

namespace App\Models;

use App\Models\Base\Variation as BaseVariation;

class Variation extends BaseVariation
{
	protected $fillable = [
		'product_id',
		'name',
		'slug',
		'price',
		'has_stock',
		'stock',
		'sku',
		'description'
	];
}
