<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Room
 * 
 * @property int $id_room
 * @property string $room_name
 * @property int $id_branch
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Branch $branch
 * @property Collection|Seat[] $seats
 *
 * @package App\Models
 */
class Room extends Model
{
	protected $table = 'room';
	protected $primaryKey = 'id_room';

	protected $casts = [
		'id_branch' => 'int'
	];

	protected $fillable = [
		'room_name',
		'id_branch'
	];

	public function branch()
	{
		return $this->belongsTo(Branch::class, 'id_branch');
	}

	public function seats()
	{
		return $this->hasMany(Seat::class, 'id_room');
	}
}
