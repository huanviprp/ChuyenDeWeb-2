import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router'
import VueAxios from 'vue-axios';//gọi thư viện axios
import axios from 'axios';
//Cac module
import ListUser from './components/ListUser.vue';
import Module13 from './components/Module13.vue';
import Module14 from './components/Module14.vue';
createApp(Module13).mount("#module13");
createApp(Module14).mount("#module14");
createApp(ListUser).mount("#listUser");

const routes = [
    {
        name: 'ListUser',
        path: '/',
        component: ListUser
    },
    {
      name:'Module14',
      path:'/dangky',
      component:Module14
    },
    {
      name:'Module13',
      path:'/login',
      component:Module13
    }
  ];
   
  const router = new VueRouter({mode:'history', routes: routes});
  new Vue(Vue.util.extend({router},App)).$mount('#listUser');
  


