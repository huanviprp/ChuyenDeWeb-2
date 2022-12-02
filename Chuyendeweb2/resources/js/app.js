import { createApp } from 'vue';
require('./bootstrap');
// import {createRouter, createWebHistory} from 'vue-router'
import Homepage from './pages/Homepage.vue';
import Detailcomic from './pages/Detailcomic.vue';
import ReadComic from './pages/Inf-comic.vue';
import Category from './pages/Category.vue';
import axios from 'axios';
import router from './router';

const app = createApp(Homepage)
const app2 = createApp(Detailcomic)
const app3 = createApp(ReadComic)
const app4 = createApp(Category)
app.config.globalProperties.$axios = axios

app.use(router);
app2.use(router);

router.isReady().then(() => {
    app2.mount('#detail')
})

app.mount('#homepage');
// app2.mount('#detail');
app3.mount('#readComic');
app4.mount('#category');
window.Vue = require('vue').default;

Vue.component('Comics', require('./components/module3.vue').default);