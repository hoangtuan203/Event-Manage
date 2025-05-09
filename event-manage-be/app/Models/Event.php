<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Event
 * 
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string|null $location
 * @property Carbon $start_time
 * @property Carbon $end_time
 * @property int|null $capacity
 * @property int|null $created_by
 * @property Carbon|null $created_at
 * 
 * @property User|null $user
 * @property Collection|EventCategory[] $event_categories
 * @property Collection|EventPhoto[] $event_photos
 * @property Collection|RecurringEvent[] $recurring_events
 * @property Collection|Registration[] $registrations
 * @property Collection|Review[] $reviews
 * @property Collection|Seat[] $seats
 *
 * @package App\Models
 */
class Event extends Model
{
	protected $table = 'events';
	public $timestamps = false;

	protected $casts = [
		'start_time' => 'datetime',
		'end_time' => 'datetime',
		'capacity' => 'int',
		'created_by' => 'int'
	];

	protected $fillable = [
		'title',
		'description',
		'location',
		'start_time',
		'end_time',
		'capacity',
		'created_by'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'created_by');
	}

	public function event_categories()
	{
		return $this->hasMany(EventCategory::class);
	}

	public function event_photos()
	{
		return $this->hasMany(EventPhoto::class);
	}

	public function recurring_events()
	{
		return $this->hasMany(RecurringEvent::class);
	}

	public function registrations()
	{
		return $this->hasMany(Registration::class);
	}

	public function reviews()
	{
		return $this->hasMany(Review::class);
	}

	public function seats()
	{
		return $this->hasMany(Seat::class);
	}
}
