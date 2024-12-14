<template>
    <section id="leader" class="leader section">
      <ContainerLayout> 
        <Title>
          <template #title>Leadership</template>
          <template #subtitle>Our Dedicated Leaders</template>
        </Title>
  
        <div class="container mx-auto">
          <div class="grid grid-cols-1 px-4 md:grid-cols-2 xl:grid-cols-3 md:px-3 lg:px-0 gap-6" data-aos="fade-up">
            <!-- Leadership Cards -->

            <LeaderCard 
            v-for="(leader, index) in leaders" 
              :key="index"
              :imageSrc="leader.imageSrc"
              :imageAlt="leader.imageAlt"
              :category="leader.category"
              :title="leader.title"
              :link="leader.link"
              :data-aos="'fade-up'"
              :data-aos-delay="index * 100"
              />

          </div>
        </div>
      </ContainerLayout>
    </section>
  </template>
  
  <script setup>
  import Title from './Title.vue';
  import LeaderCard from './LeaderCard.vue';
  import ContainerLayout from '../Layouts/ContainerLayout.vue';

  const leaders = [
    {
      imageSrc: "frontend/assets/img/leadership/leader1.png",
      imageAlt: "Leader 1",
      category: "MCMM",
      title: "Majlis Eksekutif Dewan Perniagaan Melayu",
      link: "blog-details.html",
      },

      {
        imageSrc: "frontend/assets/img/leadership/leader2.png",
        imageAlt: "Leader 2",
        category: "MCMM",
        title: "Dewanita - Dewan Perniagaan Melayu Malaysia",
        link: "blog-details.html",
      },
      {
        imageSrc: "frontend/assets/img/leadership/leader3.png",
        imageAlt: "Leader 3",
        category: "MCMM",
        title: "Dewan Muda Dewan Melayu",
        link: "blog-details.html",
      },
    ];
  </script>
  