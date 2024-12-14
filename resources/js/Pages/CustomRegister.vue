<template>
    <div class="flex justify-center items-center h-screen p-10">
        <div class="grid md:grid-cols-2 grid-cols-1 border rounded-3xl">
            <div class="flex justify-center items-center p-5">
                <form @submit.prevent="register" method="POST">
                    <h1 class="text-center mb-10 font-bold text-4xl">Custom Register</h1>
                    <input type="hidden" name="_token" :value="csrfToken">
                    <input
                        v-model="form.name"
                        type="text"
                        class="bg-gray-100 border outline-none rounded-md py-3 w-full px-4 mb-3"
                        placeholder="Name"
                    />
                    <div v-if="errors.name" class="text-red-500 mb-3">{{ errors.name }}</div>
                    
                    <input
                        v-model="form.email"
                        type="email"
                        class="bg-gray-100 border outline-none rounded-md py-3 w-full px-4 mb-3"
                        placeholder="Email"
                    />
                    <div v-if="errors.email" class="text-red-500 mb-3">{{ errors.email }}</div>
                    
                    <input
                        v-model="form.password"
                        type="password"
                        class="bg-gray-100 border outline-none rounded-md py-3 w-full px-4 mb-3"
                        placeholder="Password"
                    />
                    <div v-if="errors.password" class="text-red-500 mb-3">{{ errors.password }}</div>
                    
                    <input
                        v-model="form.password_confirmation"
                        type="password"
                        class="bg-gray-100 border outline-none rounded-md py-3 w-full px-4 mb-3"
                        placeholder="Confirm Password"
                    />
                    <div v-if="errors.password_confirmation" class="text-red-500 mb-3">{{ errors.password_confirmation }}</div>
                    
                    <button
                        type="submit"
                        class="bg-black hover:bg-yellow-500 border outline-none rounded-md py-3 w-full px-4 font-semibold text-white"
                    >
                        Register
                    </button>
                </form>
            </div>
            <div>
                <img
                    src="https://img.freepik.com/premium-vector/vector-abstract-seamless-pattern-with-stars-blue-background_117177-1008.jpg"
                    class="rounded-3xl"
                    alt=""
                />
            </div>
        </div>
    </div>
</template>

<script setup>
import { reactive, ref } from "vue";
import { useForm } from "@inertiajs/vue3";

const form = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
});

const errors = ref({});

async function register() {
    try {
        await form.post("/custom-register");
    } catch (err) {
        if (err.response && err.response.data.errors) {
            errors.value = err.response.data.errors;
        }
    }
}
</script>