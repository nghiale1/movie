<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeAcc
 * 
 * @property int $id_type
 * @property string $type_name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class TypeAcc extends Model
{
	protected $table = 'type_acc';
	protected $primaryKey = 'id_type';

	protected $fillable = [
		'type_name'
	];

	public function users()
	{
		return $this->hasMany(User::class, 'id_type');
	}
}
