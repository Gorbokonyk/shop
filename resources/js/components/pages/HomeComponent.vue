<template>
    <div>
        <section class="main_baner">
            <div class="container justify-content-center">
                <h1>Welcome to Jerky!</h1>
                <p class="lead">Thank you so much for visiting. This web site is currently developing.</p>
                <a href="/product">product</a>
            </div>
        </section>
        <info></info>
        <section class="sets">
            <div class="container-fluid">
                <div class="row">
                    <img src="https://img5.goodfon.ru/original/1366x768/f/9c/les-nebo-zakat-gory-ozero-otrazhenie-bereg-vershiny-vecher-e.jpg?d=1" class="cont-baner img-fluid" alt="">
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h3>Beef Jerky im Set</h3>
                        <p>Zum Kennenlernen sind unsere Beef Jerky Sets genau richtig. Es gibt das Kennenlernset mit den drei beliebtesten Sorten oder aber das Probierset mit allen unseren Sorten.</p>
                    </div>
                </div>
                <p class="text-left bold">Beef Jerky Sets</p>
                <hr>
                <div class="set_rortator row">
                    <product-cart></product-cart>
                    <product-cart></product-cart>
                    <product-cart></product-cart>
                    <product-cart></product-cart>
                </div>
            </div>
        </section>
        <social></social>
    </div>
</template>

<script>
    import Info from '../../components/ArticleComponent'
    import Product from '../../components/ProductCartComponent'
    import Social from '../../components/SocialComponent'

    export default {
        name: "HomeComponent",


        components: {
            'info': Info,
            'product-cart': Product,
            'social': Social,

        }
    }
</script>

<style scoped>

</style>