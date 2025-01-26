<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\PedidoController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('register',[UserController::class,'register']);
//Route::get('/consultas', [ConsultaController::class, 'consultas']);
Route::post('/pedidos', [PedidoController::class, 'store']);

//consultas


Route::get('/consultas/pedidos-usuario/{id}', [ConsultaController::class, 'pedidosPorUsuario']);
Route::get('/consultas/detalles-pedidos', [ConsultaController::class, 'detallesPedidos']);
Route::get('/consultas/pedidos-rango', [ConsultaController::class, 'pedidosEnRango']);
Route::get('/consultas/usuarios-nombre-R', [ConsultaController::class, 'usuariosConR']);
Route::get('/consultas/total-pedidos-usuario/{id}', [ConsultaController::class, 'totalPedidosUsuario']);
Route::get('/consultas/pedidos-ordenados', [ConsultaController::class, 'pedidosOrdenados']);
Route::get('/consultas/suma-total', [ConsultaController::class, 'sumaTotal']);
Route::get('/consultas/pedido-mas-economico', [ConsultaController::class, 'pedidoMasEconomico']);
Route::get('/consultas/pedidos-agrupados', [ConsultaController::class, 'pedidosAgrupados']);