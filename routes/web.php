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

use LaraDex\Http\Controllers\TrainerControlller;

Route::get('/', function () {
    return view('welcome');
});
//get->pasar parametros por url
//post->pasar parametros/datos por formulario
Route::get('prueba/{name}','PruebaController@prueba');//Usar una ruta hacia un controlador

Route::resource('trainers','TrainerControlller');//asignar ruta y controlador para acceder a todos sus metodos/Resource

// Route::get('/name/{name}/lastname/{lastname?}',function($name,$lastname='null'){//datos enviados por get/default
//     return 'Hola soy: '.$name .$lastname;
// });

// Route::get('/mi_primer_ruta', function () {
//     return 'Hello World, esta es mi primera ruta';
// });
