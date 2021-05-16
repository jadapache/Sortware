<?php

use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
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
/*
if (View::exists('vista1')){
    Route::get('/', function () {
        return view('vista1', ['nombre'=>'Sergio']);
    });
}else{
    Route::get('/', function () {
        return 'la vista solicitada no existe';
    });
}*/

//Route::get('/', 'App\Http\Controllers\InicioController@index');

//Route::resource('/', 'App\Http\Controllers\Productocontroller');
/*
Route::get('/', function(){
    return view('vista1', ['nombre'=>'Sergio']);
});*/

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

Route::get('/usuarios/{id}/password', 'App\Http\Controllers\Usercontroller@editpass')->name('editpass');
Route::get('/productos/{id}/prediccionProducto', 'App\Http\Controllers\SalidaController@prediccion')->name('prediccion'); 
Route::get('/inicio', 'App\Http\Controllers\Salidacontroller@inicio')->name('inicio');
Route::get('/reportesPrediccion', 'App\Http\Controllers\Salidacontroller@reportesPrediccion')->name('reportesPrediccion');
Route::get('/index', 'App\Http\Controllers\Salidacontroller@regresionLineal')->name('regresionLineal'); 

Route::put('/usuarios/{id}/password', 'App\Http\Controllers\Usercontroller@updatepassword')->name('updatepassword');
Route::get('/productos/{id}/estado/{estado}', 'App\Http\Controllers\ProductoController@cambiar_estado')->name('cambiar_estado');


Route::resource('productos', 'App\Http\Controllers\Productocontroller');


Route::resource('usuarios', 'App\Http\Controllers\Usercontroller');
Route::resource('salidas', 'App\Http\Controllers\Salidacontroller');
Route::resource('entradas', 'App\Http\Controllers\Entradacontroller');


Route::get('movimientos', 'App\Http\Controllers\Productocontroller@indexinv')->name('indexinv');


//Route::get('movimientos', 'App\Http\Controllers\SalidasController');

//Route::resource('movimientos', 'App\Http\Controllers\InvController');


// Route::get('/movimientos', function(){
//     return view('inventario.movimiento');
// });
Route::get('/usuarios/editpass', function(){
    return view('password');
});


Route::get('/dash/crud/create', function(){
    return view('crud.create');
});
