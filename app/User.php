<?php namespace App;


use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id_user
 * @property string $nom
 * @property string $password
 * @property string $login
 * @property int $etat
 * @property string $type_user
 * @property string $url_image_user
 * @property string $last_update
 * @property int $id_caisse
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'User';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_user' => 'int',
		'etat' => 'int',
		'id_caisse' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'nom',
		'password',
		'login',
		'etat',
		'type_user',
		'url_image_user',
		'last_update'
	];
}
