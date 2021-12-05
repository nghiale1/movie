<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 * 
 * @property int $id_comment
 * @property string $comment
 * @property int $id_mv
 * @property int $id_user
 * @property int $id_comment_rep
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Movie $movie
 * @property User $user
 * @property Collection|Comment[] $comments
 *
 * @package App\Models
 */
class Comment extends Model
{
	protected $table = 'comment';
	protected $primaryKey = 'id_comment';

	protected $casts = [
		'id_mv' => 'int',
		'id_user' => 'int',
		'id_comment_rep' => 'int'
	];

	protected $fillable = [
		'comment',
		'id_mv',
		'id_user',
		'id_comment_rep'
	];

	public function comment()
	{
		return $this->belongsTo(Comment::class, 'id_comment_rep');
	}

	public function movie()
	{
		return $this->belongsTo(Movie::class, 'id_mv');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}

	public function comments()
	{
		return $this->hasMany(Comment::class, 'id_comment_rep');
	}
}
