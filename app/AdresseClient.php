<?php namespace App;


use Illuminate\Database\Eloquent\Model;


/**
 * Class AdresseClient
 * 
 * @property int $id_adresse_client
 * @property string $adresse
 * @property float $latitude
 * @property float $longitude
 * @property string $commentaire
 * @property int $id_client
 * @property int $selected
 * @property int $etat_a
 * @property string $last_update
 * @property int $id_caisse
 *
 * @package App\Models
 */
class AdresseClient extends Model
{
	protected $table = 'Adresse_Client';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_adresse_client' => 'int',
		'latitude' => 'float',
		'longitude' => 'float',
		'id_client' => 'int',
		'selected' => 'int',
		'etat_a' => 'int',
		'id_caisse' => 'int'
	];

	protected $fillable = [
		'adresse',
		'latitude',
		'longitude',
		'commentaire',
		'id_client',
		'selected',
		'etat_a',
		'last_update'
	];
}
