@extends('layouts.layout')

@section('title', 'Progress - login')

@section('header')
    @parent
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <form action="{{ route('authenticate') }}" method="POST" class="mt-5">
                    @csrf

                    <input type="text" name="email" placeholder="Email..." class="form-control bg-transparent">
                    <input type="password" name="password" placeholder="Password..." class="form-control mt-2 mb-2 bg-transparent">
                    <a href="{{ route('registration') }}" class="text-dark">Register an account</a>
                    <button type="submit" class="form-control btn btn-outline-dark mt-3">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection
