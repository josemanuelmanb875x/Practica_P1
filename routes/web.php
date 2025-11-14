<?php

use Illuminate\Support\Facades\Route;
// 1. Importa tu nuevo controlador
use App\Http\Controllers\PaginaController;

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

// 2. Ruta Estática de Bienvenida
// Cuando alguien visite /bienvenida, Laravel llamará al método 'mostrarBienvenida'
// dentro de 'PaginaController'.
Route::get('/bienvenida', [PaginaController::class, 'mostrarBienvenida']);

// 3. Ruta Dinámica de Saludo
// El {nombre} entre llaves significa que es un parámetro variable.
// Laravel llamará al método 'mostrarSaludo' y le pasará lo que venga en {nombre}.
Route::get('/saludo/{nombre}', [PaginaController::class, 'mostrarSaludo']);
