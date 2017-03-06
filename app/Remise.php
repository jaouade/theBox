<?php namespace App;


use Illuminate\Database\Eloquent\Model;

/**
 * Class Remise
 * 
 * @property int $id_remise
 * @property string $type
 * @property float $valeur
 * @property string $designation_remise
 * @property string $last_update
 * @property int $id_caisse
 *
 * @package App\Models
 */
class Remise extends Model
{
	protected $table = 'Remise';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_remise' => 'int',
		'valeur' => 'float',
		'id_caisse' => 'int'
	];

	protected $fillable = [
		'type',
		'valeur',
		'designation_remise',
		'last_update'
	];
}
