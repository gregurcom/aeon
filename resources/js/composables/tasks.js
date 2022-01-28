import { ref } from 'vue'
import axios from 'axios'
import { useRouter } from 'vue-router'

export default function useTasks() {
    const task = ref([])
    const tasks = ref([])

    const errors = ref('')
    const router = useRouter()

    const getTasks = async () => {
        let response = await axios.get('/api/tasks')
        tasks.value = response.data.data
    }

    const getTask = async (id) => {
        let response = await axios.get(`/api/tasks/${id}`)
        task.value = response.data.data
    }

    const storeTask = async (data) => {
        errors.value = ''
        try {
            await axios.post('/api/tasks', data)
            await router.push({name: 'tasks'})
        } catch (e) {
            if (e.response.status === 422) {
                for (const key in e.response.data.errors) {
                    errors.value += e.response.data.errors[key][0] + ' ';
                }
            }
        }

    }

    const updateTask = async (id) => {
        errors.value = ''
        try {
            await axios.patch(`/api/tasks/${id}`, task.value)
            await router.push({ name: 'tasks' })
        } catch (e) {
            if (e.response.status === 422) {
                for (const key in e.response.data.errors) {
                    errors.value += e.response.data.errors[key][0] + ' ';
                }
            }
        }
    }

    const deleteTask = async (id) => {
        errors.value = ''
        try {
            await axios.delete(`/api/tasks/${id}`)
            await router.push({ name: 'tasks' })
        } catch (e) {
            if (e.response.status === 422) {
                for (const key in e.response.data.errors) {
                    errors.value += e.response.data.errors[key][0] + ' ';
                }
            }
        }
    }

    const doneTask = async (id) => {
        errors.value = ''
        try {
            await axios.patch(`/api/tasks/${id}/done`)
            await router.push({ name: 'tasks' })
        } catch (e) {
            if (e.response.status === 422) {
                for (const key in e.response.data.errors) {
                    errors.value += e.response.data.errors[key][0] + ' ';
                }
            }
        }
    }

    return {
        errors,
        task,
        tasks,
        getTask,
        getTasks,
        storeTask,
        updateTask,
        deleteTask,
        doneTask
    }
}
