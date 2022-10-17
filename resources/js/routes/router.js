import { createRouter, createWebHistory } from 'vue-router';

import Home from '../view/Home.vue';
import Links from '../view/Links.vue';
import Abount from '../view/Abount.vue';
import Contact from '../view/Contact.vue';
import Redirect from '../view/Redirect.vue';
import Calculator from '../view/Calculator.vue';

import NotFound from '../view/NotFound.vue';

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/links',
        name: 'links',
        component: Links
    },
    {
        path: '/abount',
        name: 'abount',
        component: Abount
    },
    {
        path: '/contact',
        name: 'contact',
        component: Contact
    },{
        path: '/:link',
        name: '/redirect',
        component: Redirect
    },

    {
        path: '/:pathMatch(.*)*',
        component: NotFound
    }


];

export default createRouter({
    history: createWebHistory(),
    routes
})
