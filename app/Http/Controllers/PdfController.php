<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Cita;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PdfController extends Controller
{
    //


 public function imprimir(Cita $cita){

        $fecha= Carbon::now()->format('d-m-yy'); 
        // return view('pdf.cita',compact('cita','fecha'));
        $pdf = \PDF::loadView('pdf.cita' , compact('cita','fecha') );
        return $pdf->download('imprimir.pdf');
    }


}
