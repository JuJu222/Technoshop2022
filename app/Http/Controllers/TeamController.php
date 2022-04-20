<?php

namespace App\Http\Controllers;

use App\Models\Judge;
use App\Models\Point;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function leaderboard()
    {
        $teams = DB::table('points')
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
            ->selectRaw('teams.id, name, mentors, members,
                CAST(COALESCE(AVG(prototype), 0) AS DECIMAL(3,1)) AS prototype,
                CAST(COALESCE(AVG(idea), 0) AS DECIMAL(3,1)) AS idea,
                CAST(COALESCE(SUM(investment), 0) AS SIGNED INTEGER) AS investment')
            ->groupBy('teams.id')
            ->groupBy('name')
            ->groupBy('mentors')
            ->groupBy('members')
            ->orderByDesc('investment')
            ->orderBy('teams.id')
            ->get();

        foreach ($teams as $team) {
            $investors = Team::with('point')->where('teams.id', $team->id)->first();
            $pictures = array();
            foreach ($investors->point as $point) {
                array_push($pictures, Judge::with('user')->where('judges.id', $point->judge_id)->first()->img_portrait);
            }
            $team->pictures = $pictures;
        }

        return view('leaderboard', compact('teams'));
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
