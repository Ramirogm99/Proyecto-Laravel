<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DashboardController;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Actualiza los datos del usuario en la base de datos
     * Devuelve el método "index($user_id)" del dashboard
     */
    public function guardarUsuario($datosUsuario)
    {
        Usuario::table('users')->where('id', $datosUsuario->id)->update(['name' => $datosUsuario->name, 'surname' => $datosUsuario->surname]);
        return DashboardController::index($datosUsuario->id);
    }

    /**
     * Devuelve el método "index($user_id)" del dashboard
     */
    public function volver($user_id)
    {
        return DashboardController::index($user_id);
    }
}
