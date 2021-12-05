<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeMember
 * 
 * @property int $id_typemem
 * @property string $typemem_name
 * @property int $id_discount
 * @property int $id_benefit
 * @property int $id_memcard
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Benefit $benefit
 * @property Discount $discount
 * @property MembershipCard $membership_card
 * @property DiscountForMem $discount_for_mem
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class TypeMember extends Model
{
	protected $table = 'type_member';
	protected $primaryKey = 'id_typemem';

	protected $casts = [
		'id_discount' => 'int',
		'id_benefit' => 'int',
		'id_memcard' => 'int'
	];

	protected $fillable = [
		'typemem_name',
		'id_discount',
		'id_benefit',
		'id_memcard'
	];

	public function benefit()
	{
		return $this->belongsTo(Benefit::class, 'id_benefit');
	}

	public function discount()
	{
		return $this->belongsTo(Discount::class, 'id_discount');
	}

	public function membership_card()
	{
		return $this->belongsTo(MembershipCard::class, 'id_memcard');
	}

	public function discount_for_mem()
	{
		return $this->hasOne(DiscountForMem::class, 'id_typemem');
	}

	public function users()
	{
		return $this->hasMany(User::class, 'id_typemem');
	}
}
