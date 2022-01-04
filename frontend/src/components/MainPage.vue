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
import Product from "./Product";
import Header from "./Header";
import Footer from "./Footer";

export default {
  name: "MainPage",
  components: {
    Footer,
    Header,
    Product
  },
  beforeCreate: function () {
    document.body.className = 'main';
  },
  data() {
    return {
      products: [
        {
          id: 1,
          title: 'Карты, деньги, два ствола',
          year: '1998',
          description: 'Четверке друзей из Лондона нужно где-то найти 500 000 фунтов...',
          rate: 8.5,
          image: require('../assets/images/posters/1.jpg'),
          age: 16,
          genre: '\n' +
              'криминал, комедия, боевик'
        },
        {
          id: 2,
          title: 'Большой куш',
          year: '2000',
          description: 'Описание...',
          rate: 8.5,
          image: require('../assets/images/posters/2.jpg'),
          age: 16,
          genre: '\n' +
              'криминал, комедия, боевик'
        },
        {
          id: 3,
          title: 'Меч короля Артура',
          year: ' 2017',
          description: 'Описание...',
          rate: 7.1,
          image: require('../assets/images/posters/3.jpg'),
          age: 16,
          genre: '\n' +
              'криминал, комедия, боевик'
        },
        {
          id: 4,
          title: 'Рок-н-рольщик',
          year: '2008',
          description: 'Описание...',
          rate: 7.8,
          image: require('../assets/images/posters/4.jpg'),
          age: 16,
          genre: '\n' +
              'криминал, комедия, боевик'
        },
        {
          id: 5,
          title: 'Револьвер',
          year: '2005',
          description: 'Описание...',
          rate: 7.4,
          image: require('../assets/images/posters/5.jpg'),
          age: 16,
          genre: '\n' +
              'криминал, комедия, боевик'
        },
        {
          id: 6,
          title: 'Джентльмены',
          year: '2019',
          description: 'Описание...',
          rate: 8.5,
          image: require('../assets/images/posters/6.jpg'),
          age: 16,
          genre: '\n' +
              'криминал, комедия, боевик'
        }
      ]
    }
  }
}
</script>

<style scoped src="../assets/styles/main_style.css">

</style>