<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Cita;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Str;

class VerCitaController extends Controller
{
    //


 public function index($estado)
    {   
         $cita = Cita::all();
         $id = Auth::id();
         $user=User::find($id);
         $r=$cita->where('estado','=',$estado)->where('sucursal_id','=',$user->sucursal_id);
        return view('cita.index',compact('r'));
    }



    public function update(Cita $cita, Request $request){

        $estado=$cita->estado;
        $cita->estado=$request->get('estado');
        $cita->fecha=Carbon::now();
        $cita->save();

           return redirect()->route('vercita.index',$estado);

    }






}
