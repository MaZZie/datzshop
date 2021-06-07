<?php

namespace App\Models;

use App\Models\Base\Product as BaseProduct;

class Product extends BaseProduct
{
	protected $fillable = [
		'name',
		'price',
		'vat',
		'ean',
		'description'
	];
}
