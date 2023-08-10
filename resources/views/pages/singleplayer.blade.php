@extends('layout.default')

@section('title')
    {{ $player->name }}
@endsection

@section('content')
    <h1>{{ $player->first_name . ' ' . $player->last_name }}</h1>

    <p>{{ $player->email }}</p>
    <h3>Team: <a href="/teams/{{ $player->team->id }}">
            {{ $player->team->name }}
        </a>
    </h3>

    {{--     <p>{{ $player-> }}</p>
 --}}
@endsection
