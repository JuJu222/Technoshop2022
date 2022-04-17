@extends('layouts.app')

@section('content')
    <judge-success :team="{{ $team }}" :judge="{{ $judge }}" :query="{{ $query }}" message="{{ $message }}"></judge-success>
@endsection
