@extends('layout.default')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>

    <p>{{ $post->user->name }}</p>
    <p>{{ $post->user->email }}</p>

    <p>Teams Included: <a href=""></a></p>

    {{-- 


    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                   @foreach ($players as $player)
                    @include('components.player')
                @endforeach
            </div>
             @include('components.createcomment')
            @include('components.comments')

        </div>
    </div> --}}

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
@endsection
