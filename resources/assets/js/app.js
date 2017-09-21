
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

/*
 |--------------------------------------------------------------------------
 | Custom Elements
 |--------------------------------------------------------------------------
 |
 | Here we'll set up the custom components, plugins, and section specific
 | javascript files that are going to be needed to run our application
 | this is a nice place to require all sorts of custom jQuery code.
 |
 */

require('./elements/animations');