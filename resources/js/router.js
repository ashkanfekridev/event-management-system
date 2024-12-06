import {createRouter, createWebHistory} from "vue-router";


const routes = [
    {
        path: "/",
        name: "home",
        component: () => import('./views/index.vue')
    }, {
        path: "/events",
        name: "events",
        component: () => import('./views/events.vue')
    }, {
        path: "/artists",
        name: "هنرمند",
        component: () => import('./views/Artists.vue')
    },
    {
        path: '/artists/:artistId',
        name:'artists.show',
        faName:"نمایش هنرمند",
        props:true,
        component: ()=>import('./views/artists/show.vue')
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})
