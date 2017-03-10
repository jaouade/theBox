<?php namespace App;


use Illuminate\Database\Eloquent\Model;


/**
 * Class Prix
 * 
 * @property int $id_prix
 * @property int $id_produit
 * @property float $prix
 * @property float $tva
 * @property string $label
 * @property int $etat
 * @property string $last_update
 * @property string $code_bar
 * @property int $id_caisse
 *
 * @package App\Models
 */
class Prix extends Model
{
	protected $table = 'Prix';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_prix' => 'int',
		'id_produit' => 'int',
		'prix' => 'float',
		'tva' => 'float',
		'etat' => 'int',
		'id_caisse' => 'int'
	];

	protected $fillable = [
		'id_produit',
		'prix',
        'id_prix',
        'id_caisse',
        'id_produit',
		'tva',
		'label',
		'etat',
		'last_update',
		'code_bar'
	];
}
