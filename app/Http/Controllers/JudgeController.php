<?php

namespace App\Http\Controllers;

use App\Models\Judge;
use App\Models\Point;
use App\Models\PreventiveMaintenance;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JudgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investors = User::with('judge')->where('role', 'judge')->get();

        return view('investors', compact('investors'));
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function judgeGet(Request $request, $id)
    {
        $judge = Judge::query()->where('user_id', Auth::id())->first();

        if (Point::query()->where('judge_id', $judge->id)->where('team_id', $id)->exists()) {
            $teamName = Team::query()->with('user')->where('teams.id', $id)->first()->user->name;
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
                ->selectRaw('teams.id, name, mentors, members,
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
            $message = 'You have already given points and scores to ' . $teamName;
            $query = Point::query()->where('judge_id', $judge->id)->where('team_id', $id)->first();
            return redirect()->to('/judge_result')->with(['team' => $team, 'judge' => $judge, 'query' => $query, 'message' => $message]);
        } else {
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
                ->selectRaw('teams.id, name, mentors, members,
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
            $judge = Judge::with('user')->where('user_id', Auth::id())->first();

            return view('judge', compact('team', 'judge'));
        }
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function judgePost(Request $request, $id)
    {
        $judge = Judge::query()->where('user_id', Auth::id())->first();
        $teamName = Team::query()->with('user')->where('teams.id', $id)->first()->user->name;

        if (Point::query()->where('judge_id', $judge->id)->where('team_id', $id)->exists()) {
            $message = 'You have already given points and scores to ' . $teamName;
            $query = Point::query()->where('judge_id', $judge->id)->where('team_id', $id)->first();
        } else {
            $message = 'You have succesfully given points and scores to ' . $teamName;
            $query = Point::query()->create([
                'judge_id' => $judge->id,
                'team_id' => $id,
                'prototype' => $request->prototype,
                'idea' => $request->idea,
                'investment' => $request->investment,
            ]);
            $judge->update([
                'points' => $judge->points - $request->investment
            ]);
        }

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
            ->selectRaw('teams.id, name, mentors, members,
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

        return redirect()->to('/judge_result')->with(['team' => $team, 'judge' => $judge, 'query' => $query, 'message' => $message]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function judgeGetResult()
    {
        if (session('message')) {
            $team = session('team');
            $judge = session('judge');
            $query = session('query');
            $message = session('message');

            return view('judge_success', compact('team', 'judge', 'query', 'message'));
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
        $investor = Judge::with('user')->where('judges.id', $id)->first();

        return view('investor', compact('investor'));
    }

//    /**
//     * Display the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function judgeSuccess(Request $request, $id)
//    {
//        $team = DB::table('points')
//            ->rightJoin(
//                'teams',
//                'teams.id',
//                '=',
//                'team_id')
//            ->join(
//                'users',
//                'users.id',
//                '=',
//                'user_id')
//            ->selectRaw('teams.id, name, mentors, members,
//                CAST(COALESCE(AVG(prototype), 0) AS DECIMAL(3,1)) AS prototype,
//                CAST(COALESCE(AVG(idea), 0) AS DECIMAL(3,1)) AS idea,
//                CAST(COALESCE(SUM(investment), 0) AS SIGNED INTEGER) AS investment')
//            ->where('teams.id', $id)
//            ->groupBy('teams.id')
//            ->groupBy('name')
//            ->groupBy('mentors')
//            ->groupBy('members')
//            ->first();
//        $team = json_encode($team);
//        $judge = Judge::with('user')->where('user_id', Auth::id())->first();
//        $latest = Point::query()->where('judge_id', $judge->id)->order_by('updated_at', 'desc')->first();
//        return $latest;
//
//        return view('judge_success', compact('team', 'judge'));
//    }

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
