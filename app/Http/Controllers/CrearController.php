<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class CrearController extends Controller
{
    public function crearUsuario(Request $request){

        if ($request->isMethod('get')){
            $request->validate([
                "nombre"=> "string|required",
                "usuario"=> "string|required",
                "email"=> "string|required",
                "contraseña"=> "string|required",
            ]);

            $con = Hash::make($request->input('contrasena'));
    
            $usuario = new User();
    
            $usuario->nombre = $request->input('nombre');
            $usuario->usuario = $request->input('usuario');
            $usuario->email = $request->input('email');
            $usuario->contraseña = $con;
            $usuario->save();
    
            return view('login');
        }elseif ($request->isMethod('post')){    
            $con = Hash::make($request->input('contrasena'));
    
            $usuario = new User();
    
            $usuario->nombre = $request->input('nombre');
            $usuario->usuario = $request->input('usuario');
            $usuario->email = $request->input('email');
            $usuario->contraseña = $con;
            $usuario->save();
    
            return view('login');
        }
    }
}
