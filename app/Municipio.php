<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    
    
    protected $table ='municipios';
    
    protected $fillable = ['municipio','departamento_id'];

    
    public function departamento()
    {
        return $this->belongsTo('App\Departamento');
    }

    public function sucursales()
    {
        return $this->hasMany('App\Sucursal');
    }
}
