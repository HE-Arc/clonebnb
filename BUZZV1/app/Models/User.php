<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Notifications\Notifiable;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
	use Authenticatable, CanResetPassword, Notifiable;
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

    //Retourne le mois de naissance

    public function month()
    {
        return date("m",$this->birthday);
    }
}
