
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';
Vue.use(VueRouter);

 var Home = require('./components/pages/HomeComponent')
 var Product = require('./components/pages/ProductComponent')
 var Blog = require('./components/pages/BlogComponent')
 var Post = require('./components/pages/PostComponent')
 var Contacts = require('./components/pages/ContactComponent')
 var Main = require('./components/MainComponent')
 var router = new VueRouter({
     routes:[
         {path: '/', component: Main, Main,
         children:[
             {path: '/', component: Home},
             {path: '/product', component: Product},
             {path: '/blog', component: Blog},
             {path: '/post/:id',name:'post', component: Post},
             {path: '/contacts', component: Contacts},
         ]},

     ]
 });

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


//Vue.component('main-component', require('./components/MainComponent'));
//Vue.component('article-component', require('./components/ArticleComponent'));

const app = new Vue({
    el: '#app',
    router:router,
   // render: h => h('router-view')
});
