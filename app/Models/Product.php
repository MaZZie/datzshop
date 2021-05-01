<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property int $id
 * @property string $name
 * @property float $price
 * @property float $vat
 * @property int $ean
 * @property string $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'products';

	protected $casts = [
		'price' => 'float',
		'vat' => 'float',
		'ean' => 'int'
	];

	protected $fillable = [
		'name',
		'price',
		'vat',
		'ean',
		'description'
	];
}
