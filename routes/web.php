<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidosController;

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
})->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('administrador/dashboardadmin');
    })->name('dashboard');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('administrador/dashboardadmin');
//     })->name('dashboard');
// });



/* Rutas pedido  cliente pedido*/ 
Route::get('domicilio/crearpedido',[App\Http\Controllers\PedidosController::class,'crearpedido'])->name('domicilio.crearpedido');
Route::post('domicilio/verificar',[App\Http\Controllers\PedidosController::class,'verificarDocumento'])->name('domicilio.create');
Route::post('domicilio/guardar',[App\Http\Controllers\PedidosController::class,'store'])->name('domicilio.store');
Route::get('domicilio/misdomicilios',[App\Http\Controllers\PedidosController::class,'mostrarPedidos'])->name('cliente.pedidos');



/* Rutas pedido  admin */

Route::post('pedido/guardar',[App\Http\Controllers\PedidosController::class,'guardardatos'])->name('pedido.guardar');



