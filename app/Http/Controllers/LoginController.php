<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

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
    public function comprobarUsuarioRegistrado($email, $password)
    {
        $usuarios = Usuario::findAll();
        foreach ($usuarios as $usuario) {
            if ($usuario->email == $email && $usuario->password == $password) {
                session_start();
                $_SESSION["logged"] = true;
                $_SESSION["user_id"] = $usuario->id;
                return view('dashboard', ['nombre' => $usuario->name]);
            } else {
                return view('login');
            }
        }
    }
}
