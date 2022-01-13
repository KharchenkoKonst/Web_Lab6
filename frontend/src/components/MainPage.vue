<template>
  <section>
    <Header></Header>
    <main class="container">
      <section class="products">
        <div class="v-for" v-for="product in products">
          <Product :product="product"></Product>
        </div>
      </section>
    </main>
    <Footer></Footer>
  </section>
</template>

<script>
export default {
    name: "main",
    beforeCreate: function() {
        document.body.className = 'main';
    },
    data(){
        return{
            elements: []
        }
    },
    created() {
        this.$http.get('/products')
            .then(response => this.elements = response.data)
    }
}
</script>

<style scoped src="../assets/styles/main_style.css">

</style>
