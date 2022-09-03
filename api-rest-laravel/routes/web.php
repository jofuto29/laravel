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

/*si cambiamos la ruta, pues oviamente  esta ya no seria: http://localhost/cursoMaster/api-rest-laravel/public/*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/welcome', function () {
    return "<h1> hola mundo <h1>";
});

Route::get('/pruebas/{nombre?}', function ($nombre = null) {
    $texto = "<h2>mostrando texto desde una ruta</h2>";
    $texto .= "nombre: ".$nombre;

    return view('pruebas',array(
        'texto' => $texto
    ));
});

Route::get('/animales', 'PruebasController@index');