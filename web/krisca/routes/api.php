<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\AjustesController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\VentasController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//PRODUCTO
Route::get("productos/get", [ProductosController::class, "getProductos"]);
Route::get("productos/filtrar", [ProductosController::class, "getFiltro"]);
Route::post("productos/post", [ProductosController::class, "crearProducto"]);
Route::post("productos/eliminar", [ProductosController::class, "eliminarProducto"]);
Route::post("productos/actualizar", [ProductosController::class, "actualizarProducto"]);

//USUARIO
Route::get("usuarios/get", [UsuariosController::class, "getUsuario"]);
Route::post("usuarios/post", [UsuariosController::class, "crearUsuario"]);
Route::post("usuarios/eliminar", [UsuariosController::class, "eliminarUsuario"]);
Route::post("usuarios/actualizar", [UsuariosController::class, "actualizarUsuario"]);

//VENTAS
Route::get("ventas/get", [VentasController::class, "getVenta"]);
Route::get("ventas/filtro", [VentasController::class, "getDetalle"]);
Route::post("ventas/cancelar", [VentasController::class, "cancelarVenta"]);
Route::post("ventas/post", [VentasController::class, "crearVenta"]);

//AJUSTE
Route::get("ajuste/get", [AjustesController::class, "getAjusteF"]);
Route::post("ajuste/post", [AjustesController::class, "crearAjuste"]);

//CATEGORIA
Route::get("categoria/get", [CategoriasController::class, "getCategorias"]);
Route::post("categoria/crear", [CategoriasController::class, "crearCategoria"]);
Route::post("categoria/eliminar", [CategoriasController::class, "eliminarCategoria"]);
Route::post("categoria/actualizar", [CategoriasController::class, "actualizarCategoria"]);

//CLIENTE
Route::get("cliente/getId", [ClientesController::class, "getClienteId"]);
Route::get("cliente/getAll", [ClientesController::class, "getAll"]);
Route::get("cliente/getCorreo", [ClientesController::class, "getClienteCorreo"]);
Route::post("cliente/post", [ClientesController::class, "crearCliente"]);
Route::post("cliente/eliminar", [ClientesController::class, "eliminarCliente"]);
Route::post("cliente/actualizar", [ClientesController::class, "actualizarCliente"]);