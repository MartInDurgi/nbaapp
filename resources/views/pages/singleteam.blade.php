@extends('layout.default')

@section('title')
    {{ $team }}
@endsection

@section('content')
    <h1>{{ $team->name }}</h1>

    @foreach ($team->players as $player)
        <small>Player name: {{ $player->first_name . ' ' . $player->last_name }}</small>
    @endforeach


    {{--  @include('components.tags')

    @include('components.createcomment')
    @include('components.comments') --}}
@endsection
