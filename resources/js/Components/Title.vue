<template>
    <div class="mb-8 px-3 pt-3 lg:px-0" data-aos="fade-up">
      <div class="flex items-center gap-2">
        <h2 class="text-l text-gray-400 uppercase tracking-wide">
          <slot name="title" /> <!-- Slot for the title -->
        </h2>
        <div class="w-32 h-[1px] bg-orange-500 rounded"></div>
      </div>
      <h3 class="text-3xl font-semibold text-gray-800 uppercase">
        <slot name="subtitle" /> <!-- Slot for the subtitle -->
      </h3>
    </div>
  </template>
  
  <script setup>

  // AOS.init();
  
  </script>
  