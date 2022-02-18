<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fichaje;
use App\Http\Controllers\DashboardController;

class HistorialController extends Controller
{
    /**
     * Devuelve la vista historial con los ultimos 20 fichajes del usuario registrado
     */
    public function index()
    {
        $user_id = $_SESSION["user_id"];
        $historial = Fichaje::table('file_in')->where('user_id', '=', $user_id)->take(20)->get();
        return view('historial', ['historial' => $historial]);
    }

    /**
     * Recibe un array con los datos a modificar y lo modifica en la base de datos
     * Devuelve el método index del controlador Historial
     */
    public function editar($historial)
    {
        $user_id = $_SESSION["user_id"];
        $historial->user_id = $user_id;
        $historial->save();
        return HistorialController::index();
    }

    /**
     * Recibe la id del fichaje a borrar y lo borra en la base de datos
     * Devuelve el metodo index del dashboard
     */
    public function borrar($id)
    {
        $user_id = $_SESSION["user_id"];
        Fichaje::deleteFichaje($id);
        return DashboardController::index($user_id);
    }

    /**
     * Devuelve el metodo index del dashboard
     */
    public function volver()
    {
        $user_id = $_SESSION["user_id"];
        return DashboardController::index($user_id);
    }
}
