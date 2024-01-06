<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Core\OverviewController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');

Route::prefix('/core')->group(function () {
    Route::get('/overview', [OverviewController::class, 'showOverview'])->name('overview');
});
