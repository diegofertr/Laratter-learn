require('./bootstrap');

$(document).ready(function(){
    $('.materialboxed').materialbox();
});

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('textarea-component', require('./components/TextareaComponent.vue'));
Vue.component('input-component', require('./components/InputComponent.vue'));

const app = new Vue({
    el: '#app'
});
