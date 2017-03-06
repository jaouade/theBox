<?php namespace App;


use Illuminate\Database\Eloquent\Model;


/**
 * Class Ticket
 * 
 * @property int $id_ticket_cle
 * @property int $id_ticket
 * @property int $id_produit
 * @property int $id_prix
 * @property int $id_reduction
 * @property float $prix
 * @property float $quantite
 * @property string $statut
 * @property \Carbon\Carbon $date_creation
 * @property string $date_annulation
 * @property float $prix_p
 * @property string $last_update
 * @property int $id_caisse
 *
 * @package App\Models
 */
class Ticket extends Model
{
	protected $table = 'Ticket';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_ticket_cle' => 'int',
		'id_ticket' => 'int',
		'id_produit' => 'int',
		'id_prix' => 'int',
		'id_reduction' => 'int',
		'prix' => 'float',
		'quantite' => 'float',
		'prix_p' => 'float',
		'id_caisse' => 'int'
	];

	protected $dates = [
		'date_creation'
	];

	protected $fillable = [
		'id_ticket',
		'id_produit',
		'id_prix',
		'id_reduction',
		'prix',
		'quantite',
		'statut',
		'date_creation',
		'date_annulation',
		'prix_p',
		'last_update'
	];
}
