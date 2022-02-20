<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Fichaje;
use App\Models\Usuario;

class DashboardController extends Controller
{
    
    /**
     * Devuelve los los últimos 5 registros de los fichajes del usuario
     */
    public static function index()
    {
        
        $user_id = $_SESSION["user_id"];
        $usuarios = Fichaje::select("SELECT * FROM file_in WHERE user_id = $user_id ORDER BY entry_date DESC LIMIT 5");
        return $usuarios;
    }

    /**
     * Devuelve la vista usuario con los datos del usuario
     */
    public function datosUsuario()
    {
        $user_id = $_SESSION["user_id"];
        $usuario = Usuario::table('users')->where('id', '=', $user_id);
        return view('usuario', ['usuario' => $usuario]);
    }

    /**
     * Devuelve una vista con el nombre de todos los centros
     */
    public function fichar()
    {
        $centros = Usuario::table('workplaces')->select('name');
        return view('fichar', ['centros' => $centros]);
    }

    /**
     * Carga el metodo index del Controlador del historial
     */
    public function mostrarHistorial()
    {
        $user_id = $_SESSION["user_id"];
        return DashboardController::index($user_id);
    }
}
