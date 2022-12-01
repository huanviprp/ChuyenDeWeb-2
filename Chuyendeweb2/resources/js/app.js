import { createApp } from 'vue';
require('./bootstrap');
// import {createRouter, createWebHistory} from 'vue-router'
import Homepage from './pages/Homepage.vue';
import Detailcomic from './pages/Detail-comic.vue';
import ReadComic from './pages/Inf-comic.vue';
import axios from 'axios';
import router from './router';

const app = createApp(Homepage)
const app2 = createApp(Detailcomic)
const app3 = createApp(ReadComic)
app.config.globalProperties.$axios = axios
app.use(router);
app.mount('#homepage');
app2.mount('#detail');
app3.mount('#readComic');