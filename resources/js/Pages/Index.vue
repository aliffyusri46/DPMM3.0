<template>
  <IndexLayout>
    
    <AboutSection 
      :aboutText="aboutText" 
      :additionalText="additionalText" 
      :listItems="listItems"
    />

    <!-- Membership Section -->
     <MemberSection>
        <template #title>
            Join DPMM Membership Today!
        </template>
        <template #description>
            Join our community and enjoy exclusive benefits tailored for our members. Choose the membership that suits you best:
        </template>
        <template #membershipOptions>
          <li class="flex justify-center md:justify-start items-center">
            <i class="bi bi-1-circle text-orange-500 mr-2"></i>
            <span>State DPMM Permanent Member</span>
          </li>
          <li class="flex justify-center md:justify-start items-center">
            <i class="bi bi-2-circle text-orange-500 mr-2"></i>
            <span>Member of the DPMM Club</span>
          </li>
        </template>
     </MemberSection>


    <!-- Blog Section -->
      <Blog :blogs="blogs" />

    <!-- Video Section -->
    <VideoSection 
    :videoUrl="videoUrl"
    />
    
    <!-- Leadership Section -->
    <LeaderSection />

    <PartnerSection />
   
     <TopButton />

  </IndexLayout>
</template>

<script setup>
import IndexLayout from '@/Layouts/IndexLayout.vue';
import Blog from './Blog.vue'; // Import the Blog component
import AboutSection from '@/Components/AboutSection.vue'; // Import the AboutSection component
import MemberSection from '@/Components/MemberSection.vue';
import LeaderSection from '@/Components/LeaderSection.vue';
import VideoSection from '@/Components/VideoSection.vue';
import PartnerSection from '@/Components/PartnerSection.vue';
import TopButton from '@/Components/TopButton.vue';
import { defineProps } from 'vue';

const props = defineProps({
  blogs: Array, // Accept blogs as a prop from the server-side
});

// Define the data for the AboutSection
const aboutText = "The Malay Chamber of Commerce Malaysia (DPMM), originally founded in 1957 as GDPMM, has roots dating back to 1938 with the Kelantan Malay Chamber of Commerce. Renamed as Dewan Perniagaan Melayu Malaysia in 1992, it represents the interests of Malay entrepreneurs across Malaysia.";
const additionalText = "Dewan Perniagaan Melayu Malaysia (DPMM) has 15 branches nationwide, offering resources and guidance to the broader business community. Through initiatives and partnerships, it continues to strengthen the Malay business ecosystem.";
const listItems = [
  "Acts as a principal custodian of the Malay economy.",
  "Supports Malay SMEs with networking and development opportunities.",
  "Works alongside other national business organizations."
];

// Define the data for the VideoSection
const videoUrl = "https://www.youtube.com/embed/sbIE4NUcTVU";

</script>