<template>
    <div class="mx-5 my-2">
        <form @submit.prevent="upPost(post.id)" enctype="multipart/form-data" class="mt-5">
            <input v-model="post.title" type="text" name="title" placeholder="Title..." class="form-control bg-transparent">
            <input class="form-control mt-2 bg-transparent" ref="file" name="image" v-on:change="handleFileUpload()"  type="file">
            <textarea v-model="post.introduction" name="introduction" class="form-control bg-transparent mt-2" placeholder="Introduction..."></textarea>
            <textarea v-model="post.body" name="body" class="form-control bg-transparent mt-2" rows="8" placeholder="Body..."></textarea>

            <button type="submit" class="form-control btn btn-outline-dark mt-3">Update</button>
        </form>
    </div>
</template>

<script>
import usePosts from '../../composables/posts'
import {onMounted} from "vue";
import { ref} from "vue"

export default {
    props: {
        id: {
            required: true,
            type: String
        }
    },
    setup(props) {
        const { errors, post, getPost,  updatePost} = usePosts()
        const file = ref(null)

        const handleFileUpload = async() => {
            // debugger;
            console.log("selected file",file.value.files)
            //Upload to server

        }

        onMounted(getPost(props.id))

        const upPost = async (id) => {
            await updatePost(id)
        }

        return {
            errors,
            post,
            getPost,
            upPost
        }
    }
}
</script>
