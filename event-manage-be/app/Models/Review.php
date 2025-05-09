<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Review
 * 
 * @property int $id
 * @property int|null $user_id
 * @property int|null $event_id
 * @property int|null $rating
 * @property string|null $comment
 * @property Carbon|null $created_at
 * 
 * @property User|null $user
 * @property Event|null $event
 *
 * @package App\Models
 */
class Review extends Model
{
	protected $table = 'reviews';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'event_id' => 'int',
		'rating' => 'int'
	];

	protected $fillable = [
		'user_id',
		'event_id',
		'rating',
		'comment'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function event()
	{
		return $this->belongsTo(Event::class);
	}
}
