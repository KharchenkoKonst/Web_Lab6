<template>
    <div id="wrap">
        <header class=main-header>

            <img class="main-header__img" src="../assets/images/logo.png" alt=""/>

            <div class="main-header__text">
                <h1>SnatchTV</h1>
            </div>

            <form action="" method="post" class="search">
                <input type="search" name="" placeholder="поиск" class="input"/>
                <input type="submit" name="" value="" class="submit"/>
            </form>

            <nav>
                <a href="#"><h2 class="about-header">О нас</h2></a>
                <a href="#"><h2 class="about-header">Личный кабинет</h2></a>
                <a href="#">
                    <h2 class="about-header">Корзина
                        <app-cart></app-cart>
                    </h2>
                </a>
            </nav>
        </header>
    </div>
</template>

<script>
export default {
    name: "Header"
}
</script>

<style src="../assets/styles/header_style.css">
</style>
