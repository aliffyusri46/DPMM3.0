<template>
  <div>
    <Head>
      <template>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Malay Chamber of Commerce Malaysia</title>
        <meta name="description" content="">
        <meta name="keywords" content="">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

        <!-- Favicons -->
        <link href="/frontend/assets/img/logo.png" rel="icon">
        <link href="/frontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="/frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="/frontend/assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="/frontend/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="/frontend/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="/frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Main CSS File -->
        <link href="/frontend/assets/css/main.css" rel="stylesheet">

      </template>
    </Head>

    <Header />
    <HeroSection />

    <main class="">
      <slot />
    </main>

    <Footer />
  </div>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import Header from '@/Navigation/Header.vue';
import Footer from '@/Navigation/Footer.vue';
import HeroSection from '@/Components/HeroSection.vue';
</script>
