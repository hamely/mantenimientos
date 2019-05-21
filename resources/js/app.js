// require('./bootstrap');

window.Vue = require('vue');


Vue.component('ponenteComponent', require('./components/ponenteComponent.vue').default);

const app = new Vue({
    el: '#app'
});
