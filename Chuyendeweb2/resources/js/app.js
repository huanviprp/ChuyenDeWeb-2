import { createApp } from 'vue';
require('./bootstrap');
// import {createRouter, createWebHistory} from 'vue-router'
import Homepage from './pages/Homepage.vue';
import App from './App.vue'
import Detailcomic from './pages/Detailcomic.vue';
import ReadComic from './pages/Inf-comic.vue';
import axios from 'axios';
import router from './router';
import login from './components/module13.vue';
import register from './components/module14.vue';

import follow from './components/module16.vue';
import header from './components/module1.vue';
import nav from './components/module2.vue';
import rank from './components/module6.vue';
import footer from './components/module5.vue';


const app = createApp(Homepage)
const app2 = createApp(Detailcomic)
const app3 = createApp(ReadComic)
const app4 = createApp(login)

const app5 = createApp(register)
const app6 = createApp(follow)
const app7 = createApp(header)
const app8 = createApp(nav)
const app9 = createApp(rank)
const app10 = createApp(footer)
const app11 = createApp(App)
app.config.globalProperties.$axios = axios
// app11.config.globalProperties.$axios = axios

app11.use(router);
app.use(router);

app2.use(router);

router.isReady().then(() => {
    app2.mount('#detail')
})

app.mount('#homepage');
// app2.mount('#detail');
app3.mount('#readComic');
app4.mount('#module13');
app5.mount('#module14');
app6.mount('#module16');
app7.mount('#module1');
app8.mount('#module2');
app9.mount('#module6');
app10.mount('#module5');
app11.mount('#app');
