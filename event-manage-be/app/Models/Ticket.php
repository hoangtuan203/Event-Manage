<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ticket
 * 
 * @property int $id
 * @property int|null $registration_id
 * @property string|null $ticket_code
 * @property string|null $type
 * @property float|null $price
 * @property Carbon|null $issued_at
 * @property string|null $qr_code
 * 
 * @property Registration|null $registration
 * @property Collection|Payment[] $payments
 *
 * @package App\Models
 */
class Ticket extends Model
{
	protected $table = 'tickets';
	public $timestamps = false;

	protected $casts = [
		'registration_id' => 'int',
		'price' => 'float',
		'issued_at' => 'datetime'
	];

	protected $fillable = [
		'registration_id',
		'ticket_code',
		'type',
		'price',
		'issued_at',
		'qr_code'
	];

	public function registration()
	{
		return $this->belongsTo(Registration::class);
	}

	public function payments()
	{
		return $this->hasMany(Payment::class);
	}
}
