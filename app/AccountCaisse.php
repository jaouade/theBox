<?php namespace App;


use Illuminate\Database\Eloquent\Model;

/**
 * Class AccountCaisse
 * 
 * @property int $id_account_caisse
 * @property string $nom_societe
 * @property string $tel_societe
 * @property string $nom_responsable
 * @property string $login
 * @property string $mdp
 *
 * @package App\Models
 */
class AccountCaisse extends Model
{
	protected $table = 'Account_Caisse';
	protected $primaryKey = 'id_account_caisse';
	public $timestamps = false;

	protected $fillable = [
		'nom_societe',
		'tel_societe',
		'nom_responsable',
		'login',
		'mdp'
	];
}
