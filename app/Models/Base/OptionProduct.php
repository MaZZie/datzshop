<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Option;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OptionProduct
 * 
 * @property int $id
 * @property int $option_id
 * @property int $product_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Option $option
 * @property Product $product
 *
 * @package App\Models\Base
 */
class OptionProduct extends Model
{
	use SoftDeletes;
	protected $table = 'option_product';

	protected $casts = [
		'option_id' => 'int',
		'product_id' => 'int'
	];

	public function option()
	{
		return $this->belongsTo(Option::class);
	}

	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}
