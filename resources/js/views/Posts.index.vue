<template>
    <div>
        <div class="container grid gap-4 grid-cols-3 grid-rows-3 cursor-pointer">
            <PostCard v-for="post in posts" :key="post.id" :post="post" />
        </div>
        <div class="container">
                <ul class="flex justify-center gap-3 mt-2">
                    <li  v-for="n in lastPage" :key="n" class="border-dashed  border-orange-500 hover:bg-orange-500 border-2 rounded-lg font-bold cursor-pointer p-2 flex justify-center" >{{n}}</li>
                </ul>
        </div>
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
            posts:[],
            lastPage:0,
            currentPage:1,
        }
    },
    methods:{
        fetchPosts(){

            axios.get('/api/post')
                .then(res=>{
                    const { posts }= res.data
                    const {data,last_page,current_page} =posts
                    this.posts = res.data.posts.data
                    this.currentPage = current_page
                    this.lastPage= last_page
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
