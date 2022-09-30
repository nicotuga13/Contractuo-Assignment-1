<template>
    <div>
        <div class="flex justify-between items-center border-b border-gray-300">
            <img
                class="h-10 mr-4"
                src="/assets/contractuo.webp"
                alt="contractuo logo"
            />

            <button
                class="bg-blue-400 hover:opacity-50 duration-300 text-white p-4"
                @click="logout"
            >
                Logout
            </button>
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
