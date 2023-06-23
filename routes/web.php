<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PersonaController;
Route::resource('personas', PersonaController::class);
Route::get('personas/nombre/{nombre}', [PersonaController::class, 'buscarPorNombre']);
Route::get('personas/{persona}/fiador', [PersonaController::class, 'suFiador']);
Route::get('personas/{persona}/prestamos', [PersonaController::class, 'showConPrestamo']);

use App\Http\Controllers\PrestamoController;
Route::resource('prestamos', PrestamoController::class);

use App\Http\Controllers\FiadorController;
Route::resource('fiadors', FiadorController::class);
