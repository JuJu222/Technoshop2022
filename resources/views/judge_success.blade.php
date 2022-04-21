@extends('layouts.app')

@section('content')
    @isset($team)
        <judge-success :team="{{ $team }}" :judge="{{ $judge }}" :query="{{ $query }}" message="{{ $message }}"></judge-success>
    @else
        <judge-success message="{{ $message }}"></judge-success>
    @endisset
@endsection
