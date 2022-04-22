@extends('layouts.app')

@section('content')
    <judge :team="{{ $team }}" :index="{{ $index + 1 }}" :judge="{{ $judge }}"></judge>
@endsection
