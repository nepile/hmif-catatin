<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Core\CommitteeController;
use App\Http\Controllers\Core\CoordinatorController;
use App\Http\Controllers\Core\InterviewController;
use App\Http\Controllers\Core\LeaderBoardController;
use App\Http\Controllers\Core\OverviewController;
use App\Http\Controllers\Core\SettingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'showLogin'])->name('login');
Route::post('/handle-login', [LoginController::class, 'handleLogin'])->name('handle-login');
Route::post('/handle-logout', [LoginController::class, 'handleLogout'])->name('handle-logout');

Route::middleware('auth')->prefix('/core')->group(function () {
    Route::get('/overview', [OverviewController::class, 'showOverview'])->name('overview');
    Route::get('/coordinator', [CoordinatorController::class, 'showCoordinator'])->name('coordinator');
    Route::get('/committee', [CommitteeController::class, 'showCommittee'])->name('committee');
    Route::get('/leaderboard', [LeaderBoardController::class, 'showLeaderboard'])->name('leaderboard');
    Route::get('/interview', [InterviewController::class, 'showInterview'])->name('interview');
    Route::get('/setting', [SettingController::class, 'showSetting'])->name('setting');
});
