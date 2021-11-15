<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeMovie
 * 
 * @property int $id_typemv
 * @property string $typemv_name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Movie[] $movies
 *
 * @package App\Models
 */
class TypeMovie extends Model
{
	protected $table = 'type_movie';
	protected $primaryKey = 'id_typemv';

	protected $fillable = [
		'typemv_name'
	];

	public function movies()
	{
		return $this->hasMany(Movie::class, 'id_typemv');
	}
}
