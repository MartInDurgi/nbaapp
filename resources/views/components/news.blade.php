<div class="col">
    <div class="card shadow-sm">
        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                dy=".3em">News Photo</text>
        </svg>
        <div class="card-body">
            {{--  <p class="card-text">{{ $team->name }}</p> --}}
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary"
                        onclick="window.location.href='/news/{{ $post->id }}'">View</button>
                    {{-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> --}}
                </div>
                <h3 class="text-body-secondary">{{ $post->title }}</h3>
                <h6 class="text-body-secondary ">Created by: {{ $post->user->name }}</h6>
                <h6 class="text-body-secondary "> {{ $post->user->name }}</h6>

            </div>
        </div>
    </div>
</div>
