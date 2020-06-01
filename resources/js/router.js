import VueRouter from "vue-router";
import Vue from 'vue'
import HomeIndex from './components/home/Index';
import Test from "./components/Test";
import Test2 from "./components/Test2";
Vue.use(VueRouter)
const routes = [
    {
        path: '/',
        name: 'home',
        component: HomeIndex

    },
    {path: '/test', component: Test, name: 'test'},
    {path: '/test2', component: Test2, name: 'test2'},
    // {path: '/home2', component: Home2, name: 'Home2'},
]

console.log('router');
const router = new VueRouter({ mode: 'history',routes })

export default router;
