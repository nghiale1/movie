<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeSeat
 * 
 * @property int $id_typeseat
 * @property string $typeseat_name
 * @property int $extra_typeseat
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Seat[] $seats
 *
 * @package App\Models
 */
class TypeSeat extends Model
{
	protected $table = 'type_seat';
	protected $primaryKey = 'id_typeseat';

	protected $casts = [
		'extra_typeseat' => 'int'
	];

	protected $fillable = [
		'typeseat_name',
		'extra_typeseat'
	];

	public function seats()
	{
		return $this->hasMany(Seat::class, 'id_typeseat');
	}
}
