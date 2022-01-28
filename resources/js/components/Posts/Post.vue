<template>
    <div id="feed">
        <router-link v-if="post.can.update" :to="{ name: 'post.update', params: { id: post.id } }">
            <button class="btn btn-outline-info mt-2">Edit</button>
        </router-link>
        <button v-if="post.can.delete" @click="delPost(post.id)" class="btn btn-outline-danger mt-2 button-followed">Delete</button>
        <div class="post-image text-center">
            <a href="#" class="h3 text-decoration-none text-white d-block">{{ post.title }}</a>
            <img :src="`../images/${post.image}`" class="mt-3 mb-4" width="400" height="200">
        </div>
        <p class="text-muted">{{ post.author }} {{ post.created_at }}</p>
        <p>
            {{ post.body }}
        </p>
    </div>
</template>

<script>
import usePosts from "../../composables/posts";
import {onMounted} from "vue";
export default {
    props: {
        id: {
            required: true,
            type: String
        }
    },
    setup(props) {
        const { errors, post, getPost,  deletePost} = usePosts()
        onMounted(getPost(props.id))

        const delPost = async (id) => {
            await deletePost(id)
        }

        return {
            errors,
            post,
            getPost,
            delPost
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
@media (min-width: 768px) {
    .button-followed {
        margin-left: 10px;
    }
}
</style>
