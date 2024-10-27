<script setup>
import CountDown from "../components/CountDown.vue";
import Swiper from "../components/Swiper.vue";
import Testimonials from "../components/Testimonials.vue";
import About from "./About.vue";
import ContactUs from "./ContactUs.vue";
</script>
<template>
    <!-- head imported globally inside app.js -->
    <Head title="Home"></Head>
    <Swiper />
    
    <div class="justify-center items-center md:flex mt-20 mx-5 md:mx-56">
    <div class="leftsection bg-[#9edafb] py-14 pl-10 pr-20 basis-2/3">
        <h1 class="text-3xl font-medium">About Us</h1>
        <p class="mt-10">Welcome to Royal Roshan Travels & Tours, where your dream journeys come to life! We are a leading 
            travel and tour company dedicated to providing unforgettable experiences, whether you're planning a
             serene getaway, an adventurous excursion, or a cultural exploration.</p>
        <p class="mt-5">
            With years of experience in the industry, our team of travel experts is passionate about curating personalized 
            trips tailored to your unique preferences and needs. We offer a wide range of services, including custom vacation
             packages, group tours, corporate travel solutions, and specialized adventure trips.
        </p>
    </div>

    <div class="relative bg-theme-red right-section ml-8 md:ml-0 basis-1/3 w-80 h-96 md:mt-20 mt-5 m-auto">
        <div class="absolute inset-0  image-wrapper w-full h-full top-10 -left-10">
            <img class="w-full h-full object-cover" src="../../assets/images/roshan.jpeg" alt="">
        </div>
    </div>

    </div>

    <div class="mission-area bg-gray-100 mt-20 py-5 md:py-20">
        <div class="mx-5 md:mx-56">
            <h1 class="title-section text-3xl text-center font-medium">
                Our Service
            </h1>
            <div class="mt-8 w-48 m-auto">
                <img src="../../assets/images/icon/icon.png" alt="" class="" />
            </div>
            <p class="text-center mt-2">Hassle-free flights and curated tour packages for seamless travel experiences.</p>
        </div>
        <div class="mission-row mt-10 mx-5 md:px-56 md:flex items-center flex-column gap-5">
            <div class="mission-container md:basis-[32%] relative group">
                <div class="mission-wrapper">
                    <div class="image-wrapper">
                        <img
                            src="../../assets/images/swiper/slider2.jpg"
                            alt=""
                        />
                    </div>
                    <div
                        class="title-detail-wrapper py-6 px-4 bg-white text-center"
                    >
                        <h1 class="text-xl font-medium">
                            Tour Packages
                        </h1>
                        <p class="mt-2">
                           Discover exciting destinations with our tailored tour packages, offering seamless travel experiences
                            and unforgettable adventures. Let us plan your perfect getaway!
                        </p>
                    </div>
                </div>
                <div class="mission-hover w-full h-full py-20 px-5 bg-theme-red text-center text-white absolute left-0 top-0 scale-0 group-hover:scale-100 transition-all duration-500">
                    <h1 class="text-xl font-medium">
                        Tour Packages
                    </h1>
                    <p class="my-10">
                       Discover exciting destinations with our tailored tour packages, offering seamless travel experiences
                        and unforgettable adventures. Let us plan your perfect getaway!
                    </p>
                        <Link :href="route('home')" class="py-1 px-10 button-wrapper border-2 border-white rounded-full hover:bg-white hover:text-[#1F71B9] hover:transition-all duration-300 ease-in-out">More  <font-awesome-icon :icon="['fas', 'arrow-right']" /></Link>
                </div>
            </div>

            <div class="mission-container basis-[32%] relative group my-5">
                <div class="mission-wrapper">
                    <div class="image-wrapper">
                        <img
                            src="../../assets/images/swiper/slider3.jpg"
                            alt=""
                        />
                    </div>
                    <div
                        class="title-detail-wrapper py-6 px-4 bg-white text-center"
                    >
                        <h1 class="text-xl font-medium">
                            Air Ticketing
                        </h1>
                        <p class="mt-2">
                            We offer hassle-free domestic and international flight booking with competitive prices, flexible options, and personalized service. Let us simplify your travel plans effortlessly!
                        </p>
                    </div>
                </div>
                <div class="mission-hover w-full h-full py-20 px-5 bg-theme-red text-center text-white absolute left-0 top-0 scale-0 group-hover:scale-100 transition-all duration-500">
                    <h1 class="text-xl font-medium">
                        Air Ticketing
                    </h1>
                    <p class="my-10">
                        We offer hassle-free domestic and international flight booking with competitive prices, flexible options, and personalized service. Let us simplify your travel plans effortlessly!
                    </p>
                        <Link :href="route('home')" class="py-1 px-10 button-wrapper border-2 border-white rounded-full hover:bg-white hover:text-[#1F71B9] hover:transition-all duration-300 ease-in-out">More  <font-awesome-icon :icon="['fas', 'arrow-right']" /></Link>
                </div>
            </div>

               <div class="mission-container basis-[32%] relative group">
                <div class="mission-wrapper">
                    <div class="image-wrapper">
                        <img
                            src="../../assets/images/swiper/slider4.jpg"
                            alt=""
                        />
                    </div>
                    <div
                        class="title-detail-wrapper py-6 px-4 bg-white text-center"
                    >
                        <h1 class="text-xl font-medium">
                            Tour Packages
                        </h1>
                        <p class="mt-2">
                           Discover exciting destinations with our tailored tour packages, offering seamless travel experiences
                            and unforgettable adventures. Let us plan your perfect getaway!
                        </p>
                    </div>
                </div>
                <div class="mission-hover w-full h-full py-20 px-5 bg-theme-red text-center text-white absolute left-0 top-0 scale-0 group-hover:scale-100 transition-all duration-500">
                    <h1 class="text-xl font-medium">
                        Tour Packages
                    </h1>
                    <p class="my-10">
                        Discover exciting destinations with our tailored tour packages, offering seamless travel experiences
                            and unforgettable adventures. Let us plan your perfect getaway!
                    </p>
                        <Link :href="route('home')" class="py-1 px-10 button-wrapper border-2 border-white rounded-full hover:bg-white hover:text-[#1F71B9] hover:transition-all duration-300 ease-in-out">More  <font-awesome-icon :icon="['fas', 'arrow-right']" /></Link>
                </div>
            </div>

        </div>
    </div>

   <CountDown />

   <About />

    <div class="video-testimonials-wrapper flex mt-20 flex-wrap md:flex-nowrap">
        <!-- <iframe
            width="100%"
            height="400vh"
            src="https://www.youtube.com/embed/S1dNuCG3sOA"
            title="ENGLISH SPEECH | BARACK OBAMA: The People of India (English Subtitles)"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen
        ></iframe> -->
        <div class="image-wrapper w-full md:h-96">
            <img class="object-cover w-full h-full"src="../../assets/images/roshanvideo.jpg" alt="">
        </div>
        
        <Testimonials />
    </div>

    <ContactUs />

    <!-- refresh page but doesnot go at top use preserve-scroll -->
    <!-- <Link class="mt-[600px] block" href="/" preserve-scroll>Refresh</Link> -->
</template>
