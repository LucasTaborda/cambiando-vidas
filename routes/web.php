<?php

use App\Http\Controllers\GalleryImageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
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

Route::get('/pages', [PageController::class, 'index'])->name('pages.index');
Route::get('/pages/{id}/edit', [PageController::class, 'edit']);
Route::get('/pages/create', [PageController::class, 'create']);
Route::put('/pages/{id}', [PageController::class, 'update']);
Route::post('/pages', [PageController::class, 'store']);

Route::get('/gallery-images', [GalleryImageController::class, 'index'])->name('gallery-images.index');
Route::get('/gallery-images/{id}/edit', [GalleryImageController::class, 'edit']);
Route::get('/gallery-images/create', [GalleryImageController::class, 'create']);
Route::post('/gallery-images', [GalleryImageController::class, 'store']);
Route::put('/gallery-images/{id}', [GalleryImageController::class, 'update']);
Route::get('/gallery', [GalleryImageController::class, 'showGallery']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('home');
});

Route::get('/{slug}', [PageController::class, 'show']);

