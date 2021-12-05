<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserHaveVoucher
 * 
 * @property int $id_user
 * @property int $id_voucher
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 * @property Voucher $voucher
 *
 * @package App\Models
 */
class UserHaveVoucher extends Model
{
	protected $table = 'user_have_voucher';
	public $incrementing = false;

	protected $casts = [
		'id_user' => 'int',
		'id_voucher' => 'int'
	];

	protected $fillable = [
		'id_user',
		'id_voucher'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}

	public function voucher()
	{
		return $this->belongsTo(Voucher::class, 'id_voucher');
	}
}
