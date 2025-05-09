<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Registration
 * 
 * @property int $id
 * @property int|null $user_id
 * @property int|null $event_id
 * @property Carbon|null $registered_at
 * @property string|null $status
 * 
 * @property User|null $user
 * @property Event|null $event
 * @property Collection|Ticket[] $tickets
 *
 * @package App\Models
 */
class Registration extends Model
{
	protected $table = 'registrations';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'event_id' => 'int',
		'registered_at' => 'datetime'
	];

	protected $fillable = [
		'user_id',
		'event_id',
		'registered_at',
		'status'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function event()
	{
		return $this->belongsTo(Event::class);
	}

	public function tickets()
	{
		return $this->hasMany(Ticket::class);
	}
}
