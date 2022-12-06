<template>
    <div>
        <div class="flex justify-between items-center border-b border-gray-300">
            <div>
                <img
                    class="h-10 mr-4"
                    src="/assets/contractuo.webp"
                    alt="contractuo logo"
                />
            </div>
            <div>
                <button
                    class="float-right bg-blue-400 hover:opacity-50 duration-300 text-white p-4"
                    @click="logout"
                >
                    Logout
                </button>
                <!--Nav Links new pages-->
                <router-link to="/overview/view_tasks" class="float-right bg-blue-400 hover:opacity-50 duration-300 text-white p-4" >View Tasks</router-link>
                <router-link to="/overview/create_tasks" class="float-right bg-blue-400 hover:opacity-50 duration-300 text-white p-4" >Create Task</router-link>
            </div>
        </div>

        <div class="flex justify-center items-center">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
export default {
    name: "AppRoot",

    methods: {
        logout() {
            axios.post("/logout").then(() => {
                window.location = "/";
            });
        },
    },
};
</script>
