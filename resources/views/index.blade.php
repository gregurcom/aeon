@extends('layouts.layout')

@section('header')
    @parent
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <meta property="og:image" content="{{ asset('images/avatar.png') }}" />
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
                <img src="{{ asset('images/avatar.png') }}" width="150" height="200" alt="avatar">
            </div>
            <div id="chart-pie">
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
            <div id="chart-line">
                <canvas id="myCharts" style="width:100%;max-width:700px"></canvas>
                <script>
                    var xValues = [50,60,70,80,90,100,110,120,130,140,150];
                    var yValues = [7,8,8,9,9,9,10,11,14,9,15];

                    new Chart("myCharts", {
                        type: "line",
                        data: {
                            labels: xValues,
                            datasets: [{
                                backgroundColor: "#3f4a5c",
                                borderColor: "rgba(0,0,0,0.1)",
                                data: yValues
                            }]
                        },
                        options: {
                            legend: {display: false},
                            scales: {
                                yAxes: [{ticks: {min: 6, max:16}}],
                            }
                        },
                    });
                </script>
            </div>
        </div>
    </section>
@endsection
