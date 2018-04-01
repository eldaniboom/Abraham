<?php

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

/*Route::get('controlador','PruebaController@index');*/
/*Route::resource('/','AbrahamController');*/



Route::get('/', 'FrontEndController@index')->name('home');
Route::get('/church', 'ChurchController@create')->name('crear');
Route::get('/church/listar', 'ChurchController@listar')->name('listar');
Route::post('/church', 'ChurchController@guardar');











Route::get('nombre/{nombre}', function($nombre){
  return "Mi nombre es: ".$nombre;
});

/*Route::get('prueba', function () {
    return "hola desde web.php";
});*/

/*Route::get('hola', function () {
    return view('hola');
});*/
