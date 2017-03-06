<?php namespace App;


use Illuminate\Database\Eloquent\Model;

/**
 * Class TicketClient
 * 
 * @property int $id_ticket_client
 * @property int $id_client
 * @property int $id_adresse
 * @property string $last_update
 * @property int $id_caisse
 *
 * @package App\Models
 */
class TicketClient extends Model
{
	protected $table = 'Ticket_Client';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_ticket_client' => 'int',
		'id_client' => 'int',
		'id_adresse' => 'int',
		'id_caisse' => 'int'
	];

	protected $fillable = [
		'id_client',
		'id_adresse',
		'last_update'
	];
}
