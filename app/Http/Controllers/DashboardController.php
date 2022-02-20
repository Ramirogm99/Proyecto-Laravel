<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    
    /**
     * Devuelve los los últimos 5 registros de los fichajes del usuario
     */
    public static function index()
    {
        session_start();
        $user_id = $_SESSION["user_id"];
        
        //$usuarios = Fichaje::join('users','users.user_id', '=' ,'file_in.user_id')->where('user_id', $user_id)->orderByDesc("entry_date")->take(5)->get(['users.id','workplaces.id','entry_date','departure_date']);
        $fichajes = DB::table('file_in')
            ->join('users', 'file_in.user_id', '=', 'users.id')
            ->join('workplaces', 'file_in.workplace_id', '=', 'workplaces.id')
            ->select('users.user', 'workplaces.name','file_in.entry_date','file_in.departure_date')
            ->where('file_in.user_id', $user_id)
            ->orderByDesc("file_in.entry_date")
            ->take(5)
            ->get();
            
        return view('dashboard', ['fichajes'=>$fichajes], ['user_name'=>$_SESSION['user_name']]);
    }

    /**
     * Devuelve la vista usuario con los datos del usuario
     */

   /* public function datosUsuario()
    {
        $user_id = $_SESSION["user_id"];
        $usuario = Usuario::table('users')->where('id', '=', $user_id);
        return view('usuario', ['usuario' => $usuario]);
    }*/

    /**
     * Devuelve una vista con el nombre de todos los centros
     */
    public function fichar()
    {
        $centros = DB::table('workplaces')->select('name');
        return view('fichar', ['centros' => $centros]);
    }

    /**
     * Carga el metodo index del Controlador del historial
     */

   /* public function mostrarHistorial()
    {
        $user_id = $_SESSION["user_id"];
        return DashboardController::index($user_id);
    }*/

    public function LogOut()
    {
        session_start();
        session_destroy();
        return redirect()->route('login');
    }
}
