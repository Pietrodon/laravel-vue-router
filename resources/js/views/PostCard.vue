<template>
    <div class="border-2 border-orange-500 rounded-lg p-3 flex items-center justify-center hover:bg-orange-500">
    <div class="">
        <img src="https://picsum.photos/500/250" alt="">
        <h2 class="font-bold">TITOLO DEL POST: <br> "{{post.title}}"</h2>
        <p>
            <span class="font-bold">ANTICIPAZIONE CONTENUTO:</span>
            <br>
            {{post.description}}
        </p>
        <p>
            <span class="font-bold"> DATA PUBBLICAZIONE:</span>
            <br>
            {{ post.published_at}}
        </p>
        <!-- <p v-if="post.category">
            <span class="font-bold"> CATEGORIA:</span>
            <br>
            {{ post.category.name}}
        </p> -->
    </div>

    </div>

</template>

<script>
export default {
    props:{
        post:{
            type:Object,
            required: false
        }
    }
}
</script>

<style>

</style>
