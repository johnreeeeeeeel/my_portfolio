import { createRouter, createWebHistory } from "vue-router";
import Home from "../views/Home.vue";

const routes = [
  { path: "/", component: Home, meta: { title: "Home" } },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

router.afterEach((to) => {
  document.title = (to.meta.title ? to.meta.title : "Page") + " | F. Johnrel Portfolio";
});


export default router;
