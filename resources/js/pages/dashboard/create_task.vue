<template>
    <div class="flex justify-center">
            <div class="mb-3 xl:w-96">
                <form @submit.prevent="submit">
                    <label for="exampleFormControlTextarea1" class="form-label inline-block mt-5 mb-2 text-gray-700">Create new Task</label>
                    <textarea
                    name="task"
                    class="
                        form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        mb-3
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                    "
                    id="exampleFormControlTextarea1"
                    rows="3"
                    placeholder="Input a New Task!"
                    v-model="fields.task"
                    ></textarea>
                    <p id='response' class="form-label inline-block mt-5 mb-2 text-grey-700"></p>
                    <button type="submit" class="bg-blue-500 hover:opacity-50 text-white py-2 px-4 rounded float-right">Create Task</button>
                </form>
            </div>
        </div>
</template>
<script>
export default {
    name: "CreateTask",

    data(){
        return {
            fields:{},
            errors:{},
            success: false,
            loaded: true,
        }
    },

    methods: {
        submit() {
            if (this.loaded) {
                this.loaded = false;
                this.success = false;
                this.errors = {};
                //post to tasks -> goes to tasks.store -> reponse will tell if task was created or not
                axios.post('tasks', this.fields).then(response => {
                    this.fields = {}; //Clear input fields.
                    this.loaded = true;
                    this.success = true;
                    this.res = response.data;
                    //console.log(response.data);
                    document.getElementById("response").innerHTML = response.data;
                    
                })
                .catch(error => {
                    this.loaded = true;
                    //checks if input is invalid
                    if (error.response.status === 422) {
                        this.errors = error.response.data.errors || {};
                        document.getElementById("response").innerHTML = 'Input Is Not Valid';
                    }
                    //throws error if user that is not an admin tries to create a task
                    if (error.response.status === 500) {
                        this.errors = error.response.data.errors || {};
                        document.getElementById("response").innerHTML = 'User Is Not An Admin!';

                    }

                });
            }
            
        },
    },
};
</script>