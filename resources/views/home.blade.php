@extends('layouts.app')

@section('content')
    @guest
        <home></home>
    @endguest
    @auth
        @if (Auth::user()->role == 'judge')
            <home-judge :judge="{{ $judge }}" :teams="{{ $teams }}"></home-judge>
        @elseif (Auth::user()->role == 'team')
            <home-team :team="{{ $team }}"></home-team>
        @else
            <home-game :user="{{ $user }}" :teams="{{ $teams }}"></home-game>
        @endif
    @endauth
@endsection
