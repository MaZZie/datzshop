<?php

namespace App\Models;

use App\Models\Base\Option as BaseOption;

class Option extends BaseOption
{
	protected $fillable = [
		'option_type_id',
		'name'
	];
}
