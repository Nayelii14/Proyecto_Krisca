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
