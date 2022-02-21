<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistorialController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FichajeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LoginController::class, 'index'])->name('login');

Route::post('/inicio', [LoginController::class, 'comprobarUsuarioRegistrado'])->name('login.comprobarUsuario');

Route::get('/dashboard', [DashboardController::class , 'index'])->name('dashboard');

Route::get('/historial', [HistorialController::class , 'index'])->name('historial');

Route::get('/fichar', [FichajeController::class, 'fichar'])->name('fichar');

Route::get('/salir', [DashboardController::class, 'LogOut'])->name('logout');
