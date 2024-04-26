<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
Route::post('/loginmoodle', [App\Http\Controllers\LoginMoodleController::class, 'authenticate'])->name('loginmoodle');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categoriastree', [App\Http\Controllers\CategoriesController::class, 'index'])->name('categoria');
Route::get('/usuarioslist', [App\Http\Controllers\GetusersController::class, 'index'])->name('usuarios');
Route::get('/usertoken', [App\Http\Controllers\UserTokenController::class, 'index'])->name('token');

//Route::resource('photos', PhotoController::class)->withTrashed();
// Route::get('/respuesta', [App\Http\Controllers\api\UserbyfieldController::class, 'show'])->name('respuesta');

// Route::get('/home', function() {
//     return view('home');
// })->name('home')->middleware('auth');