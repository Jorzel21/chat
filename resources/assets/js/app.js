require('./bootstrap');

window.Vue = require('vue');

Vue.component('login', () => import('./components/LoginForm.vue'));
Vue.component('users-list', () => import('./components/List.vue'));
