<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UsuarioController::class,'index']);

Route::get('/users/create', [UsuarioController::class,'create']);
