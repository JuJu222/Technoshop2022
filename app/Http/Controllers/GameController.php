<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Point;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function gameLogGet(Request $request, $id)
    {
        $team = Team::with('user')->findOrFail($id);

        if (Game::query()->where('user_id', Auth::id())->where('team_id', $id)->exists()) {
            $game = Game::query()->where('user_id', Auth::id())->where('team_id', $id)->first();
            $team['start_at'] = $game->start_at;
            if ($game->finish_at) {
                $team['finish_at'] = $game->finish_at;
                $s = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $game->start_at);
                $f = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $game->finish_at);
                $team['delta'] = gmdate('H:i:s', $f->diffInSeconds($s));
                $message = 'You have already logged ' . $team->user->name . "'s time!";
                return redirect()->to('/log_result')->with(['message' => $message, 'team' => $team]);
            } else {
                $team['finish_at'] = '-';
                $team['delta'] = '-';
            }
        } else {
            $team['start_at'] = '-';
            $team['finish_at'] = '-';
            $team['delta'] = '-';
        }
        return view('game_log', compact('team'));
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function gameLogPost(Request $request, $id)
    {
        $teamName = Team::with('user')->findOrFail($id)->user->name;

        if (Game::query()->where('user_id', Auth::id())->where('team_id', $id)->exists()) {
            $game = Game::query()->where('user_id', Auth::id())->where('team_id', $id)->first();
            if ($game->finish_at == null) {
                $game->update([
                    'finish_at' => Carbon::now()
                ]);

                $message = 'You have succesfully logged ' . $teamName . ' finish time';
            } else {
                $message = 'You have already logged ' . $teamName . "'s time!";
            }
        } else {
            $message = 'You have succesfully logged ' . $teamName . ' start time';
            $query = Game::query()->create([
                'user_id' => Auth::id(),
                'team_id' => $id,
                'start_at' => Carbon::now(),
            ]);
        }

        $team = Team::with('user')->findOrFail($id);

        if (Game::query()->where('user_id', Auth::id())->where('team_id', $id)->exists()) {
            $game = Game::query()->where('user_id', Auth::id())->where('team_id', $id)->first();
            $team['start_at'] = $game->start_at;
            if ($game->finish_at) {
                $team['finish_at'] = $game->finish_at;
                $s = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $game->start_at);
                $f = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $game->finish_at);
                $team['delta'] = gmdate('H:i:s', $f->diffInSeconds($s));
            } else {
                $team['finish_at'] = '-';
                $team['delta'] = '-';
            }
        } else {
            $team['start_at'] = '-';
            $team['finish_at'] = '-';
            $team['delta'] = '-';
        }

        return redirect()->to('/log_result')->with(['message' => $message, 'team' => $team]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gameLogGetResult()
    {
        if (session('message')) {
            $message = session('message');
            $team = session('team');

            return view('game_success', compact('message', 'team'));
        } else {
            return redirect()->to('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
