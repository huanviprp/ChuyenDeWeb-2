import { createApp } from 'vue';



import Module13 from './components/Module13.vue';
import Module14 from './components/Module14.vue';
import Module15 from './components/Module15.vue';

createApp(Module13).mount("#module13");
createApp(Module14).mount("#module14");
createApp(Module15).mount("#module15");
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

