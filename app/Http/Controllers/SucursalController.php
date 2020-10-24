<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Sucursal;
use App\Municipio;
use Illuminate\Support\Str;

class SucursalController extends Controller
{
    //


 public function index()
    {
         $sucursal = Sucursal::all();
        return view('sucursals.index',compact('sucursal'));
    }



public function store(Municipio $muni,Request $request)
    {
       
        
        $sucursal = Sucursal::create([
         'sucursal' => $request->get('nombre'),
         'url'=>Str::slug($request->get('nombre')),
         'descripcion' => $request->get('descrip'),
         'municipio_id'=> $muni->id,
        ]);
         

       
         return redirect()->route('sucursal.index')->with('success','Registro guardado satisfactoriamente');
           }



           public function edit(Municipio $muni)
    {

    
      return view('sucursals.edit',compact('muni'));


    }



            public function destroy($id)
    {
        //
        Departamento::find($id)->delete();
        return redirect()->route('departamento.index')->with('success','Registro eliminado satisfactoriamente');
        
    }


     public function configuracion(Sucursal $sucursal)
    {
        dd($sucursal);
        
    }





}
