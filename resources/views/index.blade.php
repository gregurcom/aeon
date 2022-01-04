@extends('layouts.layout')

@section('header')
    @parent
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <section class="content">
        <nav>
            <div>
                <a href="{{ route('home') }}" class="neon-button">Home</a>
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
                <a href="{{ route('login') }}">Log in</a>
            </div>
        </nav>
        <div id="profile">
            <div id="logo">
                <img src="images/avatar.png" width="150" height="200" alt="avatar">
            </div>
            <div id="stat">
                <div id="statistics">
                    <h1>Statistics</h1>
                </div>
                <ul>
                    <li>Goals: 20</li>
                    <li>Tasks: 43</li>
                    <li>Done: 20/43</li>
                </ul>
            </div>
        </div>
        <div id="quote">
            <q cite="https://www.mozilla.org/en-US/about/history/details/" title="Daily quote">
                Worry never robs tomorrow of its sorrow. It only saps today of its joy.
            </q>
        </div>
    </section>
@endsection
