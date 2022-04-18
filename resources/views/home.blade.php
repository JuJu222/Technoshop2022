@extends('layouts.app')

@section('content')
    @guest
        <home></home>
    @endguest
    @auth
        @if (Auth::user()->role == 'judge')
            <home-judge :judge="{{ Auth::user() }}"></home-judge>
        @else
            <home-team :team="{{ $team }}"></home-team>
        @endif
    @endauth
@endsection
