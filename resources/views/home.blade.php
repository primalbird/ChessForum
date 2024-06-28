@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="flex-direction: row; width:100%;">
        {{-- <div class="row"> --}}
            <!-- Левая колонка -->
            <div style="width:59%; float:left;">
                <!-- Обсуждение дня -->
                <div class="discussion-of-the-day" >
                    <h2>Горячее обсуждение</h2>
                    <div class="discussion-content">
                        @if($discussion)
                            <h3>{{ $discussion->title }}</h3>
                            <p>{{ Str::limit($discussion->content, 100) }}</p>
                            <a href="{{ route('discussions.show', $discussion->id) }}" class="btn knopka">Read More</a>
                        @else
                            <p>No discussions available.</p>
                        @endif
                    </div>
                </div>
                <!-- Задача дня -->
                <div class="task-of-the-day" style="height: 67%;">
                    <h2>Задача дня</h2>
                    <img src="{{ asset('images/task.png') }}" alt="Task of the Day" class="img-fluid">
                </div>
            </div>
            <!-- Правая колонка -->
            {{-- <div style="width: 33%"> --}}
                <div class="world-fide-rating" style="height: 25%; width:33%; float:left;" >
                    <h2>World FIDE Rating</h2>
                    <img src="{{ asset('images/fide.png') }}" alt="World FIDE Rating" class="img-fluid" style="height: 100vh;">
                {{-- </div> --}}
            </div>
        {{-- </div> --}}
    </div>
@endsection
