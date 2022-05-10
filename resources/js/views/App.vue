<template>
  <div >
      <header>
          <div  class="container flex justify-center">
              <h1>IL MIO BOOLPRESS</h1>
          </div>
          <div class="container flex justify-center">
            <nav>
                <ul class="flex gap-3">
                    <li class="flex">HOME</li>
                    <li class="flex">POST</li>
                    <li class="flex ">CATEGORIES</li>
                </ul>
            </nav>
          </div>
      </header>
      <div>
          <PostsController />
      </div>
      <footer>
          <h1>FOOTER</h1>
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
