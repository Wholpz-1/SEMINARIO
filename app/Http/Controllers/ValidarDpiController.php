<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\User;
use App\Servicio;
use App\Cita;
use Illuminate\Support\Str;

class ValidarDpiController extends Controller
{
    //


 public function validar(Request $request)
    {
    	 $user=User::where("dpi","=",$request->get('dpi'))->first();
         $servicio = Servicio::all();

         if($user!=null){
         	
			return view('tramites',compact('servicio','user'));
		

         }else{
	       return view('validacion',compact('servicio','user')); 
         }

        




    }


         

		 public function servicio(User $user, Servicio $servicio){

		          return view('plantilla',compact('servicio','user'));

		         }



                  public function cita(Request $request){
                     $user=[];
                    $cita=Cita::find($request->get('cita'));
                    if ($cita!=null) {
                        # code...
                        $user=$cita->user;
                    }
                    
                  return view('estadocita',compact('cita','user'));

                 }


         





}
