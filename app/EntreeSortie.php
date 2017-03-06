<?php namespace App;


use Illuminate\Database\Eloquent\Model;

/**
 * Class EntreeSortie
 * 
 * @property int $id_entreesortie
 * @property float $montant
 * @property string $motif
 * @property string $date
 * @property int $id_serveur
 * @property string $last_update
 * @property int $id_caisse
 *
 * @package App\Models
 */
class EntreeSortie extends Model
{
	protected $table = 'EntreeSortie';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_entreesortie' => 'int',
		'montant' => 'float',
		'id_serveur' => 'int',
		'id_caisse' => 'int'
	];

	protected $fillable = [
		'montant',
		'motif',
		'date',
		'id_serveur',
		'last_update'
	];
}
