<template>
    <HomeBanner />
    <Categories />
    <MoreItems />
    <Footer />
</template>

<script>
import Header from '../Components/Header.vue';
import HomeBanner from '../Components/HomeBanner.vue';
import Categories from '../Components/Categories.vue';
import MoreItems from '../Components/MoreItems.vue';
import Footer from '../Components/Footer.vue';

export default {
    name: 'MainComponent',  
    components: {
        Header, // Register your component here
        HomeBanner,
        Categories,
        MoreItems,
        Footer
    }
}
</script>
