<template>
    <template v-if="goals.length">
        <template v-for="goal in goals" :key="goal.id">
            <div class="d-flex task align-items-center">
                <div>
                    {{ goal.title }} <span class="text-muted">{{ goal.finished_at }}</span>
                </div>
                <div class="ms-auto">
                    <a class="text-decoration-none text-info">Edit</a>
                    <a @click="delGoal(goal.id)" class="text-decoration-none text-danger">Delete</a>
                </div>
            </div>
        </template>
    </template>
    <template v-else>
        <div class="text-center mt-5">
            You don't have goals yet
        </div>
    </template>
    <form @submit.prevent="saveGoal" class="w-100">
<!--        <div>-->
<!--            <input type="datetime-local" class="w-100 bg-dark" name="finished_at" v-model="form.finished_at">-->
<!--        </div>-->
        <div>
            <input type="text" name="title" class="w-100 bg-dark border-0" placeholder="Write a goal..." v-model="form.title">
        </div>
    </form>
</template>

<script>
import useGoals from '../../composables/goals'
import { reactive } from "vue";
import { onMounted } from 'vue';

export default {
    setup() {
        const { goals, getGoals, storeGoal, deleteGoal } = useGoals()
        const form = reactive({
            'title': '',
            'finished_at': '',
        })
        const saveGoal = async () => {
            await storeGoal({...form});
            await getGoals()
            form.title = ''
            form.finished_at = ''
        }
        const delGoal = async (id) => {
            await deleteGoal(id);
            await getGoals();
        }


        onMounted(getGoals)

        return {
            goals,
            form,
            saveGoal,
            delGoal,
        }
    }
}
</script>

<style scoped>
.task {
    font-size: 20px;
    list-style-type: none;
    transition: 0.2s;
    margin: 10px 40px 0px 40px;
}

.task:hover {
    cursor: pointer;
    background-color: slategrey;
    height: 30px;
    padding-top: 1px;
    padding-left: 8px;
    padding-right: 8px;
}

li:hover > .text-muted {
    color: white;
}

.task:hover > .email{
    color: white !important;
}

input[type=radio] {
    height: 1em;
    width: 20px;
}

input {
    border-right: none;
}

#radio {
    margin-top: 8px;
}

#radio #public {
    margin-left: 40px;
}

form {
    margin-top:auto;
    position: -webkit-sticky;
    position: sticky;
    bottom: 0;
}

form input {
    padding: 15px;
}

.text-info, .text-danger {
    margin-right: 30px;
}

.text-info {
    margin-left: 15px;
}

input[type=checkbox] {
    transform: scale(1.5);
}

strike {
    text-decoration-color: slategrey;
    text-decoration-thickness: 1px;
}

.red {
    display: none;
}

.blue {
    display: block;
}
</style>
