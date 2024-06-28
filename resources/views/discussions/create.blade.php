@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Новая тема</h1>
        <form action="{{ route('discussions.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Заголовок</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="content">Описание</label>
                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
            </div>
            <button type="submit" class="knopka">Добавить тему</button>
        </form>
    </div>
@endsection
