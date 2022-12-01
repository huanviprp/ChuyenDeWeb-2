import { createApp } from 'vue';
require('./bootstrap');
// import {createRouter, createWebHistory} from 'vue-router'
import Homepage from './pages/Homepage.vue';
import axios from 'axios';
import router from './router';


createApp(Homepage).mount("#homepage");
// const app = createApp(Homepage)
// app.config.globalProperties.$axios = axios
// app.use(router);
// app.mount('#homepage');