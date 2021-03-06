<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /**
     * Devuelve la vista principal login
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Comprueba si el usuario está registrado en la base de datos
     */
    public function comprobarUsuarioRegistrado(Request $request)
    {
        $usuario = DB::table('users')->where('email', $request->email)->where('password', $request->password)->first(['id','user']);
        //foreach ($usuarios as $usuario) {
            if (isset($usuario)) {
                
                session_start();
                $_SESSION["logged"] = true;
                $_SESSION["user_id"] = $usuario->id;
                $_SESSION["user_name"]=$usuario->user;
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('login')->with('Success', 'Centro eliminado correctamente');
            }
       // }
    }
}
