<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeraController;

Route::get('/', [TeraController::class,'index']);
Route::post('/',[TeraController::class,'create']);
