@extends('layouts.layout')

@section('title', 'Progress - registration')

@section('header')
    @parent
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
    <section class="content">
        <nav>
            <div>
                <a href="{{ route('home') }}">Home</a>
            </div>
            <div>
                <a href="{{ route('task') }}">Tasks</a>
            </div>
            <div>
                <a href="{{ route('goal') }}">Goals</a>
            </div>
            <div>
                <a href="{{ route('blog') }}">Blog</a>
            </div>
            <div id="login">
                <a href="{{ route('login') }}" id="active">Log in</a>
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
