import { ref } from 'vue'
import axios from 'axios'
import { useRouter } from 'vue-router'

export default function usePosts() {
    const post = ref([])
    const posts = ref([])

    const errors = ref('')
    const router = useRouter()

    const getPosts = async () => {
        let response = await axios.get('/api/posts')
        posts.value = response.data.data
    }

    const getPost = async (id) => {
        let response = await axios.get(`/api/posts/${id}`)
        post.value = response.data.data
    }

    const storePost = async (data) => {
        errors.value = ''
        try {
            await axios.post('/api/posts', data)
            await router.push({name: 'home'})
        } catch (e) {
            if (e.response.status === 422) {
                for (const key in e.response.data.errors) {
                    errors.value += e.response.data.errors[key][0] + ' ';
                }
            }
        }

    }

    const updatePost = async (id) => {
        errors.value = ''
        try {
            await axios.patch(`/api/posts/${id}`, post.value)
            await router.push({ name: 'home' })
        } catch (e) {
            if (e.response.status === 422) {
                for (const key in e.response.data.errors) {
                    errors.value += e.response.data.errors[key][0] + ' ';
                }
            }
        }
    }

    const deletePost = async (id) => {
        errors.value = ''
        try {
            await axios.delete(`/api/posts/${id}`)
            await router.push({ name: 'home' })
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
        post,
        posts,
        getPost,
        getPosts,
        storePost,
        updatePost,
        deletePost
    }
}
