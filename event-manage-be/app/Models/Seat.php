<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Seat
 * 
 * @property int $id
 * @property int|null $event_id
 * @property string|null $seat_number
 * @property string|null $status
 * 
 * @property Event|null $event
 *
 * @package App\Models
 */
class Seat extends Model
{
	protected $table = 'seats';
	public $timestamps = false;

	protected $casts = [
		'event_id' => 'int'
	];

	protected $fillable = [
		'event_id',
		'seat_number',
		'status'
	];

	public function event()
	{
		return $this->belongsTo(Event::class);
	}
}
