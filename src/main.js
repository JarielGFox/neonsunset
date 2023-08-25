import 'bootstrap/dist/css/bootstrap.css'; // Importing Bootstrap CSS directly
import 'bootstrap-icons/font/bootstrap-icons.css';
import './assets/main.css'; // Importing main.css only once

import axios from 'axios';

import { createApp } from 'vue';
import App from './App.vue';
import router from './router';

const app = createApp(App);

app.use(router);
app.mount('#app');