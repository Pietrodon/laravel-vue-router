<template>
    <div class="container">
        <div v-for="post in posts" :key="post.id">
            {{post.title}}
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            posts:[]
        }
    },
    methods:{
        fetchPosts(){

            axios.get('/api/post')
                .then(res=>{
                    console.log(res.data)
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
