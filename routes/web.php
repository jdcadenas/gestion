<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/respuestarespuesta', [App\Http\Controllers\api\UserbyfieldController::class, 'show'])->name('respuesta');
Route::get('/usuarios/ingresar', [App\Http\Controllers\api\UserallController::class, 'index'])->name('usuarios');;