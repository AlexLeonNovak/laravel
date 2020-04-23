<?php

namespace App\Entity\User;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;


/**
 * @property $id
 * @property $first_name
 * @property $last_name
 * @property $middle_name
 * @property $status
 * @property $role
 * @property $verify_token
 * @property $password
 *
 * Class User
 * @package App\Entity\User
 */
class User extends Authenticatable
{
    use Notifiable;

    public const STATUS_WAIT = 'wait';
    public const STATUS_ACTIVE = 'active';

    public const ROLE_USER  = 'user';
    public const ROLE_ADMIN  = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'midle_name',
        'email',
        'verify_token',
        'status',
        'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFullName()
    {
        return trim($this->lastname);
    }

    public static function add($fields)
    {
        $user = new static();
        $user->fill($fields);
        $user->password = bcrypt($fields['password']);
        $user->verify_token = Str::random(100);
        $user->status = self::STATUS_WAIT;
        $user->role = self::ROLE_USER;
        $user->save();
        return $user;
    }

    public function isAdmin()
    {
        return $this->role === self::ROLE_ADMIN;
    }

    public function setAdmin()
    {
        if ($this->isAdmin()){
            throw new \DomainException('User already is Admin');
        }
        $this->role = self::ROLE_ADMIN;
        $this->save();
    }


}
