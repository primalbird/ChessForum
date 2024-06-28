@extends('layouts.app')

@section('content')
<div style="width: 100%">
<div style="float: left">
            <div class="col-md-3 learning-menu-container">
                <h2>Темы обучения</h2>
                <ul class="learning-menu">
                    <li>
                        <a href="#topic1">Базовые ходы</a>
                        <ul>
                            <li><a href="#subtopic1">Пешка</a></li>
                            <li><a href="#subtopic2">Конь</a></li>
                            <li><a href="#subtopic3">Слон</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#topic2">Продвинутые стратегии</a>
                        <ul>
                            <li><a href="#subtopic4">Вилка</a></li>
                            <li><a href="#subtopic5">Связка</a></li>
                            <li><a href="#subtopic6">Линейный удар</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#topic3">Особенные ходы</a>
                        <ul>
                            <li><a href="#subtopic7">Рокировка</a></li>
                            <li><a href="#subtopic8">Превращение</a></li>
                            <li><a href="#subtopic9" style="color: brown">Взятие на проходе</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div style="width:700px; float: right; margin-right : 346px;">
            <div class="col-md-9" style="width=700px">
                <h2>Взятие на проходе</h2>
                <div class="video-container">
                    <iframe width="100%" height="500" src="https://www.youtube.com/embed/WAwusR6J2yc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
