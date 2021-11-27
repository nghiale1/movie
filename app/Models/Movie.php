<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Movie
 * 
 * @property int $id_mv
 * @property string $mv_name
 * @property string $director
 * @property string $perfomer
 * @property int|null $timemv
 * @property string|null $mv_content
 * @property string|null $image
 * @property string|null $trailer
 * @property string|null $made_in
 * @property bool|null $subdub
 * @property Carbon $date_start
 * @property Carbon $date_end
 * @property int $id_typemv
 * @property int $id_language
 * @property int $id_format
 * @property int $id_user
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Format $format
 * @property Language $language
 * @property TypeMovie $type_movie
 * @property User $user
 * @property Collection|Banner[] $banners
 * @property Collection|Comment[] $comments
 * @property Collection|Evalute[] $evalutes
 * @property Collection|Showtime[] $showtimes
 * @property Collection|TicketMv[] $ticket_mvs
 *
 * @package App\Models
 */
class Movie extends Model
{
	protected $table = 'movie';
	protected $primaryKey = 'id_mv';

	protected $casts = [
		'subdub' => 'bool',
		'id_typemv' => 'int',
		'id_language' => 'int',
		'id_format' => 'int',
		'id_user' => 'int'
	];


	protected $fillable = [
		'mv_name',
		'director',
		'perfomer',
		'timemv',
		'mv_content',
		'image',
		'trailer',
		'made_in',
		'subdub',
		'date_start',
		'date_end',
		'id_typemv',
		'id_language',
		'id_format',
		'id_user'
	];

	public function format()
	{
		return $this->belongsTo(Format::class, 'id_format');
	}

	public function language()
	{
		return $this->belongsTo(Language::class, 'id_language');
	}

	public function type_movie()
	{
		return $this->belongsTo(TypeMovie::class, 'id_typemv');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}

	public function banners()
	{
		return $this->hasMany(Banner::class, 'id_mv');
	}

	public function comments()
	{
		return $this->hasMany(Comment::class, 'id_mv');
	}

	public function evalutes()
	{
		return $this->hasMany(Evalute::class, 'id_mv');
	}

	public function showtimes()
	{
		return $this->hasMany(Showtime::class, 'id_mv');
	}

	public function ticket_mvs()
	{
		return $this->hasMany(TicketMv::class, 'id_mv');
	}
}
