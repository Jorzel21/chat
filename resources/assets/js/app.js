require('./bootstrap');

window.Vue = require('vue');

Vue.component('login', () => import('./components/LoginForm.vue'));
Vue.component('list', () => import('./components/List.vue'));
Vue.component('menu-quasar', () => import('./components/Menu.vue'));
