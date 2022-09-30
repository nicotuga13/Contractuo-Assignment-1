import Vue from "vue";
import VueRouter from "vue-router";
import Dashboard from "../pages/dashboard";

Vue.use(VueRouter);

/** =================== Warning =================
 *
 * You need to have the /overview/ as a prefix for any route you define.
 *
 */
const routes = {
    mode: "history",

    routes: [
        {
            path: `/overview/dashboard`,
            component: Dashboard,
            name: "app_dashboard",
        },
    ],
};

export default new VueRouter(routes);
