<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Ventanilla;
use App\Horaventanilla;
use Illuminate\Support\Str;

class HoraController extends Controller
{
    //

public function store(Request $request, Ventanilla $ventanilla)
    {
       //metodo que inserta en la base de datos y redirecciona al index
             $this->validate($request, [
            'nombre' => 'required'   
        ]);
        
        $horaventanilla = Horaventanilla::create([
         'hora' => $request->get('nombre'),
         'ventanilla_id'=> $ventanilla->id,
        ]);
         

       
         return redirect()->route('ventanilla.edit',$ventanilla)->with('success','Registro guardado satisfactoriamente');
           }



            public function destroy(Ventanilla $ventanilla, Request $request)
    {
        //
        Horaventanilla::find($request->get('id'))->delete();

        return redirect()->route('ventanilla.edit',$ventanilla)->with('success','Registro eliminado satisfactoriamente');
        
    }





}
