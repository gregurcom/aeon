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
    @yield('content')
</body>
</html>
