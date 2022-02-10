<template>
    <div class="nav-buttons">
        <router-link :to="{ name: 'post.store' }">
            <button class="btn btn-outline-info mt-2">Write post</button>
        </router-link>
        <router-link :to="{ name: 'followed' }">
            <button class="btn btn-outline-info mt-2 button-followed">Followed</button>
        </router-link>
    </div>
    <div class="row mt-5 mb-3">
        <div class="col-md-3 col text-center">
            <div id="logo" class="mb-3">
                <img src='images/avatar.png' alt="avatar" class="circle">
            </div>
            <span class="fs-5">{{ user.name }}</span>
        </div>
        <div class="col-md-3 fs-5 stat">
            <div>
                Tasks: {{ user.tasks }}
            </div>
            <div>
                Goals: {{ user.goals }}
            </div>
            <div>
                Achievements: {{ user.achievements }}
            </div>
            <div>
                Posts: {{ user.posts }}
            </div>
            <template v-if="user.city || user.country">
                <div class="py-3">
                    Location: {{ user.city }} {{ user.country }}
                </div>
            </template>
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
import useUsers from "../composables/users";
import {onMounted} from "vue";
export default {
    setup() {
        const { errors, user, getAuthUser} = useUsers()
        onMounted(getAuthUser)

        return {
            errors,
            user,
            getAuthUser,
        }
    }
}
</script>

<style scoped>
#logo {
    text-align: center;
}

@media (max-width: 751px) {
    #logo img {
        width: 100px;
        height: 120px;
    }

    #chart-line {
        margin-top: 30px;
    }

    .stat {
        text-align: center;
        margin-top: 25px;
    }
}

@media (min-width: 768px) {
    .row {
        margin-top: 80px;
    }

    .button-followed {
        margin-left: 10px;
    }
}

.circle {
    object-fit: cover;
    border-radius:50%;
    width: 150px;
    height: 150px;
}
</style>
