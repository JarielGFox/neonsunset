<script>
export default {
    data() {
        //ritorna i dati dell'oggetto del componente. E' settata a true all'inizio, è responsabile di mostrare il banner o meno
        return {
            showBanner: false,
        }
    },
    computed: {
        // le proprietà computed controllano se nel localStorage esistono cookiesAccepted o cookiesRejected
        userClickedOnCookiesBanner() {
            return localStorage.getItem('userClickedOnCookiesBanner');

        },
    },
    methods: {
        onCookieClick() {
            localStorage.setItem('userClickedOnCookiesBanner', true);
            this.showBanner = false;
        }
    },
    created() {
        this.showBanner = !this.userClickedOnCookiesBanner;
    }
}
</script>


<template>
    <div v-if="showBanner" class="cookie-banner">
        <p class="fs-5">Questo sito utilizza cookie per finalità di navigazione. Il rifiuto del consenso può rendere non
            disponibili alcune delle relative funzioni. Premi il pulsante <span class="text-warning">Accetta</span> per
            acconsentire o premi il pulsante <span class="text-warning">Rifiuta</span> per continuare senza accettare.</p>
        <button @click="onCookieClick">Accetta</button>
        <button @click="onCookieClick">Rifiuta</button>
    </div>
</template>

<style scoped>
/* voglio applicare lo stile solo a questo componente */

.cookie-banner {
    position: fixed;
    bottom: 100px;
    left: 0;
    width: 100%;
    background: #f9f9f9;
    padding: 20px;
    box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    background-color: #155a99;
    border: 1px solid black;
    color: #f1dada;
}

button {
    padding: 8px;
    background-color: #f54949;
    color: #f3eded;
    text-transform: uppercase;
    font-weight: 800;
    letter-spacing: 4px;
    border-radius: 10%;
    outline: none;
    margin-right: 10px;
}
</style>