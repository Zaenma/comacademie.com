<?php

use App\Http\Controllers\Librairie\CategorieController;
use App\Http\Controllers\Librairie\LibrairieController;
use App\Http\Controllers\Librairie\LivreController;
use App\Http\Controllers\Orientation\Orientation;
use App\Http\Controllers\Orientation\OrientationController;
use App\Http\Controllers\Orientation\RecommandationController;
use App\Http\Controllers\PublicController\HomeController;
use App\Models\Librairie\Categorie;
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


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('comacademie.index');
});

Route::controller(CategorieController::class)->group(function () {
    Route::get('livres/categories', 'categorie')->name('livres.categorie');

    Route::get('/categorie/{categorie}', 'showCategorie')->name('frontend.show.categorie');
});

Route::controller(LivreController::class)->group(function () {
    Route::get('livre/{livre}', 'show')->name('livre.show');
});

Route::middleware(['auth'])->controller(LivreController::class)->group(function () {
    Route::get('telecharger/{livre}', 'telecharger')->name('livre.telecharger');
});

Route::controller(OrientationController::class)->prefix('orientation')->group(function () {
    Route::get('', 'index')->name('orientation.index');
    Route::get('/serie/{serie}', 'formationParSerie')->name('orientation.formationparserie');

    Route::get('bepc', 'bepc')->name('orientation.bepc');
    Route::get('bac', 'bac')->name('orientation.bac');
    Route::get('licence', 'licence')->name('orientation.licence');
});


Route::controller(RecommandationController::class)->prefix('recommandation')->group(function () {
    Route::post('/{formation}/recommandation', 'store')->name('recommandation.store');
});
