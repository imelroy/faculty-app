<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BusController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/",[StudentController::class,'create']);

Route::post("/studentadd",[StudentController::class,'store']);

Route::get("/bus",[BusController::class,'create']);

Route::post("/busread",[BusController::class,'store']);