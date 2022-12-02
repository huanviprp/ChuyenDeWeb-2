import { createApp } from 'vue';
require('./bootstrap');
// import {createRouter, createWebHistory} from 'vue-router'
import Homepage from './pages/Homepage.vue';
import Detailcomic from './pages/Detailcomic.vue';
import ReadComic from './pages/Inf-comic.vue';
import axios from 'axios';
import router from './router';
import login from './components/module13.vue';


const app = createApp(Homepage)
const app2 = createApp(Detailcomic)
const app3 = createApp(ReadComic)
const app4 = createApp(login)
app.config.globalProperties.$axios = axios

app.use(router);
app2.use(router);

router.isReady().then(() => {
    app2.mount('#detail')
})

app.mount('#homepage');
// app2.mount('#detail');
app3.mount('#readComic');
app4.mount('#module13');