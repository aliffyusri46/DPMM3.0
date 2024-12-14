<template>
    <!-- FOOTER1 -->
    <footer id="footer" class="footer bg-[#2a2c39] py-8">
        <ContainerLayout>
            <p class="main-title text-center text-white text-xl italic font-semibold mb-8">DEWAN PERNIAGAAN MELAYU MALAYSIA (DPMM) PUTRAJAYA | MALAY CHAMBERS OF COMMERCE MALAYSIA (MCCM)</p>

            <div class="row grid px-6 grid-cols-1 lg:grid-cols-3 md:px-8 lg:px-0 gap-8">

                <!-- Contact Information Column -->
                <div class="col-lg-4">
                    <div class="text-center mb-4">
                        <p class="title text-white text-base italic font-semibold">Contact Info</p>
                        <div class="flex justify-center">
                            <div class="w-24 h-[3px] bg-orange-500 rounded"></div>
                        </div>
                    </div>
                    <div class="address">
                        <p class="text-white text-sm"><i class="bi bi-geo-alt text-orange-500"></i> B-G-R3 Block B, Suasana PJH, Precint 2, 62100, WP Putrajaya, Malaysia</p>
                        <p class="text-white text-sm"><i class="bi bi-telephone text-orange-500"></i> +60 12-718 6151</p>
                    </div>
                </div>

                <!-- States Column -->
                <div class="col-lg-4">
                    <div class="text-center mb-4">
                        <p class="title text-white text-base italic font-semibold">MCCM State Members</p>
                        <div class="flex justify-center">
                            <div class="w-44 h-[3px] bg-orange-500 rounded"></div>
                        </div>
                    </div>
                    <div class="state-grid space-y-2 text-sm">
                        <span class="text-white"><i class="bi bi-caret-right text-orange-500"></i> Negeri Sembilan</span>
                        <span class="text-white"><i class="bi bi-caret-right text-orange-500"></i> Melaka</span>
                        <span class="text-white"><i class="bi bi-caret-right text-orange-500"></i> Johor</span>
                        <span class="text-white"><i class="bi bi-caret-right text-orange-500"></i> Pahang</span>
                        <span class="text-white"><i class="bi bi-caret-right text-orange-500"></i> Terengganu</span>
                        <span class="text-white"><i class="bi bi-caret-right text-orange-500"></i> Kelantan</span>
                        <span class="text-white"><i class="bi bi-caret-right text-orange-500"></i> Sabah</span>
                        <span class="text-white"><i class="bi bi-caret-right text-orange-500"></i> Perlis</span>
                        <span class="text-white"><i class="bi bi-caret-right text-orange-500"></i> W.P Kuala Lumpur</span>
                        <span class="text-white"><i class="bi bi-caret-right text-orange-500"></i> Selangor</span>
                        <span class="text-white"><i class="bi bi-caret-right text-orange-500"></i> W.P Putrajaya</span>
                        <span class="text-white"><i class="bi bi-caret-right text-orange-500"></i> Perak</span>
                        <span class="text-white"><i class="bi bi-caret-right text-orange-500"></i> Kedah</span>
                        <span class="text-white"><i class="bi bi-caret-right text-orange-500"></i> Pulau Pinang</span>
                    </div>
                </div>

                <!-- Social Links Column -->
                <div class="col-lg-4 text-center">
                    <div class="text-center mb-4">
                        <p class="title text-white text-base italic font-semibold">Social Media</p>
                        <div class="flex justify-center">
                            <div class="w-24 h-[3px] bg-orange-500 rounded"></div>
                        </div>
                    </div>
                    <div class="social-links d-flex justify-center space-x-4">
                        <!-- <a href="https://x.com/dpmmofficial?lang=en" class="text-white bg-orange-500 py-2 px-3 rounded-full"><i class="bi bi-twitter-x"></i></a> -->
                        <a href="https://www.facebook.com/dewanperniagaanmelayumalaysiaputrajaya/?locale=ms_MY" class="text-white bg-orange-500 py-2 px-3 rounded-full"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/dpmm.putrajaya.official" class="text-white bg-orange-500 py-2 px-3 rounded-full"><i class="bi bi-instagram"></i></a>
                        <!-- <a href="https://www.linkedin.com/company/dewan-perniagaan-melayu-malaysia/?originalSubdomain=my" class="text-white bg-orange-500 py-2 px-3 rounded-full"><i class="bi bi-linkedin"></i></a> -->
                        <!-- <a href="https://dpmm.org.my/" class="text-white"><i class="bi bi-browser-chrome bg-orange-500 py-2 px-3 rounded-full"></i></a> -->
                    </div>
                </div>
            </div>

            <hr class="mt-6 opacity-50">

            <!-- <div class="container mt-8">
                <div class="copyright text-center text-white mb-2">
                    <span>Copyright</span> <strong class="px-1 sitename">Selecao</strong> <span>All Rights Reserved</span>
                </div>
                <div class="credits text-center text-white">
                    Designed by <a href="https://bootstrapmade.com/" class="text-white underline">BootstrapMade</a> | Distributed By <a href="https://themewagon.com" class="text-white underline">ThemeWagon</a>
                </div>
            </div> -->

        </ContainerLayout>
    </footer>
</template>

<script setup>
    import ContainerLayout from '../Layouts/ContainerLayout.vue';
</script>
