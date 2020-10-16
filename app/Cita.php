<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
   
    protected $table ='citas';
    
    protected $fillable = ['fecha','estado','descripcion','user_id','sucursal_id','ventanilla_id','servcio_id','horaventanilla_id'];

    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function sucursal()
    {
        return $this->belongsTo('App\Sucursal');
    }

    public function ventanilla()
    {
        return $this->belongsTo('App\Ventanilla');
    }

    public function servicio()
    {
        return $this->belongsTo('App\Servcio');
    }

    public function horaventanilla()
    {
        return $this->belongsTo('App\Horaventanilla');
    }

    

}
