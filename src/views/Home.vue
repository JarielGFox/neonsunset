<script>
import Header from '../components/Header.vue';
import About from '../views/About.vue';

export default {
    components: {
        Header, About
    },
    name: 'Home',
    mounted() {
        document.title = 'Giovanni Crudele - Home';
    }
}
</script>

<template>
    <div id="home">
        <Header></Header>
        <About></About>
    </div>
</template>

<style>
</style>