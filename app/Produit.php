<?php namespace App;


use Illuminate\Database\Eloquent\Model;


/**
 * Class Produit
 * 
 * @property int $id_produit
 * @property string $designation
 * @property string $description
 * @property int $id_cat
 * @property string $image
 * @property int $visible
 * @property string $color
 * @property string $last_update
 * @property int $id_caisse
 *
 * @package App\Models
 */
class Produit extends Model
{
	protected $table = 'Produit';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_produit' => 'int',
		'id_cat' => 'int',
		'visible' => 'int',
		'id_caisse' => 'int'
	];

	protected $fillable = [
		'designation',
        'id_produit' ,
		'description',
        'id_caisse',
		'id_cat',
		'image',
		'visible',
		'color',
		'last_update'
	];
}
