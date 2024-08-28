import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/",
        component: () => import("./Pages/HomePage.vue"), 
    },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});