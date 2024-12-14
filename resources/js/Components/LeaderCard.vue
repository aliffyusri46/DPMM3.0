<template>
  <div class="col-span-1 " >   <!-- :data-aos="aosType" :data-aos-delay="aosDelay" -->
      <article class="bg-white shadow-custom p-6 h-full rounded-lg overflow-hidden">
        <div class="post-img mb-4 flex justify-center items-center bg-gray-200 rounded-lg">
          <img :src="imageSrc" :alt="imageAlt" class="w-4/5 h-auto object-cover" />
        </div>
        <p class="post-category  text-gray-500 mb-2">{{ category }}</p>
        <h2 class="title text-xl font-semibold mb-4">
          <a :href="link" class="text-gray-800 hover:text-orange-500 transition duration-300">
            {{ title }}
          </a>
        </h2>
      </article>
    </div>
  </template>
  
  <script setup>
  import { defineProps } from 'vue';
  
  defineProps({
    imageSrc: {
      type: String,
      required: true,
    },
    imageAlt: {
      type: String,
      required: true,
    },
    category: {
      type: String,
      required: true,
    },
    title: {
      type: String,
      required: true,
    },
    link: {
      type: String,
      required: true,
    },
    // aosType: {
    //   type: String,
    //   default: 'fade-up',
    // },
    // aosDelay: {
    //   type: [String, Number],
    //   default: 100,
    // },
  });
  </script>
  