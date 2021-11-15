<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Format
 * 
 * @property int $id_format
 * @property string $format_name
 * @property int $price
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Movie[] $movies
 *
 * @package App\Models
 */
class Format extends Model
{
	protected $table = 'format';
	protected $primaryKey = 'id_format';

	protected $casts = [
		'price' => 'int'
	];

	protected $fillable = [
		'format_name',
	];

	public function movies()
	{
		return $this->hasMany(Movie::class, 'id_format');
	}
}