<template>
    <template v-if="tasks.length">
        <template v-for="task in tasks" :key="task.id">
            <div class="d-flex task align-items-center">
                <div>
                    <template v-if="task.done === 1">
                        <strike class="text-muted">{{ task.title }} <span class="mt-2">{{ task.finished_at }}</span></strike>
                    </template>
                    <template v-else>
                        {{ task.title }} <span class="text-muted mt-2">{{ task.finished_at }}</span>
                    </template>
                </div>
                <div class="ms-auto">
                    <a class="text-decoration-none text-info">Edit</a>
                    <a @click="delTask(task.id)" class="text-decoration-none text-danger">Delete</a>
                    <template v-if="task.done === 1">
                        <a @click="donTask(task.id)" class="text-decoration-none text-success"><input type="checkbox" checked></a>
                    </template>
                    <template v-else>
                        <a @click="donTask(task.id)" class="text-decoration-none text-success"><input type="checkbox"></a>
                    </template>
                </div>
            </div>
        </template>
    </template>
    <template v-else>
        <div class="text-center mt-5">
            You don't have tasks yet
        </div>
    </template>
        <form @submit.prevent="saveTask" class="w-100">
<!--            <div id="radio">-->
<!--                <label for="private-radio" id="private">Private</label>-->
<!--                <input type="radio" id="private-radio" name="visibility" value="private" v-model="form.visibility">-->

<!--                <label for="public-radio" id="public">Public</label>-->
<!--                <input type="radio" id="public-radio" name="visibility" value="public" v-model="form.visibility">-->
<!--            </div>-->
<!--            <div>-->
<!--                <input type="datetime-local" class="w-100 bg-dark" name="finished_at" v-model="form.finished_at">-->
<!--            </div>-->
            <div>
                <input type="text" name="title" class="w-100 bg-dark border-bottom-0" placeholder="Write a task..." v-model="form.title">
            </div>
        </form>
</template>
<script>
import useTasks from '../composables/tasks'
import { reactive } from "vue";
import { onMounted } from 'vue';

export default {
    setup() {
        const { tasks, getTasks, storeTask, deleteTask, doneTask } = useTasks()
        const form = reactive({
            'title': '',
            'finished_at': '',
        })
        const saveTask = async () => {
            await storeTask({...form});
            await getTasks()
            form.title = ''
            form.finished_at = ''
        }
        const delTask = async (id) => {
            await deleteTask(id);
            await getTasks();
        }

        const donTask = async (id) => {
            await doneTask(id);
            await getTasks();
        }

        onMounted(getTasks);

        return {
            tasks,
            form,
            saveTask,
            delTask,
            donTask,
        }
    }
}
</script>
