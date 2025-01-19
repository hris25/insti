<?php

use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\MediaController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'admin'])->group(function () {
    // Dashboard
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // News Routes
    Route::resource('news', NewsController::class, ['as' => 'admin']);

    // Media Routes
    Route::get('/media', [MediaController::class, 'index'])->name('admin.media.index');
    Route::get('/media/create-album', [MediaController::class, 'createAlbum'])->name('admin.media.create-album');
    Route::post('/media/store-album', [MediaController::class, 'storeAlbum'])->name('admin.media.store-album');
    Route::get('/media/{album}/edit', [MediaController::class, 'editAlbum'])->name('admin.media.edit-album');
    Route::put('/media/{album}', [MediaController::class, 'updateAlbum'])->name('admin.media.update-album');
    Route::delete('/media/{album}', [MediaController::class, 'destroyAlbum'])->name('admin.media.destroy-album');
    
    Route::get('/media/{album}/add-media', [MediaController::class, 'addMedia'])->name('admin.media.add-media');
    Route::post('/media/{album}/store-media', [MediaController::class, 'storeMedia'])->name('admin.media.store-media');
    Route::delete('/media-items/{mediaItem}', [MediaController::class, 'destroyMedia'])->name('admin.media.destroy-media');
});
