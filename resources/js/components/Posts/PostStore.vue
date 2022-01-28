<template>
<div class="mx-5 my-2">
    <form @submit.prevent="savePost" enctype="multipart/form-data" class="mt-5">
        <input v-model="form.title" type="text" name="title" placeholder="Title..." class="form-control bg-transparent">
        <input class="form-control mt-2 bg-transparent" ref="file" name="image" v-on:change="handleFileUpload()"  type="file">
        <textarea v-model="form.introduction" name="introduction" class="form-control bg-transparent mt-2" placeholder="Introduction..."></textarea>
        <textarea v-model="form.body" name="body" class="form-control bg-transparent mt-2" rows="8" placeholder="Body..."></textarea>

        <button type="submit" class="form-control btn btn-outline-dark mt-3">Create</button>
    </form>
</div>
</template>

<script>
import usePosts from '../../composables/posts'
import { reactive } from "vue";
import { ref} from "vue"

export default {
    setup() {
        const file = ref(null)
        const form = reactive({
            'title': '',
            'image': '',
            'introduction': '',
            'body': '',
        })

        const { storePost } = usePosts()

        const handleFileUpload = async() => {
            // debugger;
            console.log("selected file",file.value.files)
            //Upload to server

        }

        const savePost = async () => {
            await storePost({...form, 'file': file.value.files});
        }

        return {
            form,
            savePost,
            handleFileUpload,
            file
        }
    }
}
</script>
