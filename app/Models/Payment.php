<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Payment
 * 
 * @property int $id_pay
 * @property float $total
 * @property Carbon $creat_at
 * @property int $id_user
 * @property int $id_ticketmv
 * @property int $id_methodpay
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property MethodPayment $method_payment
 * @property TicketMv $ticket_mv
 * @property User $user
 *
 * @package App\Models
 */
class Payment extends Model
{
	protected $table = 'payment';
	protected $primaryKey = 'id_pay';

	protected $casts = [
		'total' => 'float',
		'id_user' => 'int',
		'id_ticketmv' => 'int',
		'id_methodpay' => 'int'
	];

	protected $dates = [
		'creat_at'
	];

	protected $fillable = [
		'total',
		'creat_at',
		'id_user',
		'id_ticketmv',
		'id_methodpay'
	];

	public function method_payment()
	{
		return $this->belongsTo(MethodPayment::class, 'id_methodpay');
	}

	public function ticket_mv()
	{
		return $this->belongsTo(TicketMv::class, 'id_ticketmv');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}
}
