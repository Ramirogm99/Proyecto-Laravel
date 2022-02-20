<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistorialController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
Route::post('/inicio{}{}',  [LoginController::class, 'comprobarUsuarioRegistrado' ]);
Route::get('/historial', function () {
    return view('registro');
});
