<?php

use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AlbumController::class, 'index']);

Route::get('/album/create', [AlbumController::class, 'create']);

Route::get('/album/update', [AlbumController::class, 'update']);



