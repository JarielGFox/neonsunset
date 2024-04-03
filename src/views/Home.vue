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
    <main class="min-vh-100">
        <Header />
        <About />
    </main>
</template>

<style></style>