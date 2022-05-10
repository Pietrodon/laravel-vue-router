<template>
  <div class="" >
      <header>
          <div  class="container flex justify-center">
              <h1 class="text-2xl font-bold">IL MIO BOOLPRESS</h1>
          </div>
          <div class="container flex justify-center mb-2">
            <nav class="flex justify-center space-x-4">
                <a href="#" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-orange-500 hover:text-slate-900">HOME</a>
                <a href="#" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-orange-500 hover:text-slate-900">POST</a>
                <a href="#" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-orange-500 hover:text-slate-900">CATEGORY</a>
            </nav>
          </div>
      </header>
      <div>
          <PostsController />
      </div>
      <footer>
        <div class="container flex justify-center">
            <nav class="flex justify-center space-x-4 mb-2 mt-2">
                <a href="#" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-orange-500 hover:text-slate-900">CONTACT</a>
                <a href="#" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-orange-500 hover:text-slate-900">SOCIAL</a>
            </nav>
        </div>
      </footer>
  </div>
</template>

<script>
import PostsController from './Posts.index.vue'
export default {
    components:{
        PostsController
    }
}
</script>

<style>

</style>
