<?php

namespace App\Http\Controllers;

use App\Models\Fichaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FichajeController extends Controller
{
    public function index(){
        return view('fichaje');
    }
    /**
     * Comprueba si el usuario ha fichado y dependiendo de esto se crea un registro o se actualiza el mismo
     */
    public function fichar(Request $request)
    {
        session_start();

        $workplace_id = $request->centro_id;

        $user_id = $_SESSION["user_id"];
        //$fichaje = Fichaje::select("SELECT file_in.* , name , users.id FROM file_in , users WHERE user_id =  ORDER BY file_in.id DESC LIMIT 1");
        $fichaje = DB::table("file_in")
            ->where('user_id', $user_id)
            ->where('workplace_id', $workplace_id)
            ->orderByDesc('user_id')
            ->first(['entry_date', 'departure_date']);
        $fechaActual = date("Y-m-d H:i:s");

            if (!empty($fichaje->departure_date)) { // Entrada
            $fichaje = array(
                'entry_date' => $fechaActual,
                'departure_date' => "",
                'user_id' => $user_id,
                'workplace_id' => $workplace_id,
            );
            DB::table('file_in')->insert($fichaje);

        } else { // Salida

            DB::table('file_in')->where('workplace_id', $workplace_id)->update(['departure_date' => $fechaActual]);
        }
        return redirect()->route('registro');
    }

    /**
     * Devuelve el método "index($user_id)" del dashboard
     */
    public function volver()
    {
        return redirect()->route('dashboard');
    }
}
