<?php

use App\Http\Controllers\Backend\AdminController;
use Illuminate\Support\Facades\Route;



//Admin Routes
Route::controller(AdminController::class)
    ->prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'verified','role:admin'])
    ->group(function () {
        Route::get('/','dashboard')->name('dashboard');
    });


