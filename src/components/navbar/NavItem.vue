<script>
export default {
    props: {
        to: {
            type: String,
            required: true
        }
    }
}
</script>

<template>
    <li class="nav-item">
        <router-link :to="to" class="nav-item-custom nav-link text-pink-light">
            <slot />
        </router-link>
    </li>
</template>

<style scoped>
.nav-item-custom:hover,
.nav-item-custom:active {
    color: #155a99;
}
</style>