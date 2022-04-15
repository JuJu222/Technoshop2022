@extends('layouts.app')

@section('content')
    <judge :team="{{ $team }}" :judge="{{ $judge }}"></judge>
@endsection
