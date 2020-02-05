require('./bootstrap');
window.Vue = require('vue');

// Import Route
import VueRouter from 'vue-router'
Vue.use(VueRouter)
import {routes} from './routes'
const router = new VueRouter({
    mode:'history',
    routes,
})


Vue.component('admin-content', require('./admin/AdminMaster.vue').default);

const app = new Vue({
    el: '#app',
    router,
});
