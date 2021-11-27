<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as AuthUser;

/**
 * Class User
 * 
 * @property int $id_user
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $name
 * @property Carbon $birthday
 * @property bool|null $sex
 * @property string|null $address
 * @property string|null $date_of_birth
 * @property string|null $phone_number
 * @property Carbon|null $email_verified_at
 * @property int|null $points
 * @property int $id_type
 * @property int $id_typemem
 * @property int $id_voucher
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property TypeAcc $type_acc
 * @property TypeMember $type_member
 * @property Voucher $voucher
 * @property Collection|Article[] $articles
 * @property Collection|Banner[] $banners
 * @property Collection|Comment[] $comments
 * @property Collection|Evalute[] $evalutes
 * @property Collection|Movie[] $movies
 * @property Collection|Payment[] $payments
 * @property Collection|Voucher[] $vouchers
 *
 * @package App\Models
 */
class User extends AuthUser
{
	protected $table = 'users';
	protected $primaryKey = 'id_user';

	protected $casts = [
		'sex' => 'bool',
		'points' => 'int',
		'id_type' => 'int',
		'id_typemem' => 'int',
		'id_voucher' => 'int'
	];

	protected $dates = [
		'birthday',
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'username',
		'email',
		'password',
		'name',
		'birthday',
		'sex',
		'address',
		'date_of_birth',
		'phone_number',
		'email_verified_at',
		'points',
		'id_type',
		'id_typemem',
		'id_voucher',
		'remember_token'
	];

	public function type_acc()
	{
		return $this->belongsTo(TypeAcc::class, 'id_type');
	}

	public function type_member()
	{
		return $this->belongsTo(TypeMember::class, 'id_typemem');
	}

	public function voucher()
	{
		return $this->belongsTo(Voucher::class, 'id_voucher');
	}

	public function articles()
	{
		return $this->hasMany(Article::class, 'id_user');
	}

	public function banners()
	{
		return $this->hasMany(Banner::class, 'id_user');
	}

	public function comments()
	{
		return $this->hasMany(Comment::class, 'id_user');
	}

	public function evalutes()
	{
		return $this->hasMany(Evalute::class, 'id_user');
	}

	public function movies()
	{
		return $this->hasMany(Movie::class, 'id_user');
	}

	public function payments()
	{
		return $this->hasMany(Payment::class, 'id_user');
	}

	public function vouchers()
	{
		return $this->belongsToMany(Voucher::class, 'user_have_voucher', 'id_user', 'id_voucher')
					->withTimestamps();
	}
}
