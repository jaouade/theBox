<?php namespace App;


use Illuminate\Database\Eloquent\Model;


/**
 * Class Categorie
 * 
 * @property int $id_categorie
 * @property string $designation_cat
 * @property string $description_cat
 * @property string $image_cat
 * @property int $visible
 * @property string $color_cat
 * @property string $last_update
 * @property int $id_caisse
 *
 * @package App\Models
 */
class Categorie extends Model
{
	protected $table = 'Categorie';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_categorie' => 'int',
		'visible' => 'int',
		'id_caisse' => 'int'
	];

	protected $fillable = [
        'id_categorie',
        'visible',
        'id_caisse',
		'designation_cat',
		'description_cat',
		'image_cat',
		'color_cat',
		'last_update'
	];
}
