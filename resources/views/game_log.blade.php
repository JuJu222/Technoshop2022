@extends('layouts.app')

@section('content')
    <game-log :team="{{ $team }}"></game-log>
@endsection
