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
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    @show
</head>
<body>
<section class="content" id="{{ !Route::is('home') ? 'app' : 'home' }}">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid fs-4">
            <a href="/home" class="{{ Request::getRequestUri() == '/home' ? 'active' : '' }} nav-link nav-item text-white">Home</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" id="header-button" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="/tasks" class="{{ Request::getRequestUri() == '/tasks' ? 'active' : '' }} nav-link nav-item text-white">Tasks</a>
                    <a href="/goals" class="{{ Request::getRequestUri() == '/goals' ? 'active' : '' }} nav-item nav-link text-white">Goals</a>
                    <a href="/achievements" class="{{ Request::getRequestUri() == '/achievements' ? 'active' : '' }} nav-item nav-link text-white">Achievements</a>
                    <a href="/blog" class="{{ Request::getRequestUri() == '/blog' || Request::getRequestUri() == '/article' ? 'active' : '' }} nav-item nav-link text-white">Posts</a>
                </div>

                @auth
                    <div class="navbar-nav ms-auto">
                        <a href="{{ route('logout') }}" class="nav-item nav-link text-white">Logout</a>
                    </div>
                @else
                    <div class="navbar-nav ms-auto">
                        <a href="{{ route('login') }}" class="{{ Request::getRequestUri() == '/login' || Request::getRequestUri() == '/registration' ? 'active' : '' }} nav-item nav-link text-white">Login</a>
                    </div>
                @endauth
            </div>
        </div>
    </nav>
    @yield('content')
</section>
</body>
</html>
