<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Voucher
 * 
 * @property int $id_voucher
 * @property string $voucher_name
 * @property Carbon $date_start
 * @property Carbon $date_end
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Voucher extends Model
{
	protected $table = 'voucher';
	protected $primaryKey = 'id_voucher';

	protected $dates = [
		'date_start',
		'date_end'
	];

	protected $fillable = [
		'voucher_name',
		'date_start',
		'date_end'
	];

	public function users()
	{
		return $this->hasMany(User::class, 'id_voucher');
	}
}
