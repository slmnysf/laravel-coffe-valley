<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\UploadController;

// Authentication routes (unprotected)
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Protected routes group
Route::middleware('check.session')->group(function () {
    // Home routes
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Catalogue routes
    Route::get('/catalogue', [CatalogueController::class, 'index'])->name('catalogue');

    // Distributor routes
    Route::controller(DistributorController::class)
        ->prefix('distributors')
        ->group(function () {
            Route::get('/', 'index')->name('distributors');
            Route::get('/add', 'create')->name('distributors.add');
            Route::post('/', 'store')->name('distributors.store');
            Route::get('/{id}/edit', 'edit')->name('distributors.edit');
            Route::put('/{id}', 'update')->name('distributors.update');
        });

    // Upload routes
    Route::controller(UploadController::class)
        ->prefix('uploads')
        ->group(function () {
            Route::get('/', 'index')->name('uploads.index');
            Route::get('/create', 'create')->name('uploads.create');
            Route::post('/', 'store')->name('uploads.store');
        });
});
