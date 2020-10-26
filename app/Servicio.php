<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
 
    protected $table ='servicios';
    
    protected $fillable = ['descripcion','user_id','icono_id','url','nombre','requisitos'];

    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function icono()
    {
        return $this->belongsTo('App\Icono');
    }

    public function citas()
    {
        return $this->hasMany('App\Cita');
    }

    public function ventanillas()
    {
        return $this->belongsToMany('App\Ventanilla');
    }


    public function getRouteKeyName()
    {
       return 'url';
    }

}
