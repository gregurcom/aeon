@extends('layouts.layout')

@section('header')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <section class="content">
        <nav>
            <div>
                <a href="{{ route('home') }}" id="active">Home</a>
            </div>
            <div>
                <a href="{{ route('task') }}">Tasks</a>
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
        <div id="profile">
            <div id="logo">
                <img src="images/avatar.png" width="150" height="200" alt="avatar">
            </div>
            <div id="chart">
                <canvas id="myChart" style="width:100%;max-width:500px;"></canvas>
                <script>
                    var xValues = ["Tasks", "Goals", "Achievements"];
                    var yValues = [55, 49, 44];
                    var barColors = [
                        "#6d8dbf",
                        "#344a6e",
                        "#3f4a5c",
                    ];

                    new Chart("myChart", {
                        type: "pie",
                        data: {
                            labels: xValues,
                            datasets: [{
                                backgroundColor: barColors,
                                data: yValues
                            }]
                        },
                    });
                </script>
            </div>
        </div>
    </section>
@endsection
