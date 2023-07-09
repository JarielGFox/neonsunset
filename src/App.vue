<script>
import { RouterLink, RouterView } from 'vue-router';

import Navbar from './components/Navbar.vue';
import Footer from './components/Footer.vue';
import CookieBanner from './components/CookieBanner.vue';

export default {
   name: 'App',
   components: {
      CookieBanner,
      Navbar,
      Footer
   }
}

</script>

<template>
   <div id="app">
      <Navbar />
      <router-view />
      <Footer />
      <CookieBanner />
   </div>
</template>

<style>
</style>
