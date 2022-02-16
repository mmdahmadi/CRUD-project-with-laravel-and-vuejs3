import {createRouter, createWebHistory} from 'vue-router'

import CompaniesIndex from '../components/companies/Index'
import CompaniesCreate from '../components/companies/Create'
import CompaniesEdit from '../components/companies/Edit'

const routes = [
    {
        path: '/dashboard',
        name: 'companies.index',
        component: CompaniesIndex
    },
    {
        path: '/companies/create',
        name: 'companies.create',
        component: CompaniesCreate
    },
    {
        path: '/companies/:id/edit',
        name: 'companies.edit',
        component: CompaniesEdit,
        props: true
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})

