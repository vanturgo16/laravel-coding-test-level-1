<?php

use App\Http\Controllers\eventWebController;
use App\Http\Controllers\externalController;
use Illuminate\Support\Facades\Route;

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

Route::get('events', [eventWebController::class,'index']);
Route::post('events', [eventWebController::class,'index']);
Route::get('events/create', [eventWebController::class,'create']);
Route::post('events/store', [eventWebController::class,'store']);
Route::post('events/delete', [eventWebController::class,'delete']);
Route::post('events/update', [eventWebController::class,'update']);
Route::get('events/{id}/edit', [eventWebController::class,'edit']);

Route::get('external', [externalController::class,'index']);