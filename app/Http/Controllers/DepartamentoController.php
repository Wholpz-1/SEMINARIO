<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Departamento;
use App\Municipio;
use Illuminate\Support\Str;

class DepartamentoController extends Controller
{
    //


 public function index()
    {
         $departamento = Departamento::all();
        return view('departamento.index',compact('departamento'));
    }



public function store(Request $request)
    {
       //metodo que inserta en la base de datos y redirecciona al index
             $this->validate($request, [
            'nombre' => 'required'   
        ]);
        
        $departamento = Departamento::create([
         'departamento' => $request->get('nombre'),
         'url'=>Str::slug($request->get('nombre')),
        ]);
         

       
         return redirect()->route('departamento.index')->with('success','Registro guardado satisfactoriamente');
           }



           public function edit(Departamento $depa)
    {

    
      return view('departamento.edit',compact('depa'));


    }



            public function destroy($id)
    {
        //
        Departamento::find($id)->delete();
        return redirect()->route('departamento.index')->with('success','Registro eliminado satisfactoriamente');
        
    }





}
