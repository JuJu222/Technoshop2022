@extends('layouts.app')

@section('content')
    @guest
        <home></home>
    @endguest
    @auth
        @if (Auth::user()->role == 'judge')
            <home-judge></home-judge>
        @else
            <home-team></home-team>
        @endif
    @endauth
@endsection
