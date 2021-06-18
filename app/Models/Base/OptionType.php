<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Option;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OptionType
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Option[] $options
 *
 * @package App\Models\Base
 */
class OptionType extends Model
{
	use SoftDeletes;
	protected $table = 'option_types';

	public function options()
	{
		return $this->hasMany(Option::class);
	}
}
