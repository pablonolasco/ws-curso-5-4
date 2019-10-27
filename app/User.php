<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //SABER SI ES ESTA VERIFICADO
    const USUARIO_VERIFICADO='1';
    const USUARIO_NO_VERIFICADO='0';

    //SABER SI ES ADMIN
    const USUARIO_ADMIN='1';
    const USUARIO_NO_ADMIN='0';


    protected $fillable = [
        'name', 'email', 'password','verified','verification_token','admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','verification_token',
    ];

    public function esVerificado(){
        return $this->verified == User::USUARIO_VERIFICADO;
    }

    public function esAdmin(){
        return $this->verified == User::USUARIO_ADMIN;
    }

    //funcion que genera token
    public static function generarVerificationToken(){
        return str_random(40);
    }
}
