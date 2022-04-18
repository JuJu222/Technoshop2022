/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import VueNumberInput from '@chenfengyuan/vue-number-input';
require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('investor', require('./components/Investor.vue').default);
Vue.component('navbar', require('./components/Navbar.vue').default);
Vue.component('foot', require('./components/Footer.vue').default);
Vue.component('home', require('./components/Home.vue').default);
Vue.component('home-judge', require('./components/HomeJudge.vue').default);
Vue.component('home-team', require('./components/HomeTeam.vue').default);
Vue.component('investors', require('./components/Investors.vue').default);
Vue.component('leaderboard', require('./components/Leaderboard.vue').default);
Vue.component('judge', require('./components/Judge.vue').default);
Vue.component('judge-success', require('./components/JudgeSuccess').default);
Vue.component(VueNumberInput.name, VueNumberInput);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
