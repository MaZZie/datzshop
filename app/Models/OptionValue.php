<?php

namespace App\Models;

use App\Models\Base\OptionValue as BaseOptionValue;

class OptionValue extends BaseOptionValue
{
	protected $fillable = [
		'option_id',
		'value'
	];
}
