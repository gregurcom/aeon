<template>
    <div id="feed">
        <div class="article-image text-center">
            <a href="#" class="h3 text-decoration-none text-white d-block">{{ article.title }}</a>
            <img :src="`../images/${article.image}`" class="mt-3 mb-4" width="400" height="200">
        </div>
        <p class="text-muted">{{ article.author }} {{ article.created_at }}</p>
        <p>
            {{ article.body }}
        </p>
    </div>
</template>

<script>
import useArticles from "../composables/blog";
import {onMounted} from "vue";
export default {
    props: {
        id: {
            required: true,
            type: String
        }
    },
    setup(props) {
        const { errors, article, getArticle } = useArticles()
        onMounted(getArticle(props.id))

        return {
            errors,
            article,
            getArticle
        }
    }
}
</script>
