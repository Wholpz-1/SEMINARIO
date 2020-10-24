<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Servicio;
use App\Icono;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ServiciosController extends Controller
{
    //


 public function index()
    {
         $servicios = Servicio::all();
        return view('servicios.index',compact('servicios'));
    }



public function store(Request $request)
    {
       //metodo que inserta en la base de datos y redirecciona al index
             $this->validate($request, [
            'nombre' => 'required'   
        ]);
        
        $servicio = Servicio::create([
         'nombre' => $request->get('nombre'),
         'user_id' => Auth::id(),
         'url'=>Str::slug($request->get('nombre')),
        ]);
         

       return redirect()->route('servicio.edit', $servicio);
           }



           public function edit(Servicio $servicio)
    {

        $iconos= Icono::all();
      return view('servicios.edit',compact('servicio','iconos'));


    }



            public function destroy($id)
    {
        //
        Servicio::find($id)->delete();
        return redirect()->route('servicio.index')->with('success','Registro eliminado satisfactoriamente');
        
    }


           public function update(Servicio $servicio, Request $request)
    {       
        $iconos = $request->input('icono');
            
            $servicio->nombre=$request->get('servicio');
            $servicio->descripcion=$request->get('descripcion');
            $servicio->requisitos=$request->get('requisitos');
            

            foreach($iconos as $icono){
            $servicio->icono_id=$icono;
            }


            $servicio->save();


           return redirect()->route('servicio.edit', $servicio);
    }




}
