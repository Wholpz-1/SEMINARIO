<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Icono;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class IconoController extends Controller
{
    //


 public function index()
    {
         $iconos = Icono::all();
        return view('iconos.index',compact('iconos'));
    }


     public function store(Request $request)
 {

            $this->validate(request(), [

    'archivo' => 'required|image|max:2048'

    ]);

        //Recibimos el archivo y lo guardamos en la carpeta storage/app/public
        $foto = request()->file('archivo')->store('public');


        $hola= pathinfo($foto, PATHINFO_FILENAME);
        $hola2= pathinfo($foto, PATHINFO_EXTENSION);



        $fotourl = '/storage/'.$hola.'.'.$hola2;

 

        $icono = Icono::create([
         'nombre' => $request->get('nombre'),
         'url'=> $fotourl,
         
        ]);

        return redirect()->route('icono.index')->with('success','Registro eliminado satisfactoriamente');
        
 }



public function destroy(Icono $icono){

            $icono->delete();

            $fotopath = str_replace('storage', 'public', $icono->url);

            Storage::delete($fotopath);

            return back();

    }



}
