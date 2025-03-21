<?php

use App\Http\Controllers\Backend\VendorController;
use Illuminate\Support\Facades\Route;



//Vendor Routes
Route::controller(VendorController::class)
    ->prefix('vendor')
    ->name('vendor.')
    ->middleware(['auth', 'verified','role:vendor'])
    ->group(function () {
        Route::get('/','dashboard')->name('dashboard');
    });
