<?php

use App\Http\Controllers\JudgeController;
use App\Http\Controllers\TeamController;
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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('investors', JudgeController::class);
Route::middleware(['auth'])->group(function () {
    Route::middleware(['judge'])->group(function () {
        Route::get('/judge/{id}', [JudgeController::class, 'judgeGet']);
        Route::post('/judge/{id}', [JudgeController::class, 'judgePost']);
//        Route::get('/judge/{id}/success', [JudgeController::class, 'judgeSuccess']);
    });
});

Route::resource('teams', TeamController::class);
Route::get('/leaderboard', [TeamController::class, 'leaderboard'])->name('leaderboard');
