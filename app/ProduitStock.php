<?php namespace App;


use Illuminate\Database\Eloquent\Model;


/**
 * Class ProduitStock
 * 
 * @property int $id_produit_stock
 * @property string $reference
 * @property int $id_prix_produit
 * @property string $description
 * @property string $code_bar
 * @property int $stock_mini
 * @property int $stock_depart
 * @property string $date_creation
 * @property float $prix_achat
 * @property int $etat
 * @property string $date_fin_validite
 * @property int $id_caissier
 * @property string $last_update
 * @property int $quantite_en_stock
 * @property int $id_caisse
 * @property int $isvendable
 *
 * @package App\Models
 */
class ProduitStock extends Model
{
	protected $table = 'Produit_Stock';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_produit_stock' => 'int',
		'id_prix_produit' => 'int',
		'stock_mini' => 'int',
		'stock_depart' => 'int',
		'prix_achat' => 'float',
		'etat' => 'int',
		'id_caissier' => 'int',
		'quantite_en_stock' => 'int',
		'id_caisse' => 'int',
		'isvendable' => 'int'
	];

	protected $fillable = [
		'reference',
		'id_prix_produit',
		'description',
		'code_bar',
		'stock_mini',
		'stock_depart',
		'date_creation',
		'prix_achat',
		'etat',
		'date_fin_validite',
		'id_caissier',
		'last_update',
		'quantite_en_stock',
		'isvendable'
	];
}
