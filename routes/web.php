<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

// Página de "inicio"
Route::get('/', function () {
    return '<h1>Página de Inicio</h1>';
});

// Página de "acerca de"
Route::get('/acerca-de', 'AcercadeController@index');

Route::get('/posts', 'PostController@index');
?>
