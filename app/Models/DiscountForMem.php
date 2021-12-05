<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DiscountForMem
 * 
 * @property int $id_discount
 * @property int $id_typemem
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Discount $discount
 * @property TypeMember $type_member
 *
 * @package App\Models
 */
class DiscountForMem extends Model
{
	protected $table = 'discount_for_mem';
	public $incrementing = false;

	protected $casts = [
		'id_discount' => 'int',
		'id_typemem' => 'int'
	];

	protected $fillable = [
		'id_discount',
		'id_typemem'
	];

	public function discount()
	{
		return $this->belongsTo(Discount::class, 'id_discount');
	}

	public function type_member()
	{
		return $this->belongsTo(TypeMember::class, 'id_typemem');
	}
}
