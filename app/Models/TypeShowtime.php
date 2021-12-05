<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeShowtime
 * 
 * @property int $id_typest
 * @property string $typest_name
 * @property int $extra_typest
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Showtime[] $showtimes
 *
 * @package App\Models
 */
class TypeShowtime extends Model
{
	protected $table = 'type_showtime';
	protected $primaryKey = 'id_typest';

	protected $casts = [
		'extra_typest' => 'int'
	];

	protected $fillable = [
		'typest_name',
		'extra_typest'
	];

	public function showtimes()
	{
		return $this->hasMany(Showtime::class, 'id_typest');
	}
}
