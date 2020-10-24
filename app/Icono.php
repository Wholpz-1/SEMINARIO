<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Icono extends Model
{
  
    protected $table ='iconos';
    
    protected $fillable = ['url','nombre'];

    
    public function servicios()
    {
        return $this->hasMany('App\Servicio');
    }


}
