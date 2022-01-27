<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\VentasController;




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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/liz', function () {
    return 'liz';
});

// Route::get('clientes', [ClientesController::class, 'index']);

Route::resource('clientes', ClientesController::class);
Route::resource('productos', ProductosController::class);
Route::resource('ventas', VentasController::class);

