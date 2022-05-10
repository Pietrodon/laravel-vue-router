<template>
  <div>
      <header>
        <h1>IL MIO BOOLPRESS</h1>
        <nav>
            <ul>
                <li>HOME</li>
                <li>POST</li>
                <li>CATEGORIES</li>
            </ul>
        </nav>
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
