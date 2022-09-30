require("./bootstrap");

import Vue from "vue";
import Root from "./components/Root";
import router from "./router";
import store from "./store";

new Vue({
    el: "#app",
    router,
    store,
    components: { Root },
});
