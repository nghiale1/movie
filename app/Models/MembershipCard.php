<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MembershipCard
 * 
 * @property int $id_memcard
 * @property string $memcard_name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|TypeMember[] $type_members
 *
 * @package App\Models
 */
class MembershipCard extends Model
{
	protected $table = 'membership_card';
	protected $primaryKey = 'id_memcard';

	protected $fillable = [
		'memcard_name'
	];

	public function type_members()
	{
		return $this->hasMany(TypeMember::class, 'id_memcard');
	}
}
