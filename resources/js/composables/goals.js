import { ref } from 'vue'
import axios from 'axios'
import { useRouter } from 'vue-router'

export default function useGoals() {
    const goal = ref([])
    const goals = ref([])

    const errors = ref('')
    const router = useRouter()

    const getGoals = async () => {
        let response = await axios.get('/api/goals')
        goals.value = response.data.data
    }

    const getGoal = async (id) => {
        let response = await axios.get(`/api/goals/${id}`)
        goal.value = response.data.data
    }

    const storeGoal = async (data) => {
        errors.value = ''
        try {
            await axios.post('/api/goals', data)
            await router.push({name: 'goals'})
        } catch (e) {
            if (e.response.status === 422) {
                for (const key in e.response.data.errors) {
                    errors.value += e.response.data.errors[key][0] + ' ';
                }
            }
        }

    }

    const updateGoal = async (id) => {
        errors.value = ''
        try {
            await axios.patch(`/api/goals/${id}`, goal.value)
            await router.push({ name: 'goals' })
        } catch (e) {
            if (e.response.status === 422) {
                for (const key in e.response.data.errors) {
                    errors.value += e.response.data.errors[key][0] + ' ';
                }
            }
        }
    }

    const deleteGoal = async (id) => {
        errors.value = ''
        try {
            await axios.delete(`/api/goals/${id}`)
            await router.push({ name: 'goals' })
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
        goal,
        goals,
        getGoal,
        getGoals,
        storeGoal,
        updateGoal,
        deleteGoal
    }
}
