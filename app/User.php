<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'dpi',
        'fdn',
        'apellidos',
        'genero',
        'rol_id',
        'url',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    ///////////////////////////////////relaciones////////////////////////////

    public function rol() {
        return $this->hasOne('App\Rol');
      }

      public function servicios()
    {
        return $this->hasMany('App\Servicio');
    }

    public function citas()
    {
        return $this->hasMany('App\Cita');
    }


//comprobar si es administrador o no
 public function admin(){
      return $this->rol_id === '3';
    }


      public function confirmado(){
      return $this->confirmed === 1;
    }

    public function habilitado(){
      return $this->estado === 'P';
    }

    public function getRouteKeyName()
    {
       return 'dpi';
    }




    
}
