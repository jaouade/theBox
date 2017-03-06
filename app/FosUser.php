<?php namespace App;


use Illuminate\Database\Eloquent\Model;


/**
 * Class FosUser
 * 
 * @property int $id
 * @property int $profile
 * @property string $username
 * @property string $username_canonical
 * @property string $email
 * @property string $email_canonical
 * @property bool $enabled
 * @property string $salt
 * @property string $password
 * @property \Carbon\Carbon $last_login
 * @property bool $locked
 * @property bool $expired
 * @property \Carbon\Carbon $expires_at
 * @property string $confirmation_token
 * @property \Carbon\Carbon $password_requested_at
 * @property string $roles
 * @property bool $credentials_expired
 * @property \Carbon\Carbon $credentials_expire_at
 * @property string $facebook_id
 * @property string $facebook_access_token
 * @property string $google_id
 * @property string $google_access_token
 * @property string $twitter_id
 * @property string $twitter_access_token
 * @property \Carbon\Carbon $created
 * @property \Carbon\Carbon $modified
 *
 * @package App\Models
 */
class FosUser extends Model
{
	protected $table = 'fos_user';
	public $timestamps = false;

	protected $casts = [
		'profile' => 'int',
		'enabled' => 'bool',
		'locked' => 'bool',
		'expired' => 'bool',
		'credentials_expired' => 'bool'
	];

	protected $dates = [
		'last_login',
		'expires_at',
		'password_requested_at',
		'credentials_expire_at',
		'created',
		'modified'
	];

	protected $hidden = [
		'password',
		'confirmation_token',
		'facebook_access_token',
		'google_access_token',
		'twitter_access_token'
	];

	protected $fillable = [
		'profile',
		'username',
		'username_canonical',
		'email',
		'email_canonical',
		'enabled',
		'salt',
		'password',
		'last_login',
		'locked',
		'expired',
		'expires_at',
		'confirmation_token',
		'password_requested_at',
		'roles',
		'credentials_expired',
		'credentials_expire_at',
		'facebook_id',
		'facebook_access_token',
		'google_id',
		'google_access_token',
		'twitter_id',
		'twitter_access_token',
		'created',
		'modified'
	];
}
