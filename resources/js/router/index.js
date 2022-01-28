import { createRouter, createWebHistory } from 'vue-router'

import Task from '../components/Tasks/Task.vue'
import Goal from '../components/Goals/Goal.vue'
import Blog from '../components/Posts/Blog.vue'
import Post from '../components/Posts/Post.vue'
import PostStore from '../components/Posts/PostStore.vue'
import PostUpdate from '../components/Posts/PostUpdate.vue'
import Home from '../components/Home.vue'
import Achievement from '../components/Achievement.vue'

const routes = [
    {
        path: '/tasks',
        name: 'tasks',
        component: Task
    },
    {
        path: '/goals',
        name: 'goals',
        component: Goal
    },
    {
        path: '/posts/:id/view',
        name: 'post',
        component: Post,
        props: true
    },
    {
        path: '/posts/store',
        name: 'post.store',
        component: PostStore,
    },
    {
        path: '/posts/:id/update',
        name: 'post.update',
        component: PostUpdate,
        props: true
    },
    {
        path: '/blog',
        name: 'blog',
        component: Blog
    },
    {
        path: '/home',
        name: 'home',
        component: Home
    },
    {
        path: '/achievements',
        name: 'achievements',
        component: Achievement
    },
    {
        path: '/followed',
        name: 'followed',
        component: Task
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})
