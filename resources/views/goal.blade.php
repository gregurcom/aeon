@extends('layouts.layout')

@section('title', 'Progress - goals')

@section('header')
    @parent
    <link rel="stylesheet" href="{{ asset('css/goal.css') }}">
@endsection

@section('content')
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
@endsection
