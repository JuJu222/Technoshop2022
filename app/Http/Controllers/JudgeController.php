<?php

namespace App\Http\Controllers;

use App\Models\Judge;
use App\Models\Point;
use App\Models\PreventiveMaintenance;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $team = Team::with('user')->where('id', $id)->first();
        $judge = Judge::with('user')->where('user_id', Auth::id())->first();

        return view('judge', compact('team', 'judge'));
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function judgePost(Request $request, $id)
    {
        Point::query()->create([
            'judge_id' => Judge::query()->where('user_id', Auth::id())->first()->user_id,
            'team_id' => $id,
            'prototype' => $request->prototype,
            'idea' => $request->idea,
            'investment' => $request->investment,
        ]);

        return Point::all();
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
