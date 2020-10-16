<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Horaventanilla extends Model
{
  
    protected $table ='horaventanillas';
    
    protected $fillable = ['hora','ventanilla_id'];

    
    public function ventanilla()
    {
        return $this->belongsTo('App\Ventanilla');
    }

    public function citas()
    {
        return $this->hasMany('App\Cita');
    }
}
