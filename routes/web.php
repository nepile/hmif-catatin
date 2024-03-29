<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Core\SettingController;
use App\Http\Controllers\Core\OverviewController;
use App\Http\Controllers\Core\CommitteeController;
use App\Http\Controllers\Core\InterviewController;
use App\Http\Controllers\Core\QuestionsController;
use App\Http\Controllers\Core\CoordinatorController;
use App\Http\Controllers\Core\LeaderBoardController;

Route::get('/', [LoginController::class, 'showLogin'])->name('login');
Route::post('/handle-login', [LoginController::class, 'handleLogin'])->name('handle-login');
Route::post('/handle-logout', [LoginController::class, 'handleLogout'])->name('handle-logout');

Route::middleware('auth')->prefix('/core')->group(function () {
    Route::get('/overview', [OverviewController::class, 'showOverview'])->name('overview');
    Route::middleware('role:SuperAdmin')->group(function () {
        Route::prefix('/coordinator')->group(function () {
            Route::get('/', [CoordinatorController::class, 'showCoordinator'])->name('coordinator');
            Route::get('/search-coordinator', [CoordinatorController::class, 'searchCoordinator'])->name('search-coordinator');
            Route::post('/create-coordinator', [CoordinatorController::class, 'createCoordinator'])->name('create-coordinator');
            Route::put('/update-coordinator/{id}', [CoordinatorController::class, 'updateCoordinator'])->name('update-coordinator');
            Route::delete('/delete-coordinator/{id}', [CoordinatorController::class, 'deleteCoordinator'])->name('delete-coordinator');
        });
        Route::prefix('/committee')->group(function () {
            Route::post('/create-committee', [CommitteeController::class, 'createCommittee'])->name('create-committee');
            Route::get('/show-committee', [CommitteeController::class, 'showCommittee'])->name('show-committee');
            Route::put('/update-committee/{id}', [CommitteeController::class, 'updateCommittee'])->name('update-committee');
            Route::delete('/committee/delete-committee/{id}', [CommitteeController::class, 'deleteCommittee'])->name('delete-committee');
        });
    });

    Route::get('/committee', [CommitteeController::class, 'showCommittee'])->name('committee');
    Route::get('/leaderboard', [LeaderBoardController::class, 'showLeaderboard'])->name('leaderboard');
    Route::get('/interview', [InterviewController::class, 'showInterview'])->name('interview');
    Route::get('interview/interview-now/{id}', [InterviewController::class, 'showInterviewNow'])->name('interview.now');
    Route::post('/save-interview/{id}', [InterviewController::class, 'saveInterview'])->name('save-interview');

    Route::prefix('/question')->group(function () {
        Route::get('/', [QuestionsController::class, 'showQuestion'])->name('questions');
        Route::get('/detail-question/{id}', [QuestionsController::class, 'detailQuestion'])->name('detail-question');
        Route::get('/detail-question/{id}/create-question', [QuestionsController::class, 'showCreateQuestion'])->name('show-create-question');
        Route::post('/create-question', [QuestionsController::class, 'createQuestion'])->name('create-question');
        Route::put('/update-question/{id}', [QuestionsController::class, 'updateQuestion'])->name('update-question');
        Route::delete('/delete-question/{id}', [QuestionsController::class, 'deleteQuestion'])->name('delete-question');
        Route::post('/question/create', [QuestionsController::class, 'createQuestion'])->name('create-question');
    });

    Route::prefix('/setting')->group(function () {
        Route::get('/', [SettingController::class, 'showSetting'])->name('setting');
        Route::get('/newPass', [SettingController::class, 'toNewPass'])->name('newPass');
        Route::put('/update-password/{id}', [SettingController::class, 'updatePassword'])->name('update-password');
        Route::put('/update-user/{id}', [SettingController::class, 'updateUser'])->name('update-user');
    });
});
