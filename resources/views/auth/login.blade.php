@extends('layouts.layout')

@section('title', 'Progress - login')

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
        <input type="password" name="password" placeholder="Password...">
        <br>
        <a href="{{ route('registration') }}">Register an account</a>
        <br>
        <button type="submit">Login</button>
    </form>
</div>
@endsection
