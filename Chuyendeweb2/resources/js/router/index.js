import {createRouter, createWebHistory} from 'vue-router'


import Module15 from '../components/Module15.vue';
import AllComic from '../components/ComicCRUD/AllComic.vue';
import AddComic from '../components/ComicCRUD/AddComic.vue';
import EditComic from '../components/ComicCRUD/EditComic.vue';
import AllUser from '../components/UserCRUD/AllUser.vue';
import AddUser from '../components/UserCRUD/AddUser.vue';
import EditUser from '../components/UserCRUD/EditUser.vue';
import AllAuthor from '../components/AuthorCRUD/AllAuthor.vue';
import AddAuthor from '../components/AuthorCRUD/AddAuthor.vue';
import EditAuthor from '../components/AuthorCRUD/EditAuthor.vue';
import AllCategory from '../components/CategoryCRUD/AllCategory.vue';
import AddCategory from '../components/CategoryCRUD/AddCategory.vue';
import EditCategory from '../components/CategoryCRUD/EditCategory.vue';
export const routes = [
    {
        name: 'dashboard',
        path: '/dashboard',
        component: Module15
    },
    //Comic
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
    //User
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
    },
    //Author
    {
        name: 'allauthor',
        path: '/allauthor',
        component: AllAuthor
    },
    {
        name: 'addauthor',
        path: '/addauthor',
        component: AddAuthor
    },
    {
        name: 'editauthor',
        path: '/editauthor/:id',
        component: EditAuthor
    },
    // Category
    {
        name: 'allcategory',
        path: '/allcategory',
        component: AllCategory
    },
    {
        name: 'addcategory',
        path: '/addcategory',
        component: AddCategory
    },
    {
        name: 'editcategory',
        path: '/editcategory/:id',
        component: EditCategory
    }
];
   
  const router = createRouter({
    history: createWebHistory(),
    routes: routes,
  });
  
  export default router;