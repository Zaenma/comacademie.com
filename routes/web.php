<?php

use App\Http\Controllers\Librairie\CategorieController;
use App\Http\Controllers\Librairie\ChildsubcategorieController;
use App\Http\Controllers\Librairie\LivreController;
use App\Http\Controllers\Librairie\SubcategorieController;
use App\Http\Controllers\Orientation\FormationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController\HomeController;
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

/**
 * Les routes de toutes les pages publique de l'application
 */
require __DIR__ . '/frontend.php';



Route::prefix('categorie')->middleware('auth')->controller(CategorieController::class)->group(function () {
    Route::get('/ajouter', 'create')->name('livre.ajouter');

    Route::post('store', 'store')->name('categorie.insert');
});




/**
 * Les sous catégories des livres
 */

Route::prefix('admin')->controller(SubcategorieController::class)->middleware(['auth'])->group(function () {

    Route::prefix('subcategories')->group(function () {

        Route::get('', 'index')->name('subcategories.all');

        Route::get('add', 'create')->name('subcategories.create');

        Route::post('register', 'store')->name('subcategories.store');


        Route::get('edit/{subcategorie}', 'edit')->name('subcategories.edit');


        Route::post('update/{subcategorie}', 'update')->name('subcategories.update');
    });
});


Route::prefix('admin')->controller(ChildsubcategorieController::class)->middleware(['auth'])->group(function () {

    Route::prefix('childsubcategories')->group(function () {

        Route::get('', 'index')->name('childsubcategories.all');

        Route::get('add', 'create')->name('childsubcategories.create');

        Route::post('register', 'store')->name('childsubcategories.store');

        Route::post('{categorie_id}', 'getByCategory')->name('categorie.subcategorie');


        Route::get('edit/{childsubcategories}', 'edit')->name('childsubcategories.edit');


        Route::post('update/{childsubcategories}', 'update')->name('childsubcategories.update');
    });
});



/**
 * Les routes de la gestion des livres chez l'administration
 */

Route::prefix('admin')->controller(LivreController::class)->middleware(['auth'])->group(function () {

    Route::prefix('livre')->group(function () {

        Route::get('', 'index')->name('livres.index');

        Route::get('add', 'create')->name('livres.create');

        Route::post('register', 'store')->name('livres.store');

        Route::post('categorie/{categorie_id}', 'getByCategory')->name('livre.categorie.subcategorie');

        Route::post('subcategorie/{subcategorie_id}', 'getBysubcategory')->name('livre.subcategorie.childsubcategorie');

        Route::get('edit/{childsubcategories}', 'getBySubcategorie');

        Route::get('edit/livre/{livre}', 'edit')->name('livre.edit');

        Route::post('update/livre/{livre}', 'update')->name('livre.update');
    });
});



Route::prefix('admin')->controller(FormationController::class)->middleware(['auth'])->group(function () {

    Route::prefix('formation')->group(function () {
        Route::get('', 'index')->name('formation.index');
        Route::get('add', 'create')->name('formation.create');
        Route::post('register', 'store')->name('formation.store');
        Route::get('/{formation}/edit', 'edit')->name('formation.edit');
        Route::put('/{formation}/update', 'update')->name("formation.update");
        Route::delete("/{formation}", "destroy")->name("formation.destroy");
    });
});

Route::prefix('formation')->controller(FormationController::class)->group(function () {
    Route::get('/{formation}', 'show')->name(('formation.show'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::prefix('admin')->controller(CategorieController::class)->group(function () {

        Route::get('categorie/ajouter', 'create')->name('categorie.create');

        Route::post('store', 'store')->name('categorie.insert');

        Route::get('categories', 'index')->name('categories');
        Route::get('/categorie/show/{categorie}', 'show')->name('show.categorie');
        Route::get('categorie/edit/{categorie}', 'edit')->name('edit.categorie');
        Route::post('categorie/update/{categorie}', 'update')->name('update.categorie');

        Route::delete('categorie/delete/{categorie}', 'destroy')->name('categorie.delete');
    });



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
