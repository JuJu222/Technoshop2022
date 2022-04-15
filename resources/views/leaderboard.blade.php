@extends('layouts.app')

@section('content')
    <leaderboard :teams="{{ $teams }}"></leaderboard>
@endsection
