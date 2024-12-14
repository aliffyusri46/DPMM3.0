<template>
      <header
    id="navbar"
    :class="[
      'header flex items-center justify-between text-white py-4 px-6 fixed w-full top-0 z-50 shadow-lg transition-all duration-300',
      isMenuOpen || isScrolled ? 'bg-[#2a2c39]' : 'bg-transparent'
    ]"
  >

    <!-- Navbar -->
    <nav class="flex items-center justify-between w-full">
      <!-- Brand -->
      <div class="text-xl font-bold cursor-pointer my-3 sm:ml-[1rem] md:ml-[2rem] xl:ml-[4rem]">LOGO</div>

      <!-- Links for Desktop -->
      <div class="hidden xl:flex items-center space-x-6">
        <a href="#" class="transition duration-300 ease-in-out hover:bg-orange-500 py-2 px-5 rounded-3xl">Home</a>
        <div class="group relative cursor-pointer py-2">
          <div class="flex items-center justify-between">
            <a class="menu-hover py-2 px-5 text-base font-medium transform hover:bg-orange-500 transition duration-300 ease-in-out rounded-3xl">
              About
              <i class="bi bi-chevron-down text-s ml-1"></i>
            </a>
          </div>
          <div class="invisible opacity-0 absolute translate-y-2 z-50 flex w-[150px] flex-col bg-white py-1 px-4 text-gray-800 shadow-xl group-hover:visible group-hover:opacity-100 group-hover:translate-y-0 mt-1 rounded-md transition duration-300 ease-in-out">
            <a class="my-2 block border-b border-gray-100 py-1 text-black hover:text-orange-500 ">Overview</a>
            <a class="my-2 block border-b border-gray-100 py-1 text-black hover:text-orange-500">Direction</a>
            <a class="my-2 block border-b border-gray-100 py-1 text-black hover:text-orange-500">Mission & Vision</a>
            <a class="my-2 block border-b border-gray-100 py-1 text-black hover:text-orange-500">Leadership</a>
          </div>
        </div>

        <div class="group relative cursor-pointer py-2">
          <div class="flex items-center justify-between">
            <a class="menu-hover py-2 px-5 text-base font-medium transform hover:bg-orange-500 transition duration-300 ease-in-out rounded-3xl">
              Service
              <i class="bi bi-chevron-down text-s ml-1"></i>
            </a>
          </div>
          <div class="invisible opacity-0 absolute translate-y-2 z-50 flex w-[190px] flex-col bg-white py-1 px-4 text-gray-800 shadow-xl group-hover:visible group-hover:opacity-100 group-hover:translate-y-0 mt-1 rounded-md transition duration-300 ease-in-out">
            <a class="my-2 block border-b border-gray-100 py-1 text-black hover:text-orange-500">Certificate of Origin</a>
            <a class="my-2 block border-b border-gray-100 py-1 text-black hover:text-orange-500">APEC Card</a>
          </div>
        </div>

        <a href="#" class="transition duration-300 ease-in-out hover:bg-orange-500 py-2 px-5 rounded-3xl">News & Events</a>
        <a href="#" class="transition duration-300 ease-in-out hover:bg-orange-500 py-2 px-5 rounded-3xl">Membership</a>
        <a href="#" class="transition duration-300 ease-in-out hover:bg-orange-500 py-2 px-5 rounded-3xl">Contact</a>
      </div>

      <!-- Language Toggle and Mobile Menu Button -->
      <div class="flex items-center gap-4 sm:mr-[1rem] md:mr-[2rem] xl:mr-[4rem]">
        
        <Link
            :href="route('login')"
            class="py-1 px-5 text-white bg-orange-500 rounded-3xl hover:bg-orange-600"
            >
             Log in
        </Link>

        <ToggleButton />

        <button @click="toggleMenu" class="xl:hidden text-white text-2xl">
          <i class="bi bi-list"></i>
        </button>
      </div>
    </nav>

     <!-- Mobile Menu -->
     <div
      :class="[
        'absolute top-full left-0 w-full bg-[#2f3240] text-white py-4 border-t shadow-lg z-50 transform transition-all duration-300 xl:hidden',
        isMenuOpen ? 'opacity-100 translate-y-0' : 'opacity-0 -translate-y-5 pointer-events-none'
      ]"
    >
      <a href="#" class="block py-2 px-4 hover:text-orange-500">Home</a>

      <!-- About Dropdown for Mobile -->
      <div>
        <div
          @click="toggleDropdown('about')"
          class="flex justify-between items-center py-2 px-4 hover:text-orange-500 cursor-pointer"
        >
          <span
          :class="dropdowns.about ? 'text-orange-500' : ''"
          >
          About</span>
          <i
            :class="[
              'rounded-full px-1 text-white',
              dropdowns.about ? 'bg-orange-500 bi-chevron-up' : 'bg-orange-300 bi-chevron-down'
            ]"
          ></i>
        </div>
        <div v-if="dropdowns.about" class="pl-6 border-black rounded-xl mx-3 bg-[#343745]">
          <a href="#" class="block py-2 px-4 hover:text-orange-500">Overview</a>
          <a href="#" class="block py-2 px-4 hover:text-orange-500">Direction</a>
          <a href="#" class="block py-2 px-4 hover:text-orange-500">Mission & Vision</a>
          <a href="#" class="block py-2 px-4 hover:text-orange-500">Leadership</a>
        </div>
      </div>

      <!-- Services Dropdown for Mobile -->
      <div>
        <div
          @click="toggleDropdown('services')"
          class="flex justify-between items-center py-2 px-4 hover:text-orange-500 cursor-pointer"
        >
          <span
          :class="dropdowns.services ? 'text-orange-500' : ''"
          >Services</span>
          <i
            :class="[
              'rounded-full px-1 text-white',
              dropdowns.services ? 'bg-orange-500 bi-chevron-up' : 'bg-orange-300 bi-chevron-down'
            ]"
          ></i>
        </div>
        <div v-if="dropdowns.services" class="pl-6 border-black rounded-xl mx-3 bg-[#343745]">
          <a href="#" class="block py-2 px-4 hover:text-orange-500">Certificate of Origin</a>
          <a href="#" class="block py-2 px-4 hover:text-orange-500">APEC Card</a>
        </div>
      </div>

      <a href="#" class="block py-2 px-4 hover:text-orange-500">News & Events</a>
      <a href="#" class="block py-2 px-4 hover:text-orange-500">Membership</a>
      <a href="#" class="block py-2 px-4 hover:text-orange-500">Contact</a>
    </div>
  </header>
