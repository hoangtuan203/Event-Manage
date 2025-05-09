<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EventPhoto
 * 
 * @property int $id
 * @property int|null $event_id
 * @property string|null $image_url
 * @property Carbon|null $uploaded_at
 * 
 * @property Event|null $event
 *
 * @package App\Models
 */
class EventPhoto extends Model
{
	protected $table = 'event_photos';
	public $timestamps = false;

	protected $casts = [
		'event_id' => 'int',
		'uploaded_at' => 'datetime'
	];

	protected $fillable = [
		'event_id',
		'image_url',
		'uploaded_at'
	];

	public function event()
	{
		return $this->belongsTo(Event::class);
	}
}
