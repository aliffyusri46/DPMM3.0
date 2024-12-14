<!-- resources/js/components/GoToTopButton.vue -->

<template>
    <button
      v-show="isVisible"
      @click="scrollToTop"
      class="fixed bottom-6 right-6 px-4 py-3 bg-orange-500 text-white rounded-full shadow-lg hover:bg-orange-600 transition-opacity duration-300 opacity-90 hover:opacity-100 focus:outline-none"
    >
    <i class="bi bi-arrow-up-circle text-2xl"></i>
    </button>
  </template>
  
  <script setup>
  import { ref, onMounted, onBeforeUnmount } from 'vue';
  
  const isVisible = ref(false);
  
  // Function to scroll to the top with smooth animation
  const scrollToTop = () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  };
  
  // Listen for the scroll event and determine if the button should be visible
  const handleScroll = () => {
    isVisible.value = window.scrollY > 100;
  };
  
  // Set up scroll listener on mount
  onMounted(() => {
    window.addEventListener('scroll', handleScroll);
  });
  
  // Clean up the event listener on unmount
  onBeforeUnmount(() => {
    window.removeEventListener('scroll', handleScroll);
  });
  </script>
  
  <style scoped>
  /* Optional: You can add additional styles if needed */
  </style>
  