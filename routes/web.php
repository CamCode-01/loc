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
/*----------------------------------------Client----------------------------------------*/
Route::get('/home',[App\Http\Controllers\ClientController::class,'home']);
Route::get('/apropos',[App\Http\Controllers\ClientController::class,'apropos']);
Route::get('/paiement',[App\Http\Controllers\ClientController::class,'paiement']);
Route::get('/clcars',[App\Http\Controllers\ClientController::class,'clcqrs']);
Route::get('/contacts',[App\Http\Controllers\ClientController::class,'contacts']);
Route::get('/services',[App\Http\Controllers\ClientController::class,'services']);
Route::get('/details',[App\Http\Controllers\ClientController::class,'details']);

/*----------------------------------------Admin----------------------------------------*/
Route::get('/dashboard',[App\Http\Controllers\AdminController::class,'dashboard']);
Route::get('/commandes',[App\Http\Controllers\AdminController::class,'commandes']);

Route::get('/ajoutercategorie',[App\Http\Controllers\CategorieController::class,'ajoutercategorie']);
Route::post('/sauvercategorie',[App\Http\Controllers\CategorieController::class,'sauvercategorie']);
Route::get('/categories',[App\Http\Controllers\CategorieController::class,'categories']);
Route::get('/edit_categorie/{id}',[App\Http\Controllers\CategorieController::class,'edit_categorie']);
Route::post('/modifiercategorie',[App\Http\Controllers\CategorieController::class,'modifiercategorie']);
Route::get('/supprimercategorie/{id}',[App\Http\Controllers\CategorieController::class,'supprimercategorie']);

Route::get('/ajoutervoiture',[App\Http\Controllers\CarsController::class,'ajoutervoiture']);
Route::post('/sauvercar',[App\Http\Controllers\CarsController::class,'sauvercar']);
Route::get('/cars',[App\Http\Controllers\CarsController::class,'cars']);
Route::get('/edit_car/{id}',[App\Http\Controllers\CarsController::class,'edit_car']);
Route::post('/modifiercar',[App\Http\Controllers\CarsController::class,'modifiercar']);
Route::get('/supprimervoiture/{id}',[App\Http\Controllers\CarsController::class,'supprimervoiture']);
Route::get('/activer_voiture/{id}',[App\Http\Controllers\CarsController::class,'activer_voiture']);
Route::get('/desactiver_voiture/{id}',[App\Http\Controllers\CarsController::class,'desactiver_voiture']);

Route::get('/ajouterslider',[App\Http\Controllers\SliderController::class,'ajouterslider']);
Route::post('/sauverslider',[App\Http\Controllers\SliderController::class,'sauverslider']);
Route::get('/sliders',[App\Http\Controllers\SliderController::class,'sliders']);
