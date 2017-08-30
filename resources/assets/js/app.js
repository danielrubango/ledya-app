
require('./bootstrap');

require('./app2.js');

window.events = new Vue();

window.flash = function (message) {
    window.events.$emit('flash', message);
}

Vue.component('Flash', require('./components/Flash.vue'));

const app = new Vue({
    el: '#app'
});
