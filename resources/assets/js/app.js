window.axios = require('axios');

window.axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest'
};

import Vue from 'vue'
import router from './router'
import http from './services/http.js'


require('./bootstrap')

const app = new Vue({
    router,
    el: '#app',
    created () {
        http.init()
    },
    render: h => h(require('./app.vue')),
}).$mount('#app')

