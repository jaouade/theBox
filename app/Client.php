<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 * 
 * @property int $id_client
 * @property string $nom_client
 * @property string $email_client
 * @property string $tel_client
 * @property int $etat
 * @property string $date
 * @property string $last_update
 * @property int $id_caisse
 *
 * @package App\Models
 */
class Client extends Model
{
	protected $table = 'Client';
	public $incrementing = false;
	public $timestamps = false;
	protected $primaryKey = ['id_client','id_caisse'];

	protected $casts = [
		'id_client' => 'int',
		'etat' => 'int',
		'id_caisse' => 'int'
	];

	protected $fillable = [
        'id_client',
		'nom_client',
		'email_client',
		'tel_client',
		'etat',
		'date',
		'last_update',
        'id_caisse'
	];
}
