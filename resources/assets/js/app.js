window.axios = require('axios');

window.axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest'
};

import Vue from 'vue'
import router from './router'
import http from './services/http.js'


require('./bootstrap');
window.Vue = require('vue');

const app = new Vue({
    router,
    el: '#app',
    created () {
        http.init()
    },
    render: h => h(require('./app.vue')),
}).$mount('#app')


//////////////////////////////////////////////////////////////////////
//
//      ES6的には;での区切りはいらない場合がある。
//
//
//
//
//
//mode:historyの削除　へ変更
//
