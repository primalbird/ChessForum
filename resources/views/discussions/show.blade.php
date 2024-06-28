@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="discussion">
            <h1>{{ $discussion->title }}</h1>
            <p>{{ $discussion->content }}</p>
        </div>

        <div class="comments">
            <h2>Comments</h2>
            @foreach($discussion->comments as $comment)
                <div class="card mb-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <p class="card-text">{{ $comment->content }}</p>
                        <p class="text-muted">by {{ $comment->user->name }} at {{ $comment->created_at }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        @auth
            <div class="add-comment">
                
                <form action="{{ route('comments.store', $discussion->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Comment</button>
                </form>
            </div>
        @else
            <p>Please <a href="{{ route('login') }}">login</a> to add a comment.</p>
        @endauth
    </div>
@endsection
