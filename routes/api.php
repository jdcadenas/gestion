<?php

use App\Http\Controllers\api\GetCategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\UserbyfieldController;

Route::resource('userbyfield', UserbyfieldController::class,["except"=>["create","edit"]]);
Route::resource('getcategories', GetCategoriesController::class,["except"=>["create","edit"]]);