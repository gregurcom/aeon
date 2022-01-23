@extends('layouts.layout')

@section('title', 'Progress - registration')

@section('header')
    @parent
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
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
@endsection
