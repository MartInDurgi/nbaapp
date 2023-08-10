@extends('layout.default')

@section('title')
    {{ $team->name }}
@endsection

@section('content')
    <h1>{{ $team->name }}</h1>
    <p>{{ $team->city }}</p>
    <p>{{ $team->adress }}</p>
    <p>{{ $team->email }}</p>






    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($players as $player)
                    @include('components.player')
                @endforeach
            </div>
            {{ $players }}
        </div>
    </div>

    {{-- <div class="container my-5">
        <div class="album py-5 bg-body-tertiary">
            <h1 class="text-body-emphasis">Players List</h1>

       
            


        </div>
    </div> --}}
    {{--  <ul class="list-group list-group-horizontal">

                @foreach ($team->players as $player)
                    <li class="list-group-item">
                        <a href=""> <small>{{ $player->first_name . ' ' . $player->last_name }}</small></a>
                    </li>
                @endforeach --}}





    {{--    @foreach ($team->players as $player)
        <ul>
            <a href=""> <small>Player name: {{ $player->first_name . ' ' . $player->last_name }}</small></a>
        </ul>
    @endforeach --}}


    {{--  @include('components.tags') --}}

    @include('components.createcomment')
    @include('components.comments')
@endsection
