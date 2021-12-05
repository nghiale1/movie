<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Discount
 * 
 * @property int $id_discount
 * @property string $discount_name
 * @property string $detail_discount
 * @property int $discount
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property DiscountForMem $discount_for_mem
 * @property Collection|TypeMember[] $type_members
 *
 * @package App\Models
 */
class Discount extends Model
{
	protected $table = 'discount';
	protected $primaryKey = 'id_discount';

	protected $casts = [
		'discount' => 'int'
	];

	protected $fillable = [
		'discount_name',
		'detail_discount',
		'discount'
	];

	public function discount_for_mem()
	{
		return $this->hasOne(DiscountForMem::class, 'id_discount');
	}

	public function type_members()
	{
		return $this->hasMany(TypeMember::class, 'id_discount');
	}
}
