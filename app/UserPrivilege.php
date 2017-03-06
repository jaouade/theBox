<?php namespace App;


use Illuminate\Database\Eloquent\Model;

/**
 * Class UserPrivilege
 * 
 * @property int $id_user_privilege
 * @property int $id_user
 * @property int $id_privilege
 * @property string $type
 * @property string $last_update
 * @property int $id_caisse
 *
 * @package App\Models
 */
class UserPrivilege extends Model
{
	protected $table = 'User_Privilege';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_user_privilege' => 'int',
		'id_user' => 'int',
		'id_privilege' => 'int',
		'id_caisse' => 'int'
	];

	protected $fillable = [
		'id_user',
		'id_privilege',
		'type',
		'last_update'
	];
}
