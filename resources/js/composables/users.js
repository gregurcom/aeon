import { ref } from 'vue'
import axios from 'axios'

export default function useUsers() {
    const user = ref([])
    const users = ref([])

    const errors = ref('')

    const getAuthUser = async () => {
        let response = await axios.get(`/api/users/auth`)
        user.value = response.data.data
    }

    return {
        errors,
        user,
        users,
        getAuthUser,
    }
}
