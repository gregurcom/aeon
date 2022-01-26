<template>
    <div class="nav-buttons">
        <button class="btn btn-outline-info mt-2">Write post</button>
        <button class="btn btn-outline-info mt-2 button-followed">Followed</button>
    </div>
    <div class="row mt-5 mb-3">
        <div class="col-md-3 col text-center">
            <div id="logo" class="mb-2">
                <img src='images/avatar.png' alt="avatar" class="circle">
            </div>
            <span class="fs-5">John Doe</span>
        </div>
        <div class="col-md-3 fs-5 stat">
            <div>
                Tasks: 30 (20 done)
            </div>
            <div>
                Goals: 4
            </div>
            <div>
                Achievements: 2
            </div>
            <div>
                Posts: 0
            </div>
            <div class="py-3">
                City: Balti (Moldova)
            </div>
        </div>
        <div class="col-md-4 col">
            <div id="chart-line">
                <canvas id="myCharts" style="width:100% !important;max-width:650px; height: 200px;"></canvas>
                <component :is="'script'">
                    let xValues = [50,60,70,80,90,100,110,120,130,140,150];
                    let yValues = [7,8,8,9,9,9,10,11,14,9,15];

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
                </component>
            </div>
        </div>
    </div>
</template>

<script>

</script>

