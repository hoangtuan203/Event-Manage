<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $role
 * @property Carbon|null $created_at
 * 
 * @property Collection|Event[] $events
 * @property Collection|Notification[] $notifications
 * @property Collection|Registration[] $registrations
 * @property Collection|Review[] $reviews
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'email',
		'password',
		'role'
	];

	public function events()
	{
		return $this->hasMany(Event::class, 'created_by');
	}

	public function notifications()
	{
		return $this->hasMany(Notification::class);
	}

	public function registrations()
	{
		return $this->hasMany(Registration::class);
	}

	public function reviews()
	{
		return $this->hasMany(Review::class);
	}
}
