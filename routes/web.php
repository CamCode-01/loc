<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/ho', function () {
    return view('welcome');
});

Route::get('/home',[App\Http\Controllers\ClientController::class,'home']);
Route::get('/apropos',[App\Http\Controllers\ClientController::class,'apropos']);
Route::get('/paiement',[App\Http\Controllers\ClientController::class,'paiement']);
Route::get('/cars',[App\Http\Controllers\ClientController::class,'cars']);
Route::get('/contacts',[App\Http\Controllers\ClientController::class,'contacts']);
Route::get('/services',[App\Http\Controllers\ClientController::class,'services']);
Route::get('/details',[App\Http\Controllers\ClientController::class,'details']);