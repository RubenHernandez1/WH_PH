<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuardarMensajeController;
use App\Http\Controllers\LeerMensajeController;

Route::get('/', function () {
    return view('index');
});


Route::get('/mensajes', [LeerMensajeController::class, 'leer']);
Route::post('/guardar', [GuardarMensajeController::class, 'guardar']);
