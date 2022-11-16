import { createApp } from 'vue';
// import VueRouter from 'vue-router';
// import { createRouter, createWebHistory } from 'vue-router'
import VueAxios from 'vue-axios';//gọi thư viện axios
import axios from 'axios';

import Module13 from './components/Module13.vue';
import Module14 from './components/Module14.vue';

createApp(Module13).mount("#module13");
createApp(Module14).mount("#module14");
// const routes = [
//     {
//         name: 'Module14',
//         path: '/dangky',
//         component: Module14
//     },
//     {
//         name: 'Module13',
//         path: '/login',
//         component: Module13
//     }
// ];
// const router = new VueRouter({mode:'history', routes: routes});
// new Vue(Vue.util.extend({router},App)).$mount('#module13');

