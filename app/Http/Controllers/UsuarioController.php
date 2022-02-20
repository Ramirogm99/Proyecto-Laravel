<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    /**
     * Actualiza los datos del usuario en la base de datos
     * Devuelve el método "index($user_id)" del dashboard
     */

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
