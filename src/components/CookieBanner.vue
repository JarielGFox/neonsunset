<script>
export default {
    data() {
        //ritorna i dati dell'oggetto del componente. E' settata a true all'inizio, è responsabile di mostrare il banner o meno
        return {
            showBanner: !(this.cookiesAccepted || this.cookiesRejected)
        }
    },
    computed: {
        // le proprietà computed controllano se nel localStorage esistono cookiesAccepted o cookiesRejected
        cookiesAccepted() {
            return localStorage.getItem('cookiesAccepted');
        },
        cookiesRejected() {
            return localStorage.getItem('cookiesRejected');
        }
    },
    methods: {
        acceptCookies() {
            localStorage.setItem('cookiesAccepted', true);
            this.showBanner = false;
        },
        rejectCookies() {
            localStorage.setItem('cookiesRejected', true);
            this.showBanner = false;
        }
    }
}
</script>


<template>
    <div v-if="showBanner" class="cookie-banner">
        <p>We use cookies to improve your experience. By using our site, you agree to our use of cookies.</p>
        <button @click="acceptCookies">Accept</button>
        <button @click="rejectCookies">Reject</button>
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
  background-color: azure;
  border: 1px solid black;
}

button {
    padding: 8px;
    background-color: darkred;
    color: whitesmoke;
    border-radius: 10%;
    outline: none;
    margin-right: 10px;
}
</style>