@extends('layouts.layout')

@section('title', 'Progress - goals')

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
                <a href="{{ route('goal') }}" id="active">Goals</a>
            </div>
            <div>
                <a href="{{ route('achievement') }}">Achievements</a>
            </div>
            <div id="login">
                <a href="{{ route('login') }}">Log in</a>
            </div>
        </nav>
        <div id="goal">
            <div id="content">
                <ul>
                    <li>To become a programmer</li>
                    <li>To do more exersices</li>
                    <li>To wake up early</li>
                </ul>
                <div id="form">
                    <form>
                        <div>
                            <input type="text" name="goal" placeholder="Write a goal...">
                        </div>
                        <div id="radio">
                            <label for="private-radio" id="private">Private</label>
                            <input type="radio" id="private-radio" name="visibility" value="private">

                            <label for="public-radio" id="public">Public</label>
                            <input type="radio" id="public-radio" name="visibility" value="public">
                        </div>
                        <button type="submit">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
