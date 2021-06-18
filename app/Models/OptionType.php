<?php

namespace App\Models;

use App\Models\Base\OptionType as BaseOptionType;

class OptionType extends BaseOptionType
{
	protected $fillable = [
		'name'
	];
}
