<template>
    <!-- Membership Section -->
    <section id="membership" class="membership section bg-[#2a2c39] text-white py-10 mb-5">
      <ContainerLayout>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-center md:px-4 lg:px-0 text-center md:text-left" data-aos="zoom-in" data-aos-delay="100">
          <!-- Text Content (Spanning 2 Columns on Desktop) -->
          <div class="md:col-span-2 flex flex-col justify-center items-center md:items-start">

            <h3 class="text-2xl font-semibold mb-4">
              <slot name="title" />
            </h3>
            <p class="mb-4">
              <slot name="description" />
            </p>
            <ul class="space-y-2">
              <slot name="membershipOptions" />
            </ul>
          </div>
          <!-- Button -->
          <div class="flex justify-center">
            <slot name="button">
              <!-- <a
                href="#"
                class="inline-block bg-orange-500 text-white py-2 px-8 rounded-3xl text-xl hover:bg-orange-600 transition-transform transform hover:-translate-y-1 active:translate-y-0">
                Register Now!
              </a> Default button -->
              <Link
                  :href="route('register')"
                  class="inline-block bg-orange-500 text-white py-2 px-8 rounded-3xl text-xl hover:bg-orange-600 transition-transform transform hover:-translate-y-1 active:translate-y-0"
                  > <!-- v-if="canRegister"-->
                                Register Now!
                            </Link>
            </slot>
          </div>
        </div>
      </ContainerLayout>
    </section>
  </template>
  
  <script setup>
  import ContainerLayout from '../Layouts/ContainerLayout.vue';
  import { Link } from '@inertiajs/vue3';

  // No props are needed for this component
  </script>
  
  <style scoped>
  /* Add any specific styles for this component if needed */
  </style>