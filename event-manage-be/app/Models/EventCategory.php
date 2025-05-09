<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EventCategory
 * 
 * @property int $id
 * @property int|null $event_id
 * @property int|null $category_id
 * 
 * @property Event|null $event
 * @property Category|null $category
 *
 * @package App\Models
 */
class EventCategory extends Model
{
	protected $table = 'event_categories';
	public $timestamps = false;

	protected $casts = [
		'event_id' => 'int',
		'category_id' => 'int'
	];

	protected $fillable = [
		'event_id',
		'category_id'
	];

	public function event()
	{
		return $this->belongsTo(Event::class);
	}

	public function category()
	{
		return $this->belongsTo(Category::class);
	}
}
