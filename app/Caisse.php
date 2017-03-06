<?php namespace App;


use Illuminate\Database\Eloquent\Model;

/**
 * Class Caisse
 * 
 * @property int $id_caisse_table
 * @property string $date_ouverture
 * @property float $montant_ouverture
 * @property int $id_serveur
 * @property string $date_fermeture
 * @property float $montant_fermeture
 * @property string $last_update
 * @property int $id_caisse
 *
 * @package App\Models
 */
class Caisse extends Model
{
	protected $table = 'Caisse';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_caisse_table' => 'int',
		'montant_ouverture' => 'float',
		'id_serveur' => 'int',
		'montant_fermeture' => 'float',
		'id_caisse' => 'int'
	];

	protected $fillable = [
		'date_ouverture',
		'montant_ouverture',
		'id_serveur',
		'date_fermeture',
		'montant_fermeture',
		'last_update'
	];
}
