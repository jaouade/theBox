<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TypePaiement
 * 
 * @property int $id_type_paiement
 * @property string $type_paiement
 *
 * @package App\Models
 */
class TypePaiement extends Model
{
	protected $table = 'Type_paiement';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_type_paiement' => 'int'
	];

	protected $fillable = [
		'id_type_paiement',
		'type_paiement'
	];
}
