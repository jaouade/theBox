<?php namespace App;


use Illuminate\Database\Eloquent\Model;

/**
 * Class Privilege
 * 
 * @property int $id_privilege
 * @property string $nom_privilege
 *
 * @package App\Models
 */
class Privilege extends Model
{
	protected $table = 'Privilege';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_privilege' => 'int'
	];

	protected $fillable = [
		'id_privilege',
		'nom_privilege'
	];
}
