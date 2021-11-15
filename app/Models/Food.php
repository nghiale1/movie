<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Food
 * 
 * @property int $id_food
 * @property string $food_name
 * @property float $food_price
 * @property bool $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Food extends Model
{
	protected $table = 'food';
	protected $primaryKey = 'id_food';

	protected $casts = [
		'food_price' => 'float',
		'status' => 'bool'
	];

	protected $fillable = [
		'food_name',
		'food_price',
		'status'
	];
}
