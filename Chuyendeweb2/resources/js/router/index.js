import {createRouter, createWebHistory} from 'vue-router'


import Module15 from '../components/Module15.vue';
import AllComic from '../components/ComicCRUD/AllComic.vue';
import AddComic from '../components/ComicCRUD/AddComic.vue';
import EditComic from '../components/ComicCRUD/EditComic.vue';
import AllUser from '../components/UserCRUD/AllUser.vue';
import AddUser from '../components/UserCRUD/AddUser.vue';
import EditUser from '../components/UserCRUD/EditUser.vue';
export const routes = [
    {
        name: 'dashboard',
        path: '/dashboard',
        component: Module15
    },
    {
        name: 'allcomic',
        path: '/allcomic',
        component: AllComic
    },
    {
        name: 'addcomic',
        path: '/addcomic',
        component: AddComic
    },
    {
        name: 'editcomic',
        path: '/editcomic/:id',
        component: EditComic
    },
    {
        name: 'alluser',
        path: '/alluser',
        component: AllUser
    },
    {
        name: 'adduser',
        path: '/adduser',
        component: AddUser
    },
    {
        name: 'edituser',
        path: '/edituser/:id',
        component: EditUser
    }
];
   
  const router = createRouter({
    history: createWebHistory(),
    routes: routes,
  });
  
  export default router;