<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
   function plantilla(){
        return view('plantilla')
    }

    function login(Request $request){
        $usuario = $request->('inusuario')
        $contraseña = $request->('incontraseña');

        
        return view('login')
    }
}