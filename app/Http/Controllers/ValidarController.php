<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class ValidarController extends Controller
{
    public function ingresar(Request $request)
    {
        if ($request->isMethod("get")) {
            $usuario = User::where("usuario", $request->input('usuario'))->first();
            if ($usuario) {
                if ($usuario->usuario == $request->input('usuario') && Hash::check($request->input('contrasena', $usuario->contrasena), $usuario->contrasena)) {
                    return view('recordatorios',['usuario'=>$usuario]);
                }else{
                    return view('login');
                }
            }
            
        }elseif ($request->isMethod('post')) {
            $usuario = User::where("usuario", $request->input('usuario'))->first();
            if ($usuario) {
                if ($usuario->usuario == $request->input('usuario') && $usuario->contrasena == $request->input('contrasena')) {
                    return view('recordatorios',['usuario'=>$usuario]);
                }else{
                    return view('login');
                }
            } 
        }
    }
}
