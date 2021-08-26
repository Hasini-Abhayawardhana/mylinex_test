<div class="card">
    <div class="card-body">
        <div class="form-group row">
            @if(empty($records->toArray()))
            Data Not Found
            @endif
            @foreach ($records as $post)
                <div class="col-form-label col-md-12 card">
                    {{ $post->description }}
                </div>
                @foreach ($post->comments as $comment)
                <div class="col-form-label col-md-12 btn btn-secondary">
                    {{ $comment->message }}
                </div>
                @endforeach
                &nbsp;
            @endforeach

        </div>
    </div>
</div>
