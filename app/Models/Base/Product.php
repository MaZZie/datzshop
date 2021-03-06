<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Option;
use App\Models\ProductType;
use App\Models\Variation;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product
 * 
 * @property int $id
 * @property int $product_type_id
 * @property string $name
 * @property string $slug
 * @property float $price
 * @property bool $has_stock
 * @property float $stock
 * @property string $sku
 * @property string $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property ProductType $product_type
 * @property Collection|Option[] $options
 * @property Collection|Variation[] $variations
 *
 * @package App\Models\Base
 */
class Product extends Model
{
	use SoftDeletes;
	protected $table = 'products';

	protected $casts = [
		'product_type_id' => 'int',
		'price' => 'float',
		'has_stock' => 'bool',
		'stock' => 'float'
	];

	public function product_type()
	{
		return $this->belongsTo(ProductType::class);
	}

	public function options()
	{
		return $this->belongsToMany(Option::class)
					->withPivot('id', 'deleted_at')
					->withTimestamps();
	}

	public function variations()
	{
		return $this->hasMany(Variation::class);
	}
}
