require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { createApp } from "vue";
import router from './router/Index'
import CompaniesIndex from './components/companies/Index'
createApp({
    components : {
        CompaniesIndex
    }
}).use(router).mount('#app')
