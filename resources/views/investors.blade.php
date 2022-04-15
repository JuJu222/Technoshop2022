@extends('layouts.app')

@section('content')
    <investors :investors="{{ $investors }}"></investors>
@endsection
