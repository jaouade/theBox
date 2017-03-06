<?php namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * Class ListTicket
 * 
 * @property int $id_list_ticket
 * @property \Carbon\Carbon $date_creation
 * @property string $date_fin
 * @property string $statut
 * @property float $prix
 * @property int $id_reduction
 * @property int $id_serveur
 * @property string $nom_ticket
 * @property string $date_annulation
 * @property string $date_remboursement
 * @property int $id_caissier
 * @property string $surplace
 * @property int $id_client_adresse
 * @property string $last_update
 * @property int $id_caisse
 *
 * @package App\Models
 */
class ListTicket extends Model
{
	protected $table = 'ListTicket';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_list_ticket' => 'int',
		'prix' => 'float',
		'id_reduction' => 'int',
		'id_serveur' => 'int',
		'id_caissier' => 'int',
		'id_client_adresse' => 'int',
		'id_caisse' => 'int'
	];

	protected $dates = [
		'date_creation'
	];

	protected $fillable = [
		'date_creation',
		'date_fin',
		'statut',
		'prix',
		'id_reduction',
		'id_serveur',
		'nom_ticket',
		'date_annulation',
		'date_remboursement',
		'id_caissier',
		'surplace',
		'id_client_adresse',
		'last_update'
	];
}
