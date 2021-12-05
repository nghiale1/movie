<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MethodPayment
 * 
 * @property int $id_methodpay
 * @property string $methodpay_name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Payment[] $payments
 *
 * @package App\Models
 */
class MethodPayment extends Model
{
	protected $table = 'method_payment';
	protected $primaryKey = 'id_methodpay';

	protected $fillable = [
		'methodpay_name'
	];

	public function payments()
	{
		return $this->hasMany(Payment::class, 'id_methodpay');
	}
}
