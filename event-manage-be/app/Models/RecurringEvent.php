<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RecurringEvent
 * 
 * @property int $id
 * @property int|null $event_id
 * @property string|null $recurrence_rule
 * @property Carbon|null $until_date
 * 
 * @property Event|null $event
 *
 * @package App\Models
 */
class RecurringEvent extends Model
{
	protected $table = 'recurring_events';
	public $timestamps = false;

	protected $casts = [
		'event_id' => 'int',
		'until_date' => 'datetime'
	];

	protected $fillable = [
		'event_id',
		'recurrence_rule',
		'until_date'
	];

	public function event()
	{
		return $this->belongsTo(Event::class);
	}
}
