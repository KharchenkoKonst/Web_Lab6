<template>
      <section class="product-item">
        <div>
          <img :src=product.image alt="image">
        </div>
        <h4>
            <div class = "title">
                <router-link :to="{name: 'Content', params: {product: product, id: product.id}}">
                {{ product.title }}
                </router-link>
            </div>

            <div class = "year">
              {{product.year}}
            </div>
        </h4>
        <p>
          {{product.description}}
        </p>
        <div>
          <span class="price">{{ product.rate }}</span>
        </div>
      </section>
</template>

<script>
export default {
  name: "Product",
  props: ['product']
}
</script>

<style scoped src="../assets/styles/product_style.css">

</style>