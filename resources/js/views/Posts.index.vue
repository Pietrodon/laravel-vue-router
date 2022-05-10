<template>
    <div class="container grid gap-4 grid-cols-3 grid-rows-3">
        <!-- <div class="container border-2 border-orange-500 rounded-lg p-3 flex items-center justify-center hover:bg-orange-500" v-for="post in posts" :key="post.id">
            {{post.title}}
        </div> -->
        <PostCard v-for="post in posts" :key="post.id" :post="post" />
    </div>
</template>

<script>
import PostCard from '../views/PostCard.vue'

export default {
    components:{
        PostCard
    },
    data(){
        return{
            posts:[]
        }
    },
    methods:{
        fetchPosts(){

            axios.get('/api/post')
                .then(res=>{
                    const { posts }= res.data
                    this.posts = posts
                })
                .catch(err =>{
                    this.fetchPosts()
                })
        }
    },
    mounted(){
        this.fetchPosts()
    }

}
</script>

<style>

</style>
