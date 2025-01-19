<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\Admin\FormationAdminController;
use App\Http\Controllers\VieEstudiantineController;
use App\Http\Controllers\MediathequeController;
use App\Http\Controllers\Admin\ActualiteAdminController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AlbumAdminController;

// Route principale
Route::get('/', [HomeController::class, 'index'])->name('home');

// Routes des sections principales
Route::get('/formations', [FormationController::class, 'index'])->name('formations');
Route::get('/vie-estudiantine', [VieEstudiantineController::class, 'index'])->name('vie-estudiantine');
Route::get('/mediatheque', [AlbumController::class, 'index'])->name('mediatheque');




// Routes pour les liens rapides (à implémenter plus tard)
Route::get('/acces-rapide', function() {
    return view('pages.acces-rapide');
})->name('acces-rapide');

Route::get('/wpadmin', [AdminController::class, 'index'])->name('admin.dashboard');

Route::get('/observatoire', function() {
    return view('pages.observatoire');
})->name('observatoire');

// Routes d'administration pour les formations
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('formations', FormationAdminController::class);
    Route::resource('actualites', ActualiteAdminController::class);
    Route::resource('albums', AlbumAdminController::class);
});

Route::get('/contact', function() {
    return view('pages.contact');
})->name('contact');