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
        <router-link :to="to" class="nav-link text-light">
            <slot />
        </router-link>
    </li>
</template>

<style></style>