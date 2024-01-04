<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo 'Root File';
});

Route::prefix('/auth')->group(function () {
    Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
});
