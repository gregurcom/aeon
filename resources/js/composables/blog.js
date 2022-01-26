import { ref } from 'vue'
import axios from 'axios'
import { useRouter } from 'vue-router'

export default function useArticles() {
    const article = ref([])
    const articles = ref([])

    const errors = ref('')
    const router = useRouter()

    const getArticles = async () => {
        let response = await axios.get('/api/articles')
        articles.value = response.data.data
    }

    const getArticle = async (id) => {
        let response = await axios.get(`/api/articles/${id}`)
        article.value = response.data.data
    }

    const storeArticle = async (data) => {
        errors.value = ''
        try {
            await axios.post('/api/articles', data)
            await router.push({name: 'articles'})
        } catch (e) {
            if (e.response.status === 422) {
                for (const key in e.response.data.errors) {
                    errors.value += e.response.data.errors[key][0] + ' ';
                }
            }
        }

    }

    const updateArticle = async (id) => {
        errors.value = ''
        try {
            await axios.patch(`/api/articles/${id}`, article.value)
            await router.push({ name: 'articles' })
        } catch (e) {
            if (e.response.status === 422) {
                for (const key in e.response.data.errors) {
                    errors.value += e.response.data.errors[key][0] + ' ';
                }
            }
        }
    }

    const deleteArticle = async (id) => {
        errors.value = ''
        try {
            await axios.delete(`/api/articles/${id}`)
            await router.push({ name: 'articles' })
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
        article,
        articles,
        getArticle,
        getArticles,
        storeArticle,
        updateArticle,
        deleteArticle
    }
}
