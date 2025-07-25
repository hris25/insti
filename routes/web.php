<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\Admin\FormationAdminController;
use App\Http\Controllers\VieEstudiantineController;
use App\Http\Controllers\MediathequeController;
use App\Http\Controllers\Admin\ActualiteAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\AlbumAdminController;
use App\Http\Controllers\Admin\ClubController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Route principale
Route::get('/', [HomeController::class, 'index'])->name('home');

// Routes des sections principales
Route::get('/formations', [FormationController::class, 'index'])->name('formations');
Route::get('/vie-estudiantine', [VieEstudiantineController::class, 'index'])->name('vie-estudiantine');
Route::get('/mediatheque', [MediathequeController::class, 'index'])->name('mediatheque.index');
Route::get('/mediatheque/{album}', [MediathequeController::class, 'show'])->name('mediatheque.show');

// Routes pour les liens rapides (à implémenter plus tard)
Route::get('/acces-rapide', function() {
    return view('pages.acces-rapide');
})->name('acces-rapide');

Route::get('/observatoire', function() {
    return view('pages.observatoire');
})->name('observatoire');

// Routes d'administration
Route::prefix('wpadmin')->name('admin.')->group(function () {
    // Routes publiques
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');
    
    // Routes protégées
    Route::middleware(['web', \App\Http\Middleware\AdminAuthenticate::class])->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('dashboard');
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
        Route::resource('formations', FormationAdminController::class);
        Route::resource('actualites', ActualiteAdminController::class);
        Route::resource('albums', AlbumAdminController::class);
        Route::post('albums/{album}/delete-media', [AlbumAdminController::class, 'deleteMedia'])->name('albums.deleteMedia');
        Route::resource('clubs', ClubController::class);
    });
});

// Routes de contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');