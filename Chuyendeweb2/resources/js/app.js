import { createApp } from 'vue';
require('./bootstrap');
// import {createRouter, createWebHistory} from 'vue-router'
import App from './App.vue';
import axios from 'axios';
import router from './router';

const app = createApp(App)
app.config.globalProperties.$axios = axios
app.use(router);
app.mount('#app');

// import Module13 from './components/Module13.vue';
// import Module14 from './components/Module14.vue';
// import Module15 from './components/Module15.vue';

// createApp(Module13).mount("#module13");
// createApp(Module14).mount("#module14");
// createApp(Module15).mount("#module15");



// export const routes = [
//   {
//       name: 'Module15',
//       path: '/',
//       component: Module15
//   },
//   {
//     name:'module14',
//     path:'/dangky/create',
//     component:Module14
//   },
//   {
//     name:'Module13',
//     path:'/dangky/login',
//     component:Module13
//   }
// ];
 
// const router = createRouter({
//   history: createWebHistory(),
//   routes,
// });

// export default router;


