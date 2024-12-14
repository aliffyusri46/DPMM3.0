<template>

<section id="video" class="bg-[#2a2c39] py-12 mb-5">
    <div class="container mx-auto px-10 sm:px-5 lg:px-8">
      <div class="flex justify-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="relative w-full max-w-full md:max-w-2xl lg:max-w-4xl aspect-w-16 aspect-h-9">
          <iframe
            class="w-full h-[400px] rounded-lg shadow-lg"
            :src=videoUrl
            frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
        </div>
      </div>
    </div>
  </section>

</template>

<script setup>
    import { defineProps } from 'vue';

    defineProps({
        videoUrl: {
            type: String,
            required: true,
        },
    });
</script>