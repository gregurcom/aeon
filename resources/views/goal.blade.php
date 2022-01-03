@extends('layouts.layout')

@section('header')
    @parent
    <link rel="stylesheet" href="{{ asset('css/goal.css') }}">
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
                <a href="goal" class="neon-button">Goals</a>
            </div>
            <div>
                <a href="blog">Blog</a>
            </div>
            <div id="login">
                <a href="login">Log in</a>
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