<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Ventanilla extends Model
{
    
    protected $table ='ventanillas';
    
    protected $fillable = ['ventanilla','url','estado','sucursal_id'];

    
    public function servicio()
    {
        return $this->belongsToMany('App\Servicio');
    }

    public function sucursal()
    {
        return $this->belongsTo('App\Sucursal');
    }

    public function horaventanillas()
    {
        return $this->hasMany('App\Horaventanilla');
    }

    public function citas()
    {
        return $this->hasMany('App\Cita');
    }

    public function getRouteKeyName()
    {
       return 'url';
    }


    
}
