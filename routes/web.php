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

Route::get('/', function () {
    return 'welcome';
});

Route::get('first', [personaController::class, 'first'])->name('Primer Método');
Route::get('second', [personaController::class, 'second'])->name('Segundo Método');
Route::get('third', [personaController::class, 'third'])->name('Tercer Método');
Route::get('fourth', [personaController::class, 'fourth'])->name('Cuarto Método');
Route::get('fifth', [personaController::class, 'fifth'])->name('Quinto Método');

Route::get('/api/persona', 'personaController@index');
Route::post('/api/persona/guardar', 'personaController@store');
Route::put('/api/persona/actualizar', 'personaController@update');
Route::delete('/api/persona/eliminar', 'personaController@destroy');

