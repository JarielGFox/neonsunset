import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: () => import('../views/Home.vue'),
    },

    {
      path: '/about',
      name: 'about',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/About.vue'),
    },

    {
      path: '/resume',
      name: 'resume',
      component: () => import('../views/Resume.vue'),
    },

    {
      path: '/projects',
      name: 'projects',
      component: () => import('../views/Projects.vue'),
    },

    {
      path: '/contacts',
      name: 'contacts',
      component: () => import('../views/Contacts.vue'),
    },

  ]
})

export default router
