<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Option;
use App\Models\Variation;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OptionValue
 * 
 * @property int $id
 * @property int $option_id
 * @property string $value
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Option $option
 * @property Collection|Variation[] $variations
 *
 * @package App\Models\Base
 */
class OptionValue extends Model
{
	use SoftDeletes;
	protected $table = 'option_values';

	protected $casts = [
		'option_id' => 'int'
	];

	public function option()
	{
		return $this->belongsTo(Option::class);
	}

	public function variations()
	{
		return $this->belongsToMany(Variation::class)
					->withPivot('id', 'deleted_at')
					->withTimestamps();
	}
}
