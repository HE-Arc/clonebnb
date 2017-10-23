<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
{
	use Authenticatable;
    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $hidden = ['password'];

     /**
     * The attributes that are mass assignable.
     *
     * @var array $fillable
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    //Retourner le nom complet de l'utilisateur
    public function getFullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

}
