@extends('layouts.layout')

@section('title', 'Progress - blog')

@section('header')
    @parent
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endsection

@section('content')
<div id="feed">
    <div class="article">
        <div>
            <h3><a href="article">Suspendisse sagittis lectus</a></h3>
            <p class="description">
                Suspendisse sagittis lectus sapien. Nulla sed tellus tellus. Duis in nulla at
                lectus lobortis lobortis eu a elit. Nullam augue nisi, cursus in diam vel, congue gravida lorem.
                Nunc tristique, magna vitae rutrum eleifend...
            </p>
            <p class="text-muted">Michael Greg 21.12.2021</p>
        </div>
        <div class="article-image">
            <img src="images/neon.jpeg" width="200" height="150">
        </div>
    </div>
    <div class="article">
        <div>
            <h3><a href="article">Suspendisse sagittis lectus</a></h3>
            <p class="description">
                Suspendisse sagittis lectus sapien. Nulla sed tellus tellus. Duis in nulla at
                lectus lobortis lobortis eu a elit. Nullam augue nisi, cursus in diam vel, congue gravida lorem.
                Nunc tristique, magna vitae rutrum eleifend...
            </p>
            <p class="text-muted">Michael Greg 22.12.2021</p>
        </div>
        <div class="article-image">
            <img src="images/back.jpeg" width="200" height="150">
        </div>
    </div>
</div>
@endsection
