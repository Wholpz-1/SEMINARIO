<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Cita;
use App\Sucursal;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DatosController extends Controller
{
    //


 public function index()
    {   
        $sucursals =Sucursal::all();
        $fecha1=[];
        $fecha2=[];
        return view('datos.index',compact('sucursals','fecha1','fecha2'));
    }


    public function fecha(Request $request)
    {     

             
        $fecha1v=$request->get('fecha1');
        $fecha2v=$request->get('fecha2');

        $fecha1=Carbon::parse($request->get('fecha1'))->format('d-m-yy');
        $fecha2=Carbon::parse($request->get('fecha2'))->format('d-m-yy');

        $sucursals =$datos2->where('fecha','>=',$fecha1v)->where('fecha2','<=',$fecha2v)->get();


        dd($sucursals);

        return view('datos.index',compact('sucursals','fecha1','fecha2'));
    }


    public function datos(Sucursal $sucursal){


        $cita=$sucursal->citas;
        $solicitada= $cita->where('estado','=','Solicitada');
        $cancelada= $cita->where('estado','=','Cancelada');
        $terminada= $cita->where('estado','=','Terminada');


        return view('datos.datos',compact('sucursal','solicitada','cancelada','terminada'));


    }









}
