<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    
    protected $table ='sucursals';
    
    protected $fillable = ['sucursal','municipio_id','descripcion'];

    
    public function municipio()
    {
        return $this->belongsTo('App\Municipio');
    }

    public function citas()
    {
        return $this->hasMany('App\Cita');
    }


}
