<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::namespace('Api')->group( function(){
    Route::post('/autores', [App\Http\Controllers\AutorController::class, 'add'])->name('/autores');
    Route::get('/autores', [App\Http\Controllers\AutorController::class, 'list'])->name('/autores');
    Route::get('/autores/{id}', [App\Http\Controllers\AutorController::class, 'select'])->name('/autores/{id}');
    Route::put('/autores/{id}', [App\Http\Controllers\AutorController::class, 'update'])->name('/autores/{id}');
    Route::delete('/autores/{id}', [App\Http\Controllers\AutorController::class, 'delete'])->name('/autores/{id}');
//-----------------------------------------------------------------------------------------------------------------
    Route::post('/editoras', [App\Http\Controllers\EditoraController::class, 'add'])->name('/editoras');
    Route::get('/editoras', [App\Http\Controllers\EditoraController::class, 'list'])->name('/editoras');
    Route::get('/editoras/{id}', [App\Http\Controllers\EditoraController::class, 'select'])->name('/editoras/{id}');
    Route::put('/editoras/{id}', [App\Http\Controllers\EditoraController::class, 'update'])->name('/editoras/{id}');
    Route::delete('/editoras/{id}', [App\Http\Controllers\EditoraController::class, 'delete'])->name('/editoras/{id}');
//-----------------------------------------------------------------------------------------------------------------
    Route::post('/generos', [App\Http\Controllers\GeneroController::class, 'add'])->name('/generos');
    Route::get('/generos', [App\Http\Controllers\GeneroController::class, 'list'])->name('/generos');
    Route::get('/generos/{id}', [App\Http\Controllers\GeneroController::class, 'select'])->name('/generos/{id}');
    Route::put('/generos/{id}', [App\Http\Controllers\GeneroController::class, 'update'])->name('/generos/{id}');
    Route::delete('/generos/{id}', [App\Http\Controllers\GeneroController::class, 'delete'])->name('/generos/{id}');
//-----------------------------------------------------------------------------------------------------------------
    Route::post('/livros', [App\Http\Controllers\LivroController::class, 'add'])->name('/livros');
    Route::get('/livros', [App\Http\Controllers\LivroController::class, 'list'])->name('/livros');
    Route::get('/livros/{id}', [App\Http\Controllers\LivroController::class, 'select'])->name('/livros/{id}');
    Route::put('/livros/{id}', [App\Http\Controllers\LivroController::class, 'update'])->name('/livros/{id}');
    Route::delete('/livros/{id}', [App\Http\Controllers\LivroController::class, 'delete'])->name('/livros/{id}');
});
