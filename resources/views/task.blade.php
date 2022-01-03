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
                <a href="task" class="neon-button">Tasks</a>
            </div>
            <div>
                <a href="goal">Goals</a>
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
                    <li>Drink coffee <span class="text-muted">26 dec</span></li>
                    <li>Mentor (course component) <span class="text-muted">27 dec</span></li>
                    <li>AG laboratoare <span class="text-muted">2 jan</span></li>
                    <li>BZ laboratoare <span class="text-muted">2 jan</span></li>
                </ol>
                <div id="form">
                    <form>
                        <input type="text" name="task" placeholder="Write a task...">
                        <br>
                        <button type="submit">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection