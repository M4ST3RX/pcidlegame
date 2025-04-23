<?php

use App\Http\Controllers\ComputerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'view'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/pc-builder', [ComputerController::class, 'viewBuilder']);
    Route::get('/inventory', [InventoryController::class, 'view']);
});

require __DIR__ . '/auth.php';
