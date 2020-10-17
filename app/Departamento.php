<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
   
    protected $table ='departamentos';
    
    protected $fillable = ['departamento','url'];

    public function municipios()
    {
        return $this->hasMany('App\Municipio');
    }

     public function getRouteKeyName()
    {
       return 'url';
    }
     
}
