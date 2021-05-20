<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\Faixa;
use App\Http\Controllers\FaixaController;
use App\Models\Albuns;
use Illuminate\Support\Facades\Route;

Route::get('/', [AlbumController::class, 'index']);

Route::get('/album/albuns', [AlbumController::class,'getAlbuns']);

Route::get('/album/create', [AlbumController::class, 'create']);

Route::get('/album/{id}', [AlbumController::class, 'detalhe_album']);

Route::put('/update/{id}', [AlbumController::class, 'update']);

Route::post('albuns', [AlbumController::class, 'store']);

Route::delete('/albuns/{id}',[AlbumController::class, 'destroy']);

Route::get('edit/{id}', [AlbumController::class, 'edit']);
//Rotas de faixas


Route::get('/faixa/create', [FaixaController::class, 'create']);


Route::get('/faixa/faixas', [FaixaController::class,'getFaixas']);

Route::post('faixas', [FaixaController::class, 'store']);

Route::delete('/faixas/{id}',[FaixaController::class, 'destroy']);











