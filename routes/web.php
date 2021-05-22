<?php

use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\SalidaController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\UserController;


Route::get('/', function(){
    return view('auth.login');
});
Route::get('/inicio', function(){
    return view('inicio');
});

//Test route
Route::get('/test', function () {
    phpinfo();
});

//Producto routes
//Route::get('/productos/{id}/estado/{estado}', 'App\Http\Controllers\ProductoController@cambiar_estado')->name('cambiar_estado');
Route::get('/productos/{id}/estado/{estado}', [ProductoController::class, 'cambiar_estado']);
Route::get('movimientos', [Productocontroller::class, 'indexinv']);
Route::resource('productos', ProductoController::class);


Route::get('/productos/{id}/prediccionProducto', [SalidaController::class, 'prediccion']);
Route::get('reportesPrediccion', [SalidaController::class, 'reportesPrediccion']);
Route::get('inicio', [SalidaController::class, 'inicio']);

Route::resource('salidas', SalidaController::class);
Route::resource('entradas', EntradaController::class);

//Usuario routes
Route::get('/usuarios/{id}/password', [UserController::class, 'editpass']);
Route::put('/usuarios/{id}/password', [UserController::class, 'updatepassword']);
Route::resource('usuarios', UserController::class);
