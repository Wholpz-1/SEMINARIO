<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
   
    protected $table ='rols';
    
    protected $fillable = ['rol'];

    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
