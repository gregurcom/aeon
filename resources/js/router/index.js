import { createRouter, createWebHistory } from 'vue-router'

import Task from '../components/Task.vue'
import Goal from '../components/Goal.vue'
import Blog from '../components/Blog.vue'
import Article from '../components/Article.vue'
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
        path: '/articles/:id',
        name: 'article',
        component: Article,
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
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})
