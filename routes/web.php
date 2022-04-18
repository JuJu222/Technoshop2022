<?php

use App\Http\Controllers\JudgeController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
    if (Auth::check()) {
        if (Auth::user()->role == 'judge') {
        return view('home');
        } else {
            $id = Auth::user()->team->id;
            $team = DB::table('points')
                ->rightJoin(
                    'teams',
                    'teams.id',
                    '=',
                    'team_id')
                ->join(
                    'users',
                    'users.id',
                    '=',
                    'user_id')
                ->selectRaw('teams.id, name, mentors, members, qr_judge, qr_game,
                CAST(COALESCE(AVG(prototype), 0) AS DECIMAL(3,1)) AS prototype,
                CAST(COALESCE(AVG(idea), 0) AS DECIMAL(3,1)) AS idea,
                CAST(COALESCE(SUM(investment), 0) AS SIGNED INTEGER) AS investment')
                ->where('teams.id', $id)
                ->groupBy('teams.id')
                ->groupBy('name')
                ->groupBy('mentors')
                ->groupBy('members')
                ->first();
            $team = json_encode($team);

            return view('home', compact('team'));
        }
    } else {
        return view('home');
    }
});

Auth::routes();

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
