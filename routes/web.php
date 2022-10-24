<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductosController;


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

Route::name('lista_productos')->get('/',[ProductosController::class, 'productos']);


/*************************************Ruta detale ***********************************************/
Route::name('detalle')->get('detalle/{id_categoria}',[ProductosController::class, 'detalle']);

/********************************************** Alta **************************************************/
Route::name('alta')->get('alta',[ProductosController::class, 'alta']);
Route::name('registrar')->post('registrar',[ProductosController::class, 'registrar']);

/******************************************** Editar *************************************************/
Route::name('editar')->get('editar/{id_categoria}',[ProductosController::class, 'editar']);
Route::name('salvar')->put('salvar/{id_categoria}',[ProductosController::class, 'salvar']);

/*********************************************** Borrar **********************************************/
Route::name('borrar')->get('borrar/{id_categoria}',[ProductosController::class, 'borrar']);

