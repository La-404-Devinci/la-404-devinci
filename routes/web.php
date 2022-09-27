<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ProjectController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
// Auth system
require __DIR__.'/auth.php';

// Home page
Route::get('/', [AppController::class, 'index'])->name('home');

// Gallery
Route::get('gallery', [AppController::class, 'gallery'])->name('gallery');

// Formations
Route::prefix('formation')->group(function () {
    Route::get('/', [FormationController::class, 'index'])->name('index');
    Route::get('/{formation}', [FormationController::class, 'show'])->name('show');
    Route::get('/{formation}/{course}', [FormationController::class, 'courseShow'])->name('course.show');
});

// Projects
Route::resource('project', ProjectController::class)->only(['index', 'show']);

// Admin section
Route::get('/dashboard', function () {
    return Inertia::render('Admin/Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
