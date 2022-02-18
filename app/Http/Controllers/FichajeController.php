<?php

namespace App\Http\Controllers;

use App\Models\Fichaje;
use Illuminate\Http\Request;

class FichajeController extends Controller
{
    /**
     * Comprueba si el usuario ha fichado y dependiendo de esto se crea un registro o se actualiza el mismo
     */
    public function fichar($worplace_id)
    {
        $user_id = $_SESSION["user_id"];
        $fichaje = Fichaje::select("SELECT * FROM file_in WHERE user_id = $user_id ORDER BY id DESC LIMIT 1");
        $fechaActual = date("Y-m-d H:i:s");

        if (isset($fichaje->departure_date) && is_null($fichaje->departure_date)) { // Entrada
            $fichaje = array(
                'entry_date' => $fechaActual,
                'user_id' => $user_id,
                'workplace_id' => $worplace_id
            );

            Fichaje::insert($fichaje);
        } else { // Salida
            $fichaje->departure_date = $fechaActual;
            $fichaje->save();
        }
    }

    /**
     * Devuelve el método "index($user_id)" del dashboard
     */
    public function volver()
    {
        $user_id = $_SESSION["user_id"];
        return DashboardController::index($user_id);
    }
}
