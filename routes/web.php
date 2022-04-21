<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\JudgeController;
use App\Http\Controllers\TeamController;
use App\Models\Game;
use App\Models\Judge;
use App\Models\Point;
use App\Models\Team;
use App\Models\User;
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
            $judge = User::query()->with('judge')->findOrFail(Auth::id());
            $teams = Team::query()->with('user')->get();

            foreach ($teams as $team) {
                if (Point::query()->where('judge_id', $judge->id)->where('team_id', $team->id)->exists()) {
                    $point = Point::query()->where('judge_id', $judge->id)->where('team_id', $team->id)->first();
                    $team->idea = $point->idea;
                    $team->prototype = $point->investment;
                    $team->investment = $point->investment;
                } else {
                    $team->idea = null;
                    $team->prototype = null;
                    $team->investment = null;
                }
            }

            return view('home', compact('judge', 'teams'));
        } else if (Auth::user()->role == 'team') {
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
                ->groupBy('qr_judge')
                ->groupBy('qr_game')
                ->first();

            $investors = Team::with('point')->where('teams.id', $team->id)->first();
            $pictures = array();
            foreach ($investors->point as $point) {
                array_push($pictures, Judge::with('user')->where('judges.id', $point->judge_id)->first()->img_portrait);
            }
            $team->pictures = $pictures;

            $team = json_encode($team);

            return view('home', compact('team'));
        } else {
            $user = User::with('game')->where('id', Auth::id())->first();
            $teams = Team::query()->with('user')->get();

            foreach ($teams as $team) {
                if (Game::query()->where('user_id', Auth::id())->where('team_id', $team->id)->exists()) {
                    $game = Game::query()->where('user_id', Auth::id())->where('team_id', $team->id)->first();
                    $team->start_at = $game->start_at;
                    if ($game->finish_at) {
                        $team->finish_at = $game->finish_at;
                        $s = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $game->start_at);
                        $f = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $game->finish_at);
                        $team->delta = gmdate('H:i:s', $f->diffInSeconds($s));
                    } else {
                        $team->finish_at = null;
                        $team->delta = null;
                    }
                } else {
                    $team->start_at = null;
                    $team->finish_at = null;
                    $team->delta = null;
                }
            }

            return view('home', compact('user', 'teams'));
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
        Route::get('/judge_result', [JudgeController::class, 'judgeGetResult']);
        Route::post('/judge/{id}', [JudgeController::class, 'judgePost']);
    });

    Route::middleware(['game'])->group(function () {
        Route::get('/log/{id}', [GameController::class, 'gameLogGet']);
        Route::get('/log_result', [GameController::class, 'gameLogGetResult']);
        Route::post('/log/{id}', [GameController::class, 'gameLogPost']);
    });
});

Route::resource('teams', TeamController::class);
Route::get('/leaderboard', [TeamController::class, 'leaderboard'])->name('leaderboard');
