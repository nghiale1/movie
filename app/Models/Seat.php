<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Seat
 * 
 * @property int $id_seat
 * @property string $seat_name
 * @property int $id_typeseat
 * @property int $id_room
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Room $room
 * @property TypeSeat $type_seat
 *
 * @package App\Models
 */
class Seat extends Model
{
	protected $table = 'seat';
	protected $primaryKey = 'id_seat';

	protected $casts = [
		'id_typeseat' => 'int',
		'id_room' => 'int'
	];

	protected $fillable = [
		'seat_name',
		'id_typeseat',
		'id_room'
	];

	public function room()
	{
		return $this->belongsTo(Room::class, 'id_room');
	}

	public function type_seat()
	{
		return $this->belongsTo(TypeSeat::class, 'id_typeseat');
	}
}
