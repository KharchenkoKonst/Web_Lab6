<template>
    <section class="content">
        <Header></Header>
        <main class="container">
            <div class="product-title">
                <h1>{{ product.title }}</h1>
            </div>

            <div class="info">
                <div class="product-image">
                    <img :src=product.image class="book-img-cover" alt="">
                </div>

                <div class="product-description">
                    <div id="age_dopusk" title="Рекомендуемый возраст">{{ product.age }}+</div>
                    <div class="authors">Год: {{ product.year }}</div>
                    <div class="genre">Жанр: {{ product.genre }}</div>

                    <div class="buying">
                        <div class="buying-price">
                            <div class="buying-rate-text">Рейтинг: {{ product.rate }}</div>
                        </div>
                        <a @click="addToCart(element)" class="btn"><span
                            class="text">Добавить <span>в корзину</span></span></a>

                    </div>
                </div>
                <hr/>


                <div class="product-about">
                    <h4>Аннотация к фильму {{ product.author }}: "{{ product.title }}"</h4>
                    <div class="annotation">
                        <p>
                            {{ product.description }}
                        </p>
                    </div>
                </div>
            </div>

        </main>
        <Footer></Footer>
    </section>
</template>

<script>
import Footer from "./Footer";
import Header from "./Header";

export default {
    name: "item_page",
    components: {
        // eslint-disable-next-line vue/no-unused-components
        Footer,
        // eslint-disable-next-line vue/no-unused-components
        Header
    },
    beforeCreate: function() {
        document.body.className = 'ContentPage';
    },
    methods: {
        addToCart(product){
            const params = {
                id: product.id, count: 1, userId: localStorage.userId
            }
            this.$http.post('/cart', params)
        }
    },
    data() {
        return {
            element: null
        }
    },
    created() {
        const id = this.$route.params.id
        this.$http.get('/products/' + id)
            .then(response => this.element = response.data)
    }
}
</script>

<style scoped src="../assets/styles/content-style.css">

</style>
