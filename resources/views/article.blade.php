@extends('layouts.layout')

@section('header')
    @parent
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endsection

@section('content')
    <section class="content">
        <nav>
            <div>
                <a href="/">Home</a>
            </div>
            <div>
                <a href="task">Tasks</a>
            </div>
            <div>
                <a href="goal">Goals</a>
            </div>
            <div>
                <a href="blog" class="neon-button">Blog</a>
            </div>
            <div id="login">
                <a href="login">Log in</a>
            </div>
        </nav>
        <div id="feed">
            <div>
                <div class="article-image">
                    <h3><a href="#">Suspendisse sagittis lectus</a></h3>
                    <img src="images/neon.jpeg" width="400" height="200">
                </div>
                <p class="text-muted">Michael Greg 21.12.2021</p>
                <p>
                    Suspendisse sagittis lectus sapien. Nulla sed tellus tellus. Duis in nulla at
                    lectus lobortis lobortis eu a elit. Nullam augue nisi, cursus in diam vel, congue gravida lorem.
                    Nunc tristique, magna vitae rutrum eleifend. Donec euismod, dui accumsan suscipit dictum, orci velit
                    tempus arcu, vel facilisis eros justo quis ante. Nulla eu massa vel est tempor semper a sit amet dui.
                    Donec nec semper magna, eu tincidunt nibh. Nam hendrerit rutrum tortor, et ullamcorper elit.
                    Aliquam erat volutpat. Donec blandit lectus at tincidunt malesuada. Sed quis urna volutpat, vulputate sapien nec,
                    gravida massa. Etiam eu est ut lorem vulputate sagittis scelerisque vel turpis.
                    Suspendisse sagittis lectus sapien. Nulla sed tellus tellus. Duis in nulla at
                    lectus lobortis lobortis eu a elit. Nullam augue nisi, cursus in diam vel, congue gravida lorem.
                    Nunc tristique, magna vitae rutrum eleifend.
                    Donec euismod, dui accumsan suscipit dictum, orci velit
                    tempus arcu, vel facilisis eros justo quis ante. Nulla eu massa vel est tempor semper a sit amet dui.
                    Donec nec semper magna, eu tincidunt nibh. Nam hendrerit rutrum tortor, et ullamcorper elit.
                    Aliquam erat volutpat. Donec blandit lectus at tincidunt malesuada. Sed quis urna volutpat, vulputate sapien nec,
                    gravida massa. Etiam eu est ut lorem vulputate sagittis scelerisque vel turpis.
                </p>
            </div>
        </div>
    </section>
@endsection