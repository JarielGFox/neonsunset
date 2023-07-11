<script>
import NavItem from './navbar/NavItem.vue';

export default {
    components: {
        NavItem
    }
}
</script>

<template>
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container px-5">
            <router-link :to="{ name: 'home' }" class="navbar-brand">
                <span class="fw-bolder text-sea">Giovanni Crudele</span>
            </router-link>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                    <NavItem to="/">Home</NavItem>
                    <NavItem to="/resume">Competenze</NavItem>
                    <NavItem to="/projects">Progetti</NavItem>
                    <NavItem to="/contacts">Contatti</NavItem>
                </ul>
            </div>
        </div>
    </nav>
</template>

<style scoped>
nav {
    background-color: #1a0d2c;
}
</style>