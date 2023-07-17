import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue';
import Hero from '../components/Header.vue';
import About from '../views/About.vue';
import Resume from '../views/Resume.vue';
import Projects from '../views/Projects.vue';
import Contacts from '../views/Contacts.vue';

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home,
    },

    {
      path: '/header',
      name: 'hero',
      component: Hero,
    },

    {
      path: '/about',
      name: 'about',
      component: About,
    },

    {
      path: '/resume',
      name: 'resume',
      component: Resume,
    },

    {
      path: '/projects',
      name: 'projects',
      component: Projects,
    },

    {
      path: '/contacts',
      name: 'contacts',
      component: Contacts,
    },

  ]
})

export default router

