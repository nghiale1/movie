<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Banner
 * 
 * @property int $id_banner
 * @property string $banner_img
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
class Banner extends Model
{
	protected $table = 'banner';
	protected $primaryKey = 'id_banner';

	protected $casts = [
		'id_mv' => 'int',
		'id_user' => 'int'
	];

	protected $fillable = [
		'banner_img',
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
