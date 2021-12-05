<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Branch
 * 
 * @property int $id_branch
 * @property string $branch_name
 * @property int $address
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Room[] $rooms
 * @property Collection|Showtime[] $showtimes
 *
 * @package App\Models
 */
class Branch extends Model
{
	protected $table = 'branch';
	protected $primaryKey = 'id_branch';

	protected $casts = [
		'address' => 'int'
	];

	protected $fillable = [
		'branch_name',
		'address'
	];

	public function rooms()
	{
		return $this->hasMany(Room::class, 'id_branch');
	}

	public function showtimes()
	{
		return $this->hasMany(Showtime::class, 'id_branch');
	}
}
