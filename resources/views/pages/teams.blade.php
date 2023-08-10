@extends('layout.default')


@section('title')
    Teams
@endsection

@section('content')
    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($teams as $team)
                    @include('components.team')
                @endforeach
            </div>
            {{ $teams }}
        </div>
    </div>
@endsection
