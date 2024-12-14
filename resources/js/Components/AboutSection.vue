<template>
  <section id="about" class="about section mb-16">
    <ContainerLayout>     
      <Title>
        <template #title>
          About <!-- Title slot content -->
        </template>
        <template #subtitle>
          Who We Are <!-- Subtitle slot content -->
        </template>
      </Title>

      <div class="grid sm:grid-cols-1 lg:grid-cols-2 gap-10  px-3 md:px-3 lg:p-0">
        <div data-aos="fade-up" data-aos-delay="100">
          <p class="text-gray-700 leading-relaxed mb-4">
            {{ aboutText }}
          </p>
          <ul class="text-gray-700 space-y-2">
            <li v-for="(item, index) in listItems" :key="index">
              <i class="bi bi-check2-circle text-orange-500 mr-2"></i>
              <span>{{ item }}</span>
            </li>
          </ul>
        </div>
        <div data-aos="fade-up" data-aos-delay="200">
          <p class="text-gray-700 leading-relaxed mb-2">
            {{ additionalText }}
          </p>
          <a
            href="#"
            class="inline-block bg-orange-500 text-white py-2 px-4 rounded-md mt-4 hover:bg-orange-600 transition group">
            Read More
            <i class="bi bi-arrow-right inline-block transform transition-transform group-hover:translate-x-1"></i>
          </a>
        </div>
      </div>
    </ContainerLayout>
  </section>
</template>

<script setup>
import { defineProps } from 'vue';
import Title from './Title.vue';
import ContainerLayout from '../Layouts/ContainerLayout.vue';

const props = defineProps({
  aboutText: {
    type: String,
    required: true,
  },
  additionalText: {
    type: String,
    required: true,
  },
  listItems: {
    type: Array,
    required: true,
  },
});
</script>