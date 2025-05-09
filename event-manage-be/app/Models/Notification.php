<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Notification
 * 
 * @property int $id
 * @property int|null $user_id
 * @property string|null $message
 * @property bool|null $read_status
 * @property Carbon|null $created_at
 * 
 * @property User|null $user
 *
 * @package App\Models
 */
class Notification extends Model
{
	protected $table = 'notifications';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'read_status' => 'bool'
	];

	protected $fillable = [
		'user_id',
		'message',
		'read_status'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
