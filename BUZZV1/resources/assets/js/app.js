require('./bootstrap');

window.Vue = require('vue');

const app = new Vue({
    el: '#app',
    data: {
      message: 'salut toi'
    }
});
