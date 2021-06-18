<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\OptionValue;
use App\Models\Variation;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OptionValueVariation
 * 
 * @property int $id
 * @property int $option_value_id
 * @property int $variation_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property OptionValue $option_value
 * @property Variation $variation
 *
 * @package App\Models\Base
 */
class OptionValueVariation extends Model
{
	use SoftDeletes;
	protected $table = 'option_value_variation';

	protected $casts = [
		'option_value_id' => 'int',
		'variation_id' => 'int'
	];

	public function option_value()
	{
		return $this->belongsTo(OptionValue::class);
	}

	public function variation()
	{
		return $this->belongsTo(Variation::class);
	}
}
