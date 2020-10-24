<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    
    protected $table ='sucursals';
    
    protected $fillable = ['sucursal','municipio_id','descripcion','url'];

    
    public function municipio()
    {
        return $this->belongsTo('App\Municipio');
    }

    public function citas()
    {
        return $this->hasMany('App\Cita');
    }

    public function ventanillas()
    {
        return $this->hasMany('App\Ventanilla');
    }



 public function getRouteKeyName()
    {
       return 'url';
    }
     
}
