<template>
  <div class="col-span-1"> <!--:data-aos="aosEffect" :data-aos-delay="aosDelay"-->
    <div class="member relative transition-transform duration-300 hover:scale-105">
      <div class="pic overflow-hidden mb-12 rounded-lg h-[300px] bg-white shadow-custom">
        <img :src="imageUrl" class="img-fluid w-full h-full object-cover" :alt="imageAlt" />
      </div>
      <div class="member-info bg-gray-100 shadow-md absolute bottom-[-50px] left-5 right-5 py-8 px-5 rounded-md transition-all duration-500">
        <h4 class="font-bold text-lg text-black mb-1">
          {{ title }}
        </h4>
        <hr class="mb-2 w-[40px] border-gray-300">  
        <span class="italic text-sm mb-2">{{ subtitle }}</span>
        <div class="social absolute right-4 mt-2">
          <a v-for="(link, index) in socialLinks" :key="index" :href="link.url" target="_blank" class="text-gray-400 transition-colors duration-300 hover:text-orange-500 pr-2">
            <i :class="link.icon"></i>
          </a>
        </div>
        <div class="mt-4"></div>
      </div>
    </div>
  </div>
</template>
  
  <script setup>
  import { defineProps } from 'vue';
  
  defineProps({
    imageUrl: {
      type: String,
      required: true,
    },
    imageAlt: {
      type: String,
      required: true,
    },
    title: {
      type: String,
      required: true,
    },
    subtitle: {
      type: String,
      required: true,
    },
    socialLinks: {
      type: Array,
      required: true,
    },
    // aosEffect: {
    //   type: String,
    //   default: 'fade-up',
    // },
    // aosDelay: {
    //   type: Number,
    //   default: 100,
    // },
  });
  </script>
  