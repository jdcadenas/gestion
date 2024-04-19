<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categorias', [App\Http\Controllers\CategoriesController::class, 'index'])->name('categoria');

// Route::get('/respuesta', [App\Http\Controllers\api\UserbyfieldController::class, 'show'])->name('respuesta');