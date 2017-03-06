<?php namespace App;


use Illuminate\Database\Eloquent\Model;


/**
 * Class Account
 * 
 * @property int $id_account
 * @property int $id_account_caisse
 * @property int $id_caisse
 * @property string $email
 * @property string $password
 * @property string $date_deb
 * @property string $date_fin
 * @property float $latitude
 * @property float $longitude
 * @property string $adresse
 * @property int $isSynchro
 * @property string $nom_reseau_local
 * @property int $alerte_paiement
 *
 * @package App\Models
 */
class Account extends Model
{
	protected $table = 'Account';
	protected $primaryKey = 'id_account';
	public $timestamps = false;

	protected $casts = [
		'id_account_caisse' => 'int',
		'id_caisse' => 'int',
		'latitude' => 'float',
		'longitude' => 'float',
		'isSynchro' => 'int',
		'alerte_paiement' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'id_account_caisse',
		'id_caisse',
		'email',
		'password',
		'date_deb',
		'date_fin',
		'latitude',
		'longitude',
		'adresse',
		'isSynchro',
		'nom_reseau_local',
		'alerte_paiement'
	];
}
