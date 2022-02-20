<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fichaje;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\DB;


class HistorialController extends Controller
{
    /**
     * Devuelve la vista historial con los ultimos 20 fichajes del usuario registrado
     */
    public function index()
    {
        session_start();
        $user_id = $_SESSION["user_id"];
        
        $fichajes = DB::table('file_in')
            ->join('users', 'file_in.user_id', '=', 'users.id')
            ->join('workplaces', 'file_in.workplace_id', '=', 'workplaces.id')
            ->select('users.user', 'workplaces.name','file_in.entry_date','file_in.departure_date')
            ->where('file_in.user_id', $user_id)
            ->orderByDesc("file_in.entry_date")
            ->take(20)
            ->get();
    
        return view('registro', ['fichajes'=>$fichajes]);
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
        return redirect()->route('dashboard');
    }
}
