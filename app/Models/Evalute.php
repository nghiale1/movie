<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Evalute
 * 
 * @property int $id_evalute
 * @property int $id_mv
 * @property int $id_user
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Movie $movie
 * @property User $user
 *
 * @package App\Models
 */
class Evalute extends Model
{
	protected $table = 'evalute';
	protected $primaryKey = 'id_evalute';

	protected $casts = [
		'id_mv' => 'int',
		'id_user' => 'int'
	];

	protected $fillable = [
		'id_mv',
		'id_user'
	];

	public function movie()
	{
		return $this->belongsTo(Movie::class, 'id_mv');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}
}
