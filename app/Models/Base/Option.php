<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\OptionType;
use App\Models\OptionValue;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Option
 * 
 * @property int $id
 * @property int $option_type_id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property OptionType $option_type
 * @property Collection|Product[] $products
 * @property Collection|OptionValue[] $option_values
 *
 * @package App\Models\Base
 */
class Option extends Model
{
	use SoftDeletes;
	protected $table = 'options';

	protected $casts = [
		'option_type_id' => 'int'
	];

	public function option_type()
	{
		return $this->belongsTo(OptionType::class);
	}

	public function products()
	{
		return $this->belongsToMany(Product::class)
					->withPivot('id', 'deleted_at')
					->withTimestamps();
	}

	public function option_values()
	{
		return $this->hasMany(OptionValue::class);
	}
}
