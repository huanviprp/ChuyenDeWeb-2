import {createRouter, createWebHistory} from 'vue-router'


import Home from '../components/Home.vue';
import Module13 from '../components/Module13.vue';
import Module14 from '../components/Module14.vue';
import Module15 from '../components/Module15.vue';


export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
      name:'register',
      path:'/register',
      component:Module14
    },
    {
      name:'login',
      path:'/login',
      component:Module13
    },
    {
      name:'dashboard',
      path:'/dashboard',
      component:Module15
    }
  ];
   
  const router = createRouter({
    history: createWebHistory(),
    routes: routes,
  });
  
  export default router;