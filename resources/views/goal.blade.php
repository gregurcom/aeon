@extends('layouts.layout')

@section('header')
    @parent
    <link rel="stylesheet" href="{{ asset('css/goal.css') }}">
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
                <a href="{{ route('goal') }}" class="neon-button">Goals</a>
            </div>
            <div>
                <a href="{{ route('blog') }}">Blog</a>
            </div>
            <div id="login">
                <a href="{{ route('login') }}">Log in</a>
            </div>
        </nav>
        <div id="goal">
            <div id="content">
                <ol>
                    <li>To become a programmer</li>
                    <li>To do more exersices</li>
                    <li>To wake up early</li>
                </ol>
                <div id="form">
                    <form>
                        <input type="text" name="goal" placeholder="Write a goal...">
                        <br>
                        <button type="submit">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
