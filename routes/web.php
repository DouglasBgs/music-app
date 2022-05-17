<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AlbunsController;
use \App\Http\Controllers\MusicasController;
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

Route::get('/', [Controller::class, 'index']);

Route::get('/albuns', [AlbunsController::class, 'index']);

Route::get('/albuns/criar', [AlbunsController::class, 'create']);

Route::post('/albuns/salvar', [AlbunsController::class, 'store']);

Route::get('/albuns/consulta/{id}', [AlbunsController::class, 'show']);

Route::get('/albuns/editar/{id}', [AlbunsController::class, 'edit']);

Route::put('/albuns/salvar/{id}', [AlbunsController::class, 'update']);

Route::get('/musics/', [MusicasController::class, 'index']);

Route::get('/musicas/adicionar/{albumId}', [MusicasController::class, 'create']);

Route::post('/musicas/salvar/{albumId}', [MusicasController::class, 'store']);