</template>

<script setup>
import ToggleButton from '@/Components/ToggleButton.vue';
import { ref, onMounted, onUnmounted } from 'vue';
import { Link } from '@inertiajs/vue3';


const isMenuOpen = ref(false);
const isScrolled = ref(false);
const dropdowns = ref({
  about: false,
  services: false,
});

function toggleMenu() {
  isMenuOpen.value = !isMenuOpen.value;
  if (!isMenuOpen.value) {
    dropdowns.value = { about: false, services: false };
  }
}

function toggleDropdown(menu) {
  dropdowns.value[menu] = !dropdowns.value[menu];
}

// Handle scrolling functionality
function handleScroll() {
  isScrolled.value = window.scrollY > 50;
}

// Attach event listeners on mount
onMounted(() => {
  window.addEventListener('scroll', handleScroll);
  document.addEventListener('click', handleClickOutside);
});

// Remove event listeners on unmount
onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll);
  document.removeEventListener('click', handleClickOutside);
});

// Close menu on outside click
function handleClickOutside(event) {
  if (!event.target.closest('.header')) {
    isMenuOpen.value = false;
    dropdowns.value = { about: false, services: false };
  }
}
</script>

<style scoped>
.header {
  padding-left: 1rem;
  padding-right: 1rem;
}

@media (min-width: 1024px) {
  .header {
    padding-left: 2.5rem;
    padding-right: 2.5rem;
  }
}
</style>
