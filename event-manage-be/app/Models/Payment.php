<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Payment
 * 
 * @property int $id
 * @property int|null $ticket_id
 * @property float|null $amount
 * @property string|null $payment_method
 * @property string|null $payment_status
 * @property Carbon|null $paid_at
 * 
 * @property Ticket|null $ticket
 *
 * @package App\Models
 */
class Payment extends Model
{
	protected $table = 'payments';
	public $timestamps = false;

	protected $casts = [
		'ticket_id' => 'int',
		'amount' => 'float',
		'paid_at' => 'datetime'
	];

	protected $fillable = [
		'ticket_id',
		'amount',
		'payment_method',
		'payment_status',
		'paid_at'
	];

	public function ticket()
	{
		return $this->belongsTo(Ticket::class);
	}
}
