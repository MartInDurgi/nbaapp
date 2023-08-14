<div class="container mt-5">
    <div>Comments</div>
    @foreach ($team->comments as $comment)
        <div>comment</div>
        <div class="p-5 text-center text-muted bg-body border border-dashed rounded-5 mb-4">
            <small class="col-lg-6 mx-auto mb-4">{{ $comment->user->name }}</small>
            <p class="col-lg-6 mx-auto mb-4">{{ $comment->content }}</p>
        </div>
    @endforeach

</div>
