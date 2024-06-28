<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ChessForum</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #333;
            color: #fff;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .header, .footer {
            background-color: #444;
            padding: 1em;
            text-align: center;
        }
        .header a, .footer a {
            color: #ffa500;
            text-decoration: none;
            margin: 0 15px;
        }
        .header nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .auth-links {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }
        .auth-links a {
            margin-bottom: 5px;
        }
        .title {
            font-size: 24px;
            color: #ff4500;
            font-family: 'Fire', sans-serif;
        }
        .container {
            flex: 1;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .footer {
            text-align: center;
        }
        .card {
            background-color: #555;
            color: #fff;
            margin-top: 20px;
        }
        .card-header {
            background-color: #666;
            font-weight: bold;
            text-align: center;
            padding: 15px 0;
        }
        .card-body {
            background-color: #777;
        }
        .form-group {
            margin-bottom: 15px;
            padding: 10px;
        }
        .form-group label {
            color: #ffa500;
        }
        .form-group input {
            background-color: #444;
            color: #fff;
            border: 1px solid #555;
            padding: 10px;
        }
        .form-group input:focus {
            background-color: #333;
            border-color: #ff4500;
        }
        .btn-primary {
            background-color: #ff4500;
            border-color: #ff4500;
        }
        .btn-primary:hover {
            background-color: #e03e00;
            border-color: #e03e00;
        }
        .card-body .form-check {
            color: #ffa500;
        }
        .btn-link {
            color: #ffa500;
        }
        .discussion h1 {
        font-size: 2em;
        margin-bottom: 10px;
        }
        .discussion p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }
        .comments h2 {
            margin-top: 40px;
        }
        .card.mb-3 {
            margin-bottom: 15px !important;
        }
        .add-comment h3 {
            margin-top: 40px;
        }
        .form-group textarea {
            resize: none;
            height: 100px;
        }
        .knopka {
        background-color: #ff4500;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 12px;
        transition: background-color 0.3s, transform 0.3s;
    }
    .knopka:hover {
        background-color: #e03e00;
        transform: scale(1.05);
    }
    .knopka:active {
        background-color: #c0392b;
        transform: scale(1);
    }
    .news-item {
        display: flex;
        width: 80%;
        align-items: center;
        background-color: #444;
        color: #fff;
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .news-image {
        width: 150px;
        height: 150px;
        border-radius: 10px;
        margin-right: 15px;
    }

    .news-content h2 {
        font-size: 1.5em;
        margin-bottom: 10px;
        color: #ffa500;
    }

    .news-content p {
        font-size: 1em;
        color: #ddd;
    }
    .learning-menu-container {
        background-color: #2c2c2c;
        padding: 20px;
        border-radius: 10px;
        height: 100%;
    }
    .learning-menu {
        list-style-type: none;
        padding: 0;
    }
    .learning-menu li {
        margin-bottom: 10px;
    }
    .learning-menu a {
        color: #ffa500;
        text-decoration: none;
    }
    .learning-menu a:hover {
        text-decoration: underline;
    }
    .learning-menu ul {
        list-style-type: none;
        padding-left: 20px;
    }
    .video-container {
        margin-top: 20px;
    }
    .container-fluid {
        padding: 0 20px;
    }
    .discussion-of-the-day {
        background-color: #2c2c2c;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 20px;
        border: 2px solid black;
    }
    .discussion-content h3 {
        color: #ffa500;
    }
    .task-of-the-day {
        background-color: #444;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 20px;
    }
    .task-of-the-day h2 {
        color: #ffa500;
    }
    .world-fide-rating {
        background-color: #2c2c2c;
        padding: 20px;
        border-radius: 10px;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .world-fide-rating h2 {
        color: #ffa500;
        margin-bottom: 20px;
    }
    </style>
</head>
<body>
    <div class="header">
        <nav>
            <span class="title">ChessForum</span>
            <div>
                <a href="{{ route('home') }}">Главная</a>
                <a href="{{ route('discussions.index') }}">Обсуждения</a>
                <a href="{{ route('news') }}">Новости</a>
                <a href="{{ route('learning') }}">Обучение</a>
            </div>
            <div class="auth-links">
                @guest
                    <a href="{{ route('login') }}">Вход</a>
                    <a href="{{ route('register') }}">Регистрация</a>
                @else
                    <span>{{ Auth::user()->name }}</span>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Выход
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
            </div>
        </nav>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <div class="footer">
        &copy; {{ date('Y') }} ChessForum
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
