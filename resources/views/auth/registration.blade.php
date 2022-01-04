@extends('layouts.layout')

@section('header')
    @parent
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
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
                <a href="blog">Blog</a>
            </div>
            <div id="login">
                <a href="login" class="neon-button">Log in</a>
            </div>
        </nav>
        <div id="form">
            <form action="/" method="POST">
                @csrf

                <input type="text" name="name" placeholder="Name...">
                <br>
                <input type="text" name="email" placeholder="Email...">
                <br>
                <input type="password" name="password" placeholder="Password...">
                <br>
                <input type="password" name="password_confirmation" placeholder="Password confirmation...">
                <br>
                <a href="{{ route('login') }}">Login</a>
                <br>
                <button type="submit">Register</button>
            </form>
        </div>
    </section>
@endsection
