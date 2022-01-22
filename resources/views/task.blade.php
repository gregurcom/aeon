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
                <a href="{{ route('task') }}" id="active">Tasks</a>
            </div>
            <div>
                <a href="{{ route('goal') }}">Goals</a>
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
                    <li>Drink coffee <span class="text-muted">26 dec</span></li>
                    <li>Mentor (course component) <span class="text-muted">27 dec</span></li>
                    <li>AG laboratoare <span class="text-muted">2 jan</span></li>
                    <li>BZ laboratoare <span class="text-muted">2 jan</span></li>
                    <li>Drink coffee <span class="text-muted">26 dec</span></li>
                </ul>
                <div id="form">
                    <form>
                        <input type="text" name="task" placeholder="Write a task...">
                        <br>
                        <select name="visibility">
                            <option value="private">Private</option>
                            <option value="public">Public</option>
                        </select>
                        <br>
                        <button type="submit">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
