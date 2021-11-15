<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Language
 * 
 * @property int $id_language
 * @property string $language_name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Movie[] $movies
 *
 * @package App\Models
 */
class Language extends Model
{
	protected $table = 'language';
	protected $primaryKey = 'id_language';

	protected $fillable = [
		'language_name'
	];

	public function movies()
	{
		return $this->hasMany(Movie::class, 'id_language');
	}
}
