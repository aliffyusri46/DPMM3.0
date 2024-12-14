
   <template>
    <!-- Hero Section -->
    <section id="hero" class="hero section  flex flex-col justify-end items-center overflow-hidden relative">
      <div id="hero-carousel" class="carousel carousel-fade w-full bg-gradient-to-t from-gray-900 via-gray-900/90 " data-bs-interval="2000" data-bs-ride="carousel">
  
        <!-- Slide 1 -->
        <div class="carousel-item active bg-cover bg-center" style="background-image: url('/images/slide1.png');">
          <div class="carousel-overlay absolute top-0 left-0 w-full h-full bg-gradient-to-t from-[#444444] to-transparent"></div>
          <div class="carousel-container relative z-10 flex flex-col justify-center items-center min-h-[75vh] p-5 text-center">
            <h2 class="text-white text-4xl md:text-5xl font-bold mb-4 animate__animated animate__fadeInDown">MCMM Leadership 2023-2026</h2>
            <p class="text-white text-base md:text-lg lg:max-w-[60%] animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid...</p>
            <a href="#" class="inline-block font-medium text-sm tracking-wide px-8 py-3 mt-3 rounded-full border-2 border-orange-500 hover:bg-orange-500 text-white transition-all animate__animated animate__fadeInUp">Read More</a>
          </div>
        </div>
  
        <!-- Slide 2 -->
        <div class="carousel-item bg-cover bg-center" style="background-image: url('/images/slide7.jpg');">     
          <div class="carousel-overlay absolute top-0 left-0 w-full h-full bg-gradient-to-t from-[#444444] to-transparent"></div>
          <div class="carousel-container relative z-10 flex flex-col justify-center items-center min-h-[75vh] p-5 text-center">
            <h2 class="text-white text-4xl md:text-5xl font-bold mb-4 animate__animated animate__fadeInDown">Current News</h2>
            <p class="text-white text-base md:text-lg lg:max-w-[60%] animate__animated animate__fadeInUp">Summary of the press statement discussing the current issue and the survival of Malay businesses.</p>
            <a href="#news" class="inline-block font-medium text-sm tracking-wide px-8 py-3 mt-3 rounded-full border-2 border-orange-500 hover:bg-orange-500 text-white transition-all animate__animated animate__fadeInUp">Read More</a>
          </div>
        </div>
  
        <!-- Slide 3 -->
        <div class="carousel-item bg-cover bg-center" style="background-image: url('/images/slide3.jpg');">
          <div class="carousel-overlay absolute top-0 left-0 w-full h-full bg-gradient-to-t from-[#444444] to-transparent"></div>
          <div class="carousel-container relative z-10 flex flex-col justify-center items-center min-h-[75vh] p-5 text-center">
            <h2 class="text-white text-4xl md:text-5xl font-bold mb-4 animate__animated animate__fadeInDown">MCMM Club</h2>
            <p class="text-white text-base md:text-lg lg:max-w-[60%] animate__animated animate__fadeInUp">Join the MCCM club today to enjoy various exciting benefits along with the sharing of business experiences.</p>
            <a href="#" class="text-white inline-block font-medium text-sm tracking-wide px-8 py-3 mt-3 rounded-full border-2 border-orange-500 hover:bg-orange-500 hover:text-white transition-all animate__animated animate__fadeInUp">Register Now!</a>
          </div>
        </div>
  
        <!-- Slide 4 -->
        <div class="carousel-item bg-cover bg-center" style="background-image: url('/images/BM.jpg');">
          <div class="carousel-overlay absolute top-0 left-0 w-full h-full bg-gradient-to-t from-[#444444] to-transparent"></div>
          <div class="carousel-container relative z-10 flex flex-col justify-center items-center min-h-[75vh] p-5 text-center">
            <h2 class="text-white text-4xl md:text-5xl font-bold mb-4 animate__animated animate__fadeInDown">Bahasa Melayu Version</h2>
            <p class="text-white text-base md:text-lg lg:max-w-[60%] animate__animated animate__fadeInUp">Dapatkan akses ke laman web kami dalam bahasa Inggeris</p>
            <a href="#" id="slide4LanguageButton" class="text-white inline-block font-medium text-sm tracking-wide px-8 py-3 mt-3 rounded-full border-2 border-orange-500 hover:bg-orange-500 hover:text-white transition-all animate__animated animate__fadeInUp">Tekan Sini</a>
          </div>
        </div>
  
        <!-- Controls -->
        <a class="carousel-control-prev absolute top-1/2 -translate-y-1/2 left-3 opacity-80 hover:opacity-100" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon inline-block w-8 h-8 rounded-full opacity-90"></span>
        </a>
        <a class="carousel-control-next absolute top-1/2 -translate-y-1/2 right-3 opacity-80 hover:opacity-100" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon inline-block w-8 h-8 rounded-full opacity-90"></span>
        </a>
  
      </div>
  
      <!-- Waves -->
      <svg class="hero-waves w-full h-16 rotate-180 bg-white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>
    </section>
  </template>
  
    
    <script setup>
    import 'bootstrap/dist/js/bootstrap.bundle.min.js';

      document.addEventListener('DOMContentLoaded', () => {
        const languageToggle = document.getElementById('languageToggle');
        const slide4LanguageButton = document.getElementById('slide4LanguageButton');
      
        // Check if user preferred Malay and is on Malay page
        const isMalayPage = window.location.href.includes('bm.index');
        const savedLanguage = localStorage.getItem('preferredLanguage');
      
        if (isMalayPage || savedLanguage === 'Malay') {
          languageToggle.checked = true;
        }
      
        // Function to switch language
        function switchLanguage(toMalay) {
          if (toMalay) {
            localStorage.setItem('preferredLanguage', 'Malay');
            window.location.href = "{{ route('bm.index') }}"; // Use Laravel route for BM page
          } else {
            localStorage.setItem('preferredLanguage', 'English');
            window.location.href = "{{ route('index') }}"; // Use Laravel route for English page
          }
        }
      
        // Event listener for toggle button
        languageToggle.addEventListener('change', () => {
          switchLanguage(languageToggle.checked);
        });
      
        // Event listener for Slide 4 button
        slide4LanguageButton.addEventListener('click', (event) => {
          event.preventDefault();
          const toMalay = !languageToggle.checked; // Toggle language
          languageToggle.checked = toMalay; // Update the toggle button
          switchLanguage(toMalay);
        });
      });
      </script>
    
    <style scoped>
    @import 'bootstrap/dist/css/bootstrap.min.css';

    .text-white {
    color: white !important;
    }

    .carousel-container a {
  text-decoration: none;
    }

    .carousel-container a:hover {
      text-decoration: none;
    }
    
    /* Wave Animations */
    .hero .hero-waves {
      display: block;
      width: 100%;
      height: 60px;
      position: relative;
      top: -10px;
    }
    
    .hero .wave1 use {
      animation: move-forever1 10s linear infinite;
      animation-delay: -2s;
      fill: var(--default-color);
      opacity: 0.6;
    }
    
    .hero .wave2 use {
      animation: move-forever2 8s linear infinite;
      animation-delay: -2s;
      fill: #444444;
      opacity: 0.4;
    }
    
    .hero .wave3 use {
      animation: move-forever3 6s linear infinite;
      animation-delay: -2s;
      fill: #444444;
    }
    
    @keyframes move-forever1 {
      0% { transform: translate(85px, 0%); }
      100% { transform: translate(-90px, 0%); }
    }
    
    @keyframes move-forever2 {
      0% { transform: translate(-90px, 0%); }
      100% { transform: translate(85px, 0%); }
    }
    
    @keyframes move-forever3 {
      0% { transform: translate(-90px, 0%); }
      100% { transform: translate(85px, 0%); }
    }
    
    /* Responsive Adjustments */
    
    /* Desktop */
    @media (min-width: 1024px) {
      .hero p {
        max-width: 60%;
      }
    
      .carousel-container {
        padding-right: 0;
        padding-top: 260px;
        justify-content: center; /* Centers content vertically */
        align-items: center; /* Centers content horizontally */
      }
    
      .hero h2 {
        font-size: 48px;
      }
    
      .hero .carousel-control-prev,
      .hero .carousel-control-next {
        width: 5%;
        opacity: 0.8;
      }
    }
    
    /* Tablet */
    @media (min-width: 768px) and (max-width: 1023px) {
      .carousel-item {
        height: 60vh; /* Adjusts height for tablets */
      }
    
      .carousel-container {
        min-height: 60vh; /* Center alignment adjustment */
        padding-right: 0;
        justify-content: center; /* Centers content vertically */
        align-items: center; /* Centers content horizontally */
      }
    
      .hero h2 {
        font-size: 36px;
      }
    
      .hero p {
        max-width: 75%;
        font-size: 18px;
      }
    
      .hero .btn-get-started {
        padding: 10px 24px;
        font-size: 14px;
      }
    }
    
    /* Mobile */
    @media (max-width: 767px) {
      .carousel-item {
        min-height: 75vh; /* Provides more height for content on mobile */
        display: flex;
        justify-content: center;
        align-items: center;
      }
    
      .carousel-container {
        padding: 10px;
        text-align: center;
        max-width: 90%; /* Limit width to keep text readable on smaller screens */
      }
    
      .hero h2 {
        font-size: 24px;
        margin-bottom: 10px;
      }
    
      .hero p {
        font-size: 14px;
        margin-bottom: 15px;
      }
    
      .hero .btn-get-started {
        padding: 8px 16px;
        font-size: 12px;
      }
    }
    </style>