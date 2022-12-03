import {createRouter, createWebHistory} from 'vue-router'


import AllComic from '../components/ComicCRUD/AllComic.vue';
import AddComic from '../components/ComicCRUD/AddComic.vue';
import EditComic from '../components/ComicCRUD/EditComic.vue';
export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllComic
    },
    {
        name: 'add',
        path: '/add',
        component: AddComic
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditComic
    }
];
   
  const router = createRouter({
    history: createWebHistory(),
    routes: routes,
  });
  
  export default router;