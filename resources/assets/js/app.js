require('./bootstrap');

window.Vue = require('vue');

Vue.component('component1', () => import('./components/ExampleComponent1.vue'));
Vue.component('component2', () => import('./components/ExampleComponent2.vue'));
Vue.component('component3', () => import('./components/ExampleComponent3.vue'));
Vue.component('login', () => import('./components/LoginCard.vue'));