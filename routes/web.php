<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\Faixa;
use App\Http\Controllers\FaixaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AlbumController::class, 'index']);

Route::get('/album/albuns', [AlbumController::class,'getAlbuns']);

Route::get('/album/create', [AlbumController::class, 'create']);

Route::get('/album/{id}', [AlbumController::class, 'show']);

Route::get('/album/update', [AlbumController::class, 'update']);

Route::post('albuns', [AlbumController::class, 'store']);

//Rotas de faixas

Route::get('/faixa/create', [FaixaController::class, 'create']);


Route::get('/faixa/faixas', [FaixaController::class,'getFaixas']);

Route::post('faixas', [FaixaController::class, 'store']);





