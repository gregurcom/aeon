<!DOCTYPE html>
<html lang="en">
<head>
    @section('header')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:title" content="@yield('title', 'Progress - home')" />
        <meta property="og:description" content="App to track your and your friends progress" />
        <title>@yield('title', 'Progress - home')</title>
        <link rel="shortcut icon" href="{{ asset('images/icon.ico') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono:wght@300&family=Space+Mono&display=swap" rel="stylesheet">
    @show
</head>
<body>
<section class="content">
    <nav>
        <div>
            <a href="{{ route('home') }}" class="{{ Route::is('home') ? 'active' : '' }}">Home</a>
        </div>
        <div>
            <a href="{{ route('task') }}" class="{{ Route::is('task') ? 'active' : '' }}">Tasks</a>
        </div>
        <div>
            <a href="{{ route('goal') }}" class="{{ Route::is('goal') ? 'active' : '' }}">Goals</a>
        </div>
        <div>
            <a href="{{ route('blog') }}" class="{{ Route::is('blog') || Route::is('article') ? 'active' : '' }}">Blog</a>
        </div>
        <div>
            <a href="{{ route('achievement') }}" class="{{ Route::is('achievement') ? 'active' : '' }}">Achievements</a>
        </div>
        <div id="login">
            <a href="{{ route('login') }}" class="{{ Route::is('login') || Route::is('registration') ? 'active' : '' }}">Log in</a>
        </div>
    </nav>
    @yield('content')
</section>
</body>
</html>
