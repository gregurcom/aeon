@extends('layouts.layout')

@section('title', 'Progress - achievements')

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
                <a href="{{ route('achievement') }}" id="active">Achievements</a>
            </div>
            <div id="login">
                <a href="{{ route('login') }}">Log in</a>
            </div>
        </nav>
        <div id="achievement">
            <div id="content" style="margin-left: 20px;">
                <img src="{{ asset('images/icons8-climbing-skin-type-1-48.png') }}">
                <img src="{{ asset('images/icons8-heart-rate-monitor-64.png') }}">
                <img src="{{ asset('images/icons8-место-хранения-64.png') }}">
            </div>
        </div>
    </section>
@endsection
