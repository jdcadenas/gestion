<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\UserbyfieldController;

Route::resource('Userbyfield', UserbyfieldController::class,["except"=>["create","edit"]]);