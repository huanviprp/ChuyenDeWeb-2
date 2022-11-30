
import Module7 from '../components/module7.vue';


export const routes = [
  {
    name: 'detail',
    path: '/detail/:id',
    component: Module7
  }
];

const router = createRouter({
  history: createWebHistory(),
  routes: routes,
});

export default router;