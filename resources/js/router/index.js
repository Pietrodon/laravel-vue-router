import Vue from 'Vue'
import VueRouter from 'vue-router'


Vue.use(VueRouter)

import Posts from '../pages/Posts.index.vue'
import Post_show from '../pages/Post.show.vue'


const routes =[
    {
        path:'/posts',
        name:'posts.index',
        component:Posts
    },
    {
        path:'/post',
        name:'posts.show',
        component:Posts
    }
]


const router =new VueRouter({
    mode: 'history',
    routes: routes
})

export default router
