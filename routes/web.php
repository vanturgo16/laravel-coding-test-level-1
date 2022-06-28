<?php

use App\Http\Controllers\authController;
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

Route::get('login', [authController::class,'login'])->name('login');
Route::get('logout', [authController::class,'logout']);
Route::post('signup', [authController::class,'signup']);
Route::post('postlogin', [authController::class,'postLogin']);

Route::group(['middleware'=>'auth'],function() {
    Route::get('events', [eventWebController::class,'index']);
    Route::post('events', [eventWebController::class,'index']);
    Route::get('events/create', [eventWebController::class,'create'])->middleware(['checkRole:admin']);
    Route::post('events/store', [eventWebController::class,'store'])->middleware(['checkRole:admin']);
    Route::post('events/delete', [eventWebController::class,'delete'])->middleware(['checkRole:admin']);
    Route::post('events/update', [eventWebController::class,'update'])->middleware(['checkRole:admin']);
    Route::get('events/{id}/edit', [eventWebController::class,'edit'])->middleware(['checkRole:admin']);

    Route::get('external', [externalController::class,'index']);
});
