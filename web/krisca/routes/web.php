<?php

use Illuminate\Support\Facades\Route;

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


Route::view("/","home")->name("home");
Route::view("/explora","explora")->name("explora");
Route::view("/cuenta","cuenta")->name("cuenta");
Route::view("/error_pass","error_pass")->name("error_pass");
Route::view("/registrar_cliente","registrar_cliente")->name("registrar_cliente");
Route::view("/inicio_sesion","inicio_sesion")->name("inicio_sesion");
Route::view("/crear_ropa","crear_ropa")->name("crear_ropa");
Route::view("/nosotros","nosotros")->name("nosotros");
Route::view("/admin","admin")->name("admin");
Route::view("/ag_usuario","ag_usuario")->name("ag_usuario");
Route::view("/crear_producto","crear_producto")->name("crear_producto");
Route::view("/a_e_producto","a_e_producto")->name("a_e_producto");
Route::view("/ajuste_stock","ajuste_stock")->name("ajuste_stock");
Route::view("/crear_categoria","crear_categoria")->name("crear_categoria");
Route::view("/ver_categoria","ver_categoria")->name("ver_categoria");