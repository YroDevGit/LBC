

import Vue from 'vue';

new Vue({
    el: '#app',
    data: {
        data: null,
    },
    created() {
        this.getDataFromUrl();
    },
    methods: {
        getDataFromUrl() {
            const data = window.location.pathname.split('/').pop();
            this.data = data;
        },
    },
});
