<template>
    <section id="partner" class="partner section py-10">
      <ContainerLayout>
        <Title>
          <template #title>
            Partners
          </template>
          <template #subtitle>
            Our Strategic Partners
          </template>
        </Title>
  
        <div class="container mx-auto">
          <div class="grid grid-cols-1 px-4 md:grid-cols-2 md:px-3 lg:grid-cols-4 lg:px-0 gap-6">
            <!-- Partner Cards -->
            <PartnerCard
              v-for="(partner, index) in partners"
              :key="index"
              :imageUrl="partner.imageUrl"
              :imageAlt="partner.imageAlt"
              :title="partner.title"
              :subtitle="partner.subtitle"
              :socialLinks="partner.socialLinks"
              :data-aos="'fade-up'"
              :data-aos-delay="index * 100"
              />
              <!-- :aosDelay="partner.aosDelay" -->
            
          </div>
        </div>
      </ContainerLayout>
    </section>
  </template>
  
  <script setup>
  import Title from '@/Components/Title.vue';
  import PartnerCard from '@/Components/PartnerCard.vue';
  import ContainerLayout from '../Layouts/ContainerLayout.vue';
  
  const partners = [
    {
      imageUrl: 'frontend/assets/img/partners/partner1.png',
      imageAlt: 'PPIM',
      title: 'PPIM',
      subtitle: 'Persatuan Pengguna Islam Malaysia',
      socialLinks: [
        { url: 'https://www.tiktok.com/@ppim.official', icon: 'bi bi-tiktok' },
        { url: 'https://www.facebook.com/ppim.official/?locale=ms_MY', icon: 'bi bi-facebook' },
        { url: 'https://www.instagram.com/ppim.official/', icon: 'bi bi-instagram' },
        { url: 'https://www.youtube.com/c/tvppim', icon: 'bi bi-youtube' },
      ],
    //   aosDelay: 100,
    },
    {
      imageUrl: 'frontend/assets/img/partners/partner2.jpg',
      imageAlt: 'HRDF',
      title: 'HRDF',
      subtitle: 'Human Resource Development Fund',
      socialLinks: [
        { url: 'https://x.com/hrdcorp_', icon: 'bi bi-twitter-x' },
        { url: 'https://www.facebook.com/hrdcorpmsia', icon: 'bi bi-facebook' },
        { url: 'https://www.instagram.com/hrdcorp/', icon: 'bi bi-instagram' },
        { url: 'https://www.linkedin.com/company/hrdcorp/', icon: 'bi bi-linkedin' },
        { url: 'https://www.youtube.com/channel/UCOnMLqX9Aao2HLQ-seOe6Nw', icon: 'bi bi-youtube' },
      ],
    //   aosDelay: 200,
    },
    {
      imageUrl: 'frontend/assets/img/partners/partner3.png',
      imageAlt: 'MTEM',
      title: 'MTEM',
      subtitle: 'Majlis Tindakan Ekonomi Melayu',
      socialLinks: [
        { url: 'https://mtem.my/', icon: 'bi bi-google' },
        { url: 'https://www.facebook.com/MajlisTindakanEkonomiMelayu', icon: 'bi bi-facebook' },
      ],
    //   aosDelay: 300,
    },
    {
      imageUrl: 'frontend/assets/img/partners/partner4.jpg',
      imageAlt: 'GABUNG',
      title: 'GABUNG',
      subtitle: 'Gabungan Melayu',
      socialLinks: [
        { url: 'https://www.facebook.com/GABUNGMY/', icon: 'bi bi-facebook' },
      ],
    //   aosDelay: 400,
    },
  ];
  </script>
  