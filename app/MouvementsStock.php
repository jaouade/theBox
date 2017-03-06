<?php namespace App;


use Illuminate\Database\Eloquent\Model;

/**
 * Class MouvementsStock
 * 
 * @property int $id_mouvements_stock
 * @property int $id_produi_stock
 * @property int $quantite
 * @property string $date_ajout
 * @property string $note
 * @property int $id_caissier
 * @property string $last_update
 * @property int $id_caisse
 *
 * @package App\Models
 */
class MouvementsStock extends Model
{
	protected $table = 'Mouvements_Stock';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_mouvements_stock' => 'int',
		'id_produi_stock' => 'int',
		'quantite' => 'int',
		'id_caissier' => 'int',
		'id_caisse' => 'int'
	];

	protected $fillable = [
		'id_produi_stock',
		'quantite',
		'date_ajout',
		'note',
		'id_caissier',
		'last_update'
	];
}
