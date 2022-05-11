<template>
    <div class="container grid gap-4 grid-cols-3 grid-rows-3">
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
                    this.posts = res.data.posts.data
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
