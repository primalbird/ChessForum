@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Список тем</h1>
        @foreach($discussions as $discussion)
            <div class="card mb-3" style="border-radius: 10px;">
                <div class="card-body">
                    <h5 class="card-title">{{ $discussion->title }}</h5>
                    <p class="card-text">{{ Str::limit($discussion->content, 100) }}</p>
                    <a href="{{ route('discussions.show', $discussion->id) }}" class="btn btn-primary">Комментарии</a>
                </div>
            </div>
        @endforeach
        <a href="{{ route('discussions.create') }}" class="knopka">Создать новое обсуждение</a>
    </div>
@endsection
