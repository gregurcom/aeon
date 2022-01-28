@extends('layouts.layout')

@section('title', 'Progress - registration')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <form action="{{ route('register') }}" method="POST" class="mt-5">
                    @csrf

                    <input type="text" name="name" placeholder="Name..." class="bg-transparent form-control">
                    <input type="text" name="email" placeholder="Email..." class="bg-transparent form-control mt-2">
                    <input type="password" name="password" placeholder="Password..." class="bg-transparent form-control mt-2">
                    <input type="password" name="password_confirmation" placeholder="Password confirmation..." class="bg-transparent form-control mb-2 mt-2">
                    <a href="{{ route('login') }}" class="text-dark">Login</a>
                    <button type="submit" class="form-control btn btn-outline-dark mt-3">Register</button>
                </form>
            </div>
        </div>
    </div>
@endsection
