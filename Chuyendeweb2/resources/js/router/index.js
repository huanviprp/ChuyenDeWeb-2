import { createRouter, createWebHistory } from 'vue-router'
// import Module10 from './components/Module10.vue';
// import Module11 from './components/Module11.vue';

import detail from '../pages/Detailcomic.vue';
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
import AllComment from '../components/CommentDelete/AllComment.vue';
export const routes = [
    {
        path: '/detail/:id',
        component: detail
    },
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
    },
    //Delete Comment
    {
        name: 'allcomment',
        path: '/allcomment',
        component: AllComment
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});

export default router;
