<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function edit()
    {   
        session_start();
        $user_id = $_SESSION["user_id"];
        $usuario = DB::table('users')->where('id', $user_id)->first(['user']);
        $_SESSION["user_name"]=$usuario->user;
        return view('editarUsuario', ['user_name'=>$_SESSION['user_name']]);
    }
    
    /**
     * Actualiza los datos del usuario en la base de datos
     * Devuelve el método "index($user_id)" del dashboard
     */

    public function update(){
        session_start();
        $user_name=$_POST('$user_name');
        DB::table('users')->where('id', $_SESSION["user_id"])->update(['user' => $user_name]);
        return redirect()->route('dashboard');
    }

    public function guardarUsuario($datosUsuario)
    {
        session_start();
        DB::table('users')->where('id', $_SESSION["user_id"])->update(['user' => $datosUsuario->user]);
        return DashboardController::index($datosUsuario->id);
    }

    /**
     * Devuelve el método "index($user_id)" del dashboard
     */

    public function volver()
    {
        return redirect()->route('dashboard');
    }
}
