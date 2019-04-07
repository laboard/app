import Vue from 'vue';
import VueRouter from 'vue-router';

import Index from '@/js/components/Index';
import About from '@/js/components/About';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        { path: '/', name: 'Index', component: Index },
        { path: '/about', name: 'About', component: About }
    ]
});

export default router;