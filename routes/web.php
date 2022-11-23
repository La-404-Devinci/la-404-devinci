<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\Backoffice\DashboardController;
use App\Http\Controllers\Backoffice\ProjectController;
use App\Http\Controllers\Backoffice\UserController;
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
// Auth system
require __DIR__.'/auth.php';

// Home page
Route::get('/', [AppController::class, 'index'])->name('home');

// Admin section
Route::prefix('dashboard')->name('dashboard.')->middleware(['auth', 'verified'])->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name('index');

    // Members
    Route::resource('user', UserController::class)->except('show')->middleware('admin');

    // Projects
    Route::resource('project', ProjectController::class)->except('show');
});
