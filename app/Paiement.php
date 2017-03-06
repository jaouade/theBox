<?php namespace App;


use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\AssignOp\Mod;

/**
 * Class Paiement
 * 
 * @property int $id_paiement
 * @property int $id_tikcet
 * @property float $montant
 * @property int $type_paiement
 * @property int $etat
 * @property string $date_creation
 * @property string $date_annulation
 * @property string $last_update
 * @property int $id_caisse
 *
 * @package App\Models
 */
class Paiement extends Model
{
	protected $table = 'Paiement';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_paiement' => 'int',
		'id_tikcet' => 'int',
		'montant' => 'float',
		'type_paiement' => 'int',
		'etat' => 'int',
		'id_caisse' => 'int'
	];

	protected $fillable = [
		'id_tikcet',
		'montant',
		'type_paiement',
		'etat',
		'date_creation',
		'date_annulation',
		'last_update'
	];
}
