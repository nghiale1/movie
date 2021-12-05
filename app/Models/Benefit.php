<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Benefit
 * 
 * @property int $id_benefit
 * @property string $benefit_name
 * @property string $detail_benefit
 * @property int $discount_benefit
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|TypeMember[] $type_members
 *
 * @package App\Models
 */
class Benefit extends Model
{
	protected $table = 'benefit';
	protected $primaryKey = 'id_benefit';

	protected $casts = [
		'discount_benefit' => 'int'
	];

	protected $fillable = [
		'benefit_name',
		'detail_benefit',
		'discount_benefit'
	];

	public function type_members()
	{
		return $this->hasMany(TypeMember::class, 'id_benefit');
	}
}
