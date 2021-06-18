<?php

namespace App\Models;

use App\Models\Base\OptionValueVariation as BaseOptionValueVariation;

class OptionValueVariation extends BaseOptionValueVariation
{
	protected $fillable = [
		'option_value_id',
		'variation_id'
	];
}
