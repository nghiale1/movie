<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Showtime
 * 
 * @property int $id_st
 * @property Carbon $datetime
 * @property int $id_mv
 * @property int $id_branch
 * @property int $id_typest
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Branch $branch
 * @property Movie $movie
 * @property TypeShowtime $type_showtime
 *
 * @package App\Models
 */
class Showtime extends Model
{
	protected $table = 'showtime';
	protected $primaryKey = 'id_st';

	protected $casts = [
		'id_mv' => 'int',
		'id_room' => 'int',
		'id_typest' => 'int'
	];

	protected $dates = [
		'datetime'
	];

	protected $fillable = [
		'datetime',
		'id_mv',
		'id_room',
		'id_typest'
	];

	public function room()
	{
		return $this->belongsTo(Room::class, 'id_room', 'id_room');
	}

	public function movie()
	{
		return $this->belongsTo(Movie::class, 'id_mv');
	}

	public function type_showtime()
	{
		return $this->belongsTo(TypeShowtime::class, 'id_typest');
	}
}