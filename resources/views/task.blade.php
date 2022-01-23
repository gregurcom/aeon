@extends('layouts.layout')

@section('title', 'Progress - tasks')

@section('header')
    @parent
    <link rel="stylesheet" href="{{ asset('css/goal.css') }}">
@endsection

@section('content')
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
                <div>
                    <input type="text" name="task" placeholder="Write a task...">
                </div>
                <div>
                    <input type="datetime-local" name="end_date">
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
