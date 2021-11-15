<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TicketMv
 * 
 * @property int $id_ticketmv
 * @property float $price
 * @property int $id_mv
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Movie $movie
 * @property Collection|Payment[] $payments
 *
 * @package App\Models
 */
class TicketMv extends Model
{
	protected $table = 'ticket_mv';
	protected $primaryKey = 'id_ticketmv';

	protected $casts = [
		'price' => 'float',
		'id_mv' => 'int'
	];

	protected $fillable = [
		'price',
		'id_mv'
	];

	public function movie()
	{
		return $this->belongsTo(Movie::class, 'id_mv');
	}

	public function payments()
	{
		return $this->hasMany(Payment::class, 'id_ticketmv');
	}
}
