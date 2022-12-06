import Vue from "vue";
import VueRouter from "vue-router";
import Dashboard from "../pages/dashboard";
import create_task from "../pages/dashboard/create_task.vue";
import view_task from "../pages/dashboard/view_task.vue";

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
        //route for the create task page
        {
            path: `/overview/create_tasks`,
            component: create_task,
            name: "CreateTask",
        },
        //route for the view task page
        {
            path: `/overview/view_tasks`,
            component: view_task,
            name: "ViewTask",
        }
    ],
};

export default new VueRouter(routes);
