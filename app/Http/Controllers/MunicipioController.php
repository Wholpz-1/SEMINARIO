<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Departamento;
use App\Municipio;
use Illuminate\Support\Str;

class MunicipioController extends Controller
{
    //






public function store(Departamento $depa,Request $request)
    {

        
       //metodo que inserta en la base de datos y redirecciona al index
             $this->validate($request, [
            'nombre' => 'required'   
        ]);
        
        $municipio = Municipio::create([
         'municipio' => $request->get('nombre'),
         'departamento_id'=> $depa->id,
         'url'=>Str::slug($request->get('nombre')),
        ]);
         

           return view('departamento.edit',compact('depa'));

           }



            public function destroy(Departamento $depa, Request $request)
    {
        //
        Municipio::find($request->id)->delete();
       return view('departamento.edit',compact('depa'));
        
    }





}
