<?php

namespace App\Http\Controllers;
 


use Illuminate\Http\Request;
use App\User;
use App\Rol;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    //


 public function index()
    {
         $usuarios = User::all();
        return view('usuarios.index',compact('usuarios'));
    }



public function edit(User $usua)
    {
       
        $rols= Rol::all();
      return view('usuarios.edit',compact('usua', 'rols'));


    }



    public function update(User $usua, Request $request){


        $rols= Rol::all();

        $usua->sucursal_id= $request->get('livesearch');
        $usua->rol_id= $request->get('rol');
        $usua->email= $request->get('correo');

        if($request->get('contra') != null){
        $usua->password=Hash::make($request->get('contra'));
        }

        $usua->save();

         return view('usuarios.edit',compact('usua', 'rols'));

    }






}
