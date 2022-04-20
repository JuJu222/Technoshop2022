@extends('layouts.app')

@section('content')
{{--    <judge-success :team="{{ $team }}" :judge="{{ $judge }}" :query="{{ $query }}" message="{{ $message }}"></judge-success>--}}
    <game-success :team="{{ $team }}" message="{{ $message }}"></game-success>
@endsection
