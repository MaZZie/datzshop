<?php

namespace App\Models;

use App\Models\Base\OptionProduct as BaseOptionProduct;

class OptionProduct extends BaseOptionProduct
{
	protected $fillable = [
		'option_id',
		'product_id'
	];
}
