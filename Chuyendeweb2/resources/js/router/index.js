// import Module10 from './components/Module10.vue';
// import Module11 from './components/Module11.vue';
import detail from '../pages/Detailcomic.vue';
import { createRouter, createWebHistory } from 'vue-router'

export const routes = [
  {
    path: '/detail/:id',
    component: detail
  },
  // {
  //   name: 'register',
  //   path: '/register/:id',
  //   component: Module14
  // },
  // {
  //   name: 'login',
  //   path: '/login',
  //   component: Module13
  // },
  // {
  //   name: 'dashboard',
  //   path: '/dashboard',
  //   component: Module15
  // }
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes

});

export default router;