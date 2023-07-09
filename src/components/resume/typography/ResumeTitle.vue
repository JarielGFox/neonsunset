<script>
export default {
    props: {
        title: {
            type: String,
            default: '',
        }
    }
}
</script>

<template>
    <h2 class="text-light fw-bolder">{{ title }}</h2>
</template>

<style></style>