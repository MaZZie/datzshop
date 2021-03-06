<?php

namespace App\Models;

use App\Models\Base\Product as BaseProduct;

class Product extends BaseProduct
{
	protected $fillable = [
		'product_type_id',
		'name',
		'slug',
		'price',
		'has_stock',
		'stock',
		'sku',
		'description'
	];
}
