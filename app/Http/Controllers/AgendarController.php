<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\User;
use App\Servicio;
use App\Sucursal;
use Illuminate\Support\Str;

class AgendarController extends Controller
{
    //


 public function index(User $user, Servicio $servicio)
    {
         
        return view('agendar.index',compact('user','servicio'));
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



    public function getSucursal(Request $request){

        $sucursal = [];

        if($request->has('q')){
            $search = $request->q;
            $sucursal =Sucursal::select("id", "sucursal")
                    ->where('sucursal', 'LIKE', "%$search%")
                    ->get();
        }else{

            $sucursal=Sucursal::all();
        }
        return response()->json($sucursal);
   }

}
