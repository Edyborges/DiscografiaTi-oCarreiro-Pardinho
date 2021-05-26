<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FaixaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AlbumController::class, 'index']);
Route::get('/album/albuns', [AlbumController::class,'getAlbuns']);
Route::get('/album/create', [AlbumController::class, 'create']);
Route::post('albuns', [AlbumController::class, 'store']);
Route::get('/album/edit/{id}', [AlbumController::class, 'edit']);
Route::put('/album/update/{id}', [AlbumController::class, 'update']);
Route::get('/album/{id}', [AlbumController::class, 'detalhe_album']);
Route::delete('/albuns/{id}',[AlbumController::class, 'destroy']);



//Rotas de faixas

Route::get('/faixa/faixas', [FaixaController::class,'getFaixas']);
Route::get('/faixa/create', [FaixaController::class, 'create']);
Route::post('faixas', [FaixaController::class, 'store']);
Route::get('/faixa/edit/{id}', [FaixaController::class,'edit']);
Route::put('/faixa/update/{id}', [FaixaController::class, 'update']);
Route::delete('/faixas/{id}',[FaixaController::class, 'destroy']);












