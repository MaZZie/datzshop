<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Variant
 * 
 * @property int $id
 * @property int $product_id
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
 * @property Product $product
 *
 * @package App\Models\Base
 */
class Variant extends Model
{
	use SoftDeletes;
	protected $table = 'variant';

	protected $casts = [
		'product_id' => 'int',
		'price' => 'float',
		'has_stock' => 'bool',
		'stock' => 'float'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}
