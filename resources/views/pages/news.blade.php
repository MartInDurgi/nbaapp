@extends('layout.default')


@section('title')
    News
@endsection

@section('content')
    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($news as $post)
                    @include('components.news')
                @endforeach
            </div>
            {{ $news }}
        </div>
        @include('components.status')
    </div>
@endsection
