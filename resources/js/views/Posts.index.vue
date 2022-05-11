<template>
    <div>
        <div class="container grid gap-4 grid-cols-3 grid-rows-3 cursor-pointer">
            <PostCard v-for="post in posts" :key="post.id" :post="post" />
        </div>
        <div class="container">
            <nav>
                <ul class="flex justify-center gap-3 mt-2">
                    <li class="border-dashed  border-orange-500 hover:bg-orange-500 border-2 rounded-lg font-bold cursor-pointer p-2 flex justify-center">1</li>
                    <li class="border-dashed  border-orange-500 hover:bg-orange-500 border-2 rounded-lg font-bold cursor-pointer p-2 flex justify-center">2</li>
                    <li class="border-dashed  border-orange-500 hover:bg-orange-500 border-2 rounded-lg font-bold cursor-pointer p-2 flex justify-center">3</li>
                    <li class="border-dashed  border-orange-500 hover:bg-orange-500 border-2 rounded-lg font-bold cursor-pointer p-2 flex justify-center">4</li>
                    <li class="border-dashed  border-orange-500 hover:bg-orange-500 border-2 rounded-lg font-bold cursor-pointer p-2 flex justify-center">5</li>
                </ul>
            </nav>
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
