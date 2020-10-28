<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Servicio;
use App\Sucursal;
use App\Ventanilla;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

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



    public function fase2(Request $request, User $user, Servicio $servicio){
       
        $sucursal=Sucursal::find($request->get('livesearch'));   
      


        return view('agendar.fase2',compact('user','servicio','sucursal'));
    }


    public function fase3(Request $request, User $user, Servicio $servicio){
        $ventanilla= Ventanilla::find($request->get('ventanilla'));
        $sucursal=Sucursal::find($request->get('sucursal_id'));  

        $fecha=Carbon::parse($request->get('fecha'))->format('d-m-yy');

        return view('agendar.fase3',compact('user','servicio','sucursal','ventanilla','fecha'));
    }

}
