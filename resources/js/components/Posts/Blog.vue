<template>
    <div id="feed">
        <div class="row mt-3" v-for="post in posts">
            <div class="col-md-8 col">
                <router-link :to="{ name: 'post', params: { id: post.id } }" class="h3 text-decoration-none text-white">{{ post.title }}</router-link>
                <p class="description mt-2">
                    {{ post.introduction }}
                </p>
                <p class="text-muted">{{ post.author }} {{ post.created_at }}</p>
            </div>
                <div class="post-image col-md-4 col text-center">
                <img :src="`images/${post.image}`" width="200" height="150">
            </div>
        </div>
    </div>
</template>

<script>
import usePosts from '../../composables/posts'
import { onMounted } from 'vue';

export default {
    setup() {
        const { posts, getPosts} = usePosts()
        onMounted(getPosts)

        return {
            posts,
        }
    }
}
</script>

<style scoped>
#feed {
    margin: 35px;
}

@media (max-width: 600px) {
    .post-image img {
        width: 150px;
        height: 100px;
    }

    #feed a {
        font-size: 15px;
    }

    .text-muted {
        font-size: 13px;
    }
}

@media (max-width: 775px) {
    .description {
        display: none;
    }

    .text-muted {
        margin-top: 8px;
    }
}
</style>
