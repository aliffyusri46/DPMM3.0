<template>
    <section id="news" class="news section">
        <!-- Section Title -->
        <ContainerLayout>
            <div>
                <Title>
                    <template #title>
                        DPMM / Dewan Muda / Dewanita / MPIH-DPMM 
                    </template>
                    <template #subtitle>
                        Press Statement / News / Events
                    </template>
                </Title>
                <!-- <form @submit.prevent="logout">
                    <button class="bg-red-500 rounded px-4 py-2 mb-4 mt-4">
                        Log Out
                    </button>                  
                </form> -->

                <!-- <Link
                    :href="route('login')"
                    class="bg-blue-500 rounded px-4 py-2">
                         Log in
                </Link> -->
                
                <!-- <Link
                     v-if="canRegister"
                    :href="route('register')"
                    class="bg-red-600">
                    Register
                </Link> -->
            </div>
        

        <!-- Blog Items (Including Create Blog Button) -->
            <div class="grid grid-cols-1 md:grid-cols-2 md:px-3 lg:grid-cols-3 lg:px-0 gap-6" data-aos="fade-up" data-aos-delay="100">
                <!-- Create Blog Button (on the first row) -->
                <div class="news-item relative bg-white shadow-md rounded-lg overflow-hidden transition-all duration-300 hover:translate-y-[-10px] p-4">
                    <Link :href="`/blogs/create`" class="hover:cursor-pointer">
                        
                        <div class="news-content p-4 bg-white flex flex-col items-center justify-center text-center h-full">
                            <Icon icon="akar-icons:plus" width="96" class="text-4xl text-gray-800" />
                            <h1 class="font-semibold text-lg text-gray-800 mt-5">
                                Create
                            </h1>
                            <p class="text-sm text-gray-600">
                                New Blog
                            </p>
                        </div>
                    </Link>
                </div>

                <!-- Blog Items -->
                <div v-for="(blog, index) in blogs" :key="index" class="news-item relative bg-white shadow-custom rounded-lg overflow-hidden transition-all duration-300 hover:translate-y-[-10px] hover:cursor-pointer p-4">
                    <Link :href="`/blogs/${blog.id}`">
                        <div class="news-content p-4 bg-white">
                            <!-- Display the first image -->
                            <img 
                                v-if="blog.images && blog.images.length > 0"
                                :src="`/storage/${blog.images[0]}`" 
                                alt="Blog Image" 
                                class="w-full h-48 object-cover rounded-lg mb-2" 
                            />
                            <h3 class="font-semibold text-lg text-gray-800">
                                {{ blog.title }}
                            </h3>
                        </div>
                    </Link>
                    <!-- Edit and Delete Buttons -->
                    <div class="flex space-x-2 mt-2">
                        <Link
                            :href="`/blogs/${blog.id}/edit`"
                            class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600 block w-full text-center"
                        >
                            Edit
                        </Link>
                        <button
                            @click="deleteBlog(blog.id)"
                            class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 block w-full text-center"
                        >
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </ContainerLayout>
    </section>
</template>

<script setup>
import { Head, Link, router } from '@inertiajs/vue3';
import { Inertia } from '@inertiajs/inertia';
import { Icon } from '@iconify/vue';
import Title from '@/Components/Title.vue';
import ContainerLayout from '../Layouts/ContainerLayout.vue';

// Define the props with default empty array if blogs are not provided
const props = defineProps({
    blogs: {
        type: Array,
        default: () => [], // Default to an empty array
    },
    canRegister: {
        type: Boolean,
        default: false,
    }
});

function deleteBlog(blogId) {
    if (confirm("Are you sure you want to delete this blog?")) {
        Inertia.delete(`/blogs/${blogId}`, {
            onSuccess: () => {
                alert("Blog deleted successfully!");
            },
            onError: () => {
                alert("Failed to delete the blog.");
            },
        });
    }
}

// const logout = () => {
//     router.post(route('logout'));
// };
</script>