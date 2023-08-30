<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function autenticar(Request $request){
        $mensajes = [
            'required' => 'El campo :attribute es obligatorio.',
            'email'    => 'El :attribute no es una dirección de correo válida.'
        ];
        $request->validate([
            'dni'     => 'required',
            'password'  => 'required'
        ], $mensajes);


        $credentials = $request->only('dni', 'password');

        if(Auth::attempt($credentials)){
            return redirect()->intended('/');
        }
        
        return redirect('login')->with('error', 'Datos inválidos');
    }
    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect('login');
    }
}
