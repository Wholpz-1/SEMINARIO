<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Servicio;
use App\Ventanilla;
use App\Sucursal;
use Illuminate\Support\Str;

class VentanillaController extends Controller
{
    //






public function store(Request $request, Sucursal $sucursal)
    {
       //metodo que inserta en la base de datos y redirecciona al index
             $this->validate($request, [
            'nombre' => 'required'   
        ]);
        
        $Ventanilla = Ventanilla::create([
         'ventanilla' => $request->get('nombre'),
         'sucursal_id'=> $sucursal->id,
         'estado'=> 'Deshabilitado',
         'url'=>Str::slug($request->get('nombre')),
        ]);
         

       
          return view('sucursals.configu',compact('sucursal'));
           }



           public function edit(Ventanilla $ventanilla)
    {

        $servicio= Servicio::all();
      return view('ventanillas.edit',compact('ventanilla','servicio'));


    }



            public function destroy(Sucursal $sucursal, Request $request)
    {
        //
        $id=$request->get('id');
        Ventanilla::find($id)->delete();
        return view('sucursals.configu',compact('sucursal'));
        
    }





}
