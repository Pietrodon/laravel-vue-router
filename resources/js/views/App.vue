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
      <Posts />
      <footer>
          <nav>
              <ul>
                  <li>PRODOTTI</li>
                  <li>CONTATTI</li>
                  <li>SOCIAL</li>
              </ul>
          </nav>
      </footer>


  </div>
</template>

<script>
import Posts from './Posts.index.vue'
export default {
    components:{
        Posts
    }
}
</script>

<style>
    ul{
        display: flex;
        gap:5px;
    }
    li{
        list-style: none;
        display: flex;
    }

</style>
