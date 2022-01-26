<template>
    <div id="feed">
        <div class="row mt-3" v-for="article in articles">
            <div class="col-md-8 col">
                <router-link :to="{ name: 'article', params: { id: article.id } }" class="h3 text-decoration-none text-white">{{ article.title }}</router-link>
                <p class="description mt-2">
                    {{ article.introduction }}
                </p>
                <p class="text-muted">{{ article.author }} {{ article.created_at }}</p>
            </div>
            <div class="article-image col-md-4 col text-center">
                <img :src="`images/${article.image}`" width="200" height="150">
            </div>
        </div>
    </div>
</template>

<script>
import useArticles from '../composables/blog'
import { onMounted } from 'vue';

export default {
    setup() {
        const { articles, getArticles} = useArticles()


        onMounted(getArticles)

        return {
            articles,
        }
    }
}
</script>
