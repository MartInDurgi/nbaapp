{{-- <div class="col">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary-emphasis">Nba</strong>
            <h3 class="mb-0">{{ $team->name }}</h3>
            <div class="mb-1 text-body-secondary">Nov 12</div>
           
            <a href="/teams/{{ $team->id }}" class="icon-link gap-1 icon-link-hover stretched-link">
                Continue reading
                <svg class="bi">
                    <use xlink:href="#chevron-right" />
                </svg>
            </a>
        </div>
        <div class="col-auto d-none d-lg-block">
            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                focusable="false">
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                    dy=".3em"></text>
            </svg>
        </div>
    </div>
 --}}


<div class="col">
    <div class="card shadow-sm">
        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                dy=".3em">Team Logo</text>
        </svg>
        <div class="card-body">
            {{--  <p class="card-text">{{ $team->name }}</p> --}}
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary"
                        onclick="window.location.href='/teams/{{ $team->id }}'">View</button>
                    {{-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> --}}
                </div>
                <h3 class="text-body-secondary">{{ $team->name }}</h3>
            </div>
        </div>
    </div>
</div>
{{--   <p class="card-text mb-auto">{{ $post->user->name }}</p>
            @include('components.tags') --}}

{{-- @section('content')
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
@endsection --}}
