<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovilController;
use App\Http\Controllers\ReparacionController;


Route::resource('moviles',MovilController::class,['except'=>['create','edit']]);
Route::resource('reparaciones',ReparacionController::class,['except'=>['create','edit']]);