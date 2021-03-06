import axios from 'axios'
// window.axios = require('axios');
// window.axios.defaults.headers.common = {
//     'X-Requested-With': 'XMLHttpRequest'
// };
// axios.defaults.baseURL = 'https://intense-savannah-76949.herokuapp.com/' + 'api';

// let href = location.href;//urlの取得
// alert("変更確認");
axios.defaults.baseURL = '/api';

/**
 * Responsible for all HTTP requests.
 */
export default {
    request (method, url, data, successCb = null, errorCb = null) {
        axios.request({
            url,
            data,
            method: method.toLowerCase()
        }).then(successCb).catch(errorCb)
    },

    get (url, successCb = null, errorCb = null) {
        return this.request('get', url, {}, successCb, errorCb)
    },

    post (url, data, successCb = null, errorCb = null) {
        return this.request('post', url, data, successCb, errorCb)
    },

    put (url, data, successCb = null, errorCb = null) {
        return this.request('put', url, data, successCb, errorCb)
    },

    delete (url, data = {}, successCb = null, errorCb = null) {
        return this.request('delete', url, data, successCb, errorCb)
    },

    /*
     * Init the service.
     */
    init () {
    //
    //     axios.defaults.baseURL = 'https://intense-savannah-76949.herokuapp.com/' + 'api';  //httpsでデータ送信するように指定(未修整)---追記：ここはこのままでよさそう
    //
    //     // Intercept the request to make sure the token is injected into the header.
        axios.interceptors.request.use(config => {
            config.headers['X-CSRF-TOKEN']     = window.Laravel.csrfToken;
            config.headers['X-Requested-With'] = 'XMLHttpRequest';
            // config.headers['Authorization']    = `Bearer ${localStorage.getItem('jwt-token')}` // jwtauth
            return config
        })
    //
    //     // Intercept the response and ...
    //     axios.interceptors.response.use(response => {
    //         // ...get the token from the header or response data if exists, and save it.
    //         const token = response.headers['Authorization'] || response.data['token']
    //         if (token) {
    //             localStorage.setItem('jwt-token', token)
    //         }
    //
    //         return response
    //     }, error => {
    //         // Also, if we receive a Bad Request / Unauthorized error
    //         console.log(error)
    //         return Promise.reject(error)
    //     })
    //
    // }
}}
//
// import axios from 'axios'
//
// /**
//  * Responsible for all HTTP requests.
//  */
// export default {
//     request (method, url, data, successCb = null, errorCb = null) {
//         axios.request({
//             url,
//             data,
//             method: method.toLowerCase()
//         }).then(successCb).catch(errorCb)
//     },
//
//     get (url, successCb = null, errorCb = null) {
//         return this.request('get', url, {}, successCb, errorCb)
//     },
//
//     post (url, data, successCb = null, errorCb = null) {
//         return this.request('post', url, data, successCb, errorCb)
//     },
//
//     put (url, data, successCb = null, errorCb = null) {
//         return this.request('put', url, data, successCb, errorCb)
//     },
//
//     delete (url, data = {}, successCb = null, errorCb = null) {
//         return this.request('delete', url, data, successCb, errorCb)
//     },
//
//     /**
//      * Init the service.
//      */
//     init () {
//         axios.defaults.baseURL = '/api'
//
//         // Intercept the request to make sure the token is injected into the header.
//         axios.interceptors.request.use(config => {
//             config.headers['X-CSRF-TOKEN']     = window.Laravel.csrfToken
//             config.headers['X-Requested-With'] = 'XMLHttpRequest'
//             return config
//         })
//     }
// }
//
