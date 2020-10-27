<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\User;
use App\Servicio;
use App\Sucural;
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

      $search = $request->search;

      if($search == ''){
         $sucursals = Sucursal::orderby('sucursal','asc')->select('id','sucursal')->limit(10)->get();
      }else{
         $sucursals = Sucursal::orderby('sucursal','asc')->select('id','sucursal')->where('sucursal', 'like', '%' .$search . '%')->limit(5)->get();
      }

      $response = array();
      foreach($sucursals as $sucursal){
         $response[] = array(
              "id"=>$sucursal->id,
              "text"=>$sucursal->name
         );
      }

      echo json_encode($response);
      exit;
   }

}
