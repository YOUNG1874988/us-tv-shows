/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


// 导入各个组件并注册
Vue.component('nav-bar', require('./components/NavBar.vue').default);

Vue.component('announcement', require('./components/Announcement.vue').default);
Vue.component('welcome-swiper', require('./components/swiper/WelcomeSwiper.vue').default);
Vue.component('category-part', require('./components/categorypart/CategoryPart.vue').default);
Vue.component('latest-us-tv-category-part', require('./components/categorypart/LatestUsTvCategoryPart.vue').default);
Vue.component('comedy-category-part', require('./components/categorypart/ComedyCategoryPart.vue').default);
Vue.component('feature-category-part', require('./components/categorypart/FeatureCategoryPart.vue').default);
Vue.component('scared-category-part', require('./components/categorypart/ScaredCategoryPart.vue').default);
Vue.component('scientific-category-part', require('./components/categorypart/ScientificCategoryPart.vue').default);
Vue.component('home-foot', require('./components/HomeFoot.vue').default);
Vue.component('scroll', require('./components/Scroll.vue').default);







/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});