<template>
    <swiper
        :modules="modules"
        :slides-per-view="1"
        :loop="true"
        :autoplay="{ delay: 2000, disableOnInteraction: false }"
        :speed="1500"
        navigation
        @swiper="onSwiper"
        @slideChange="onSlideChange"
        class="swiper-slide"
    >
        <swiper-slide class="relative">
            <img src="../../assets/images/swiper/slider.jpg" alt="" class="w-full h-[35vh] md:h-[80vh]" />
            <div class="absolute inset-0 bg-sky-600/30"></div>
            <div class="absolute bottom-5 md:bottom-32 left-56 text-white">
                <!-- <h2 class="text-3xl">Support when you need it</h2>
                <p class="lg my-3">port when you need it contact us</p> -->
                <a href="javascript:void(0);" @click="scrollToSection"
                    class="bg-theme-red px-4 py-2 rounded-md font-semibold hover:bg-slate-50 hover:text-[#193eb8]"
                >
                    Contact Us
                </a>
            </div>
        </swiper-slide>
        <swiper-slide class="relative">
            <img src="../../assets/images/swiper/slider1.png" alt="" class="w-full h-[35vh] md:h-[80vh]" />
            <div class="absolute inset-0 bg-sky-600/30"></div>
            <div class="absolute bottom-5 md:bottom-32 left-56 text-white">
                <!-- <h2 class="text-3xl">Support when you need it</h2>
                <p class="lg my-3">port when you need it contact us</p> -->
                 <a href="javascript:void(0);" @click="scrollToSection"
                    class="bg-theme-red px-4 py-2 rounded-md font-semibold hover:bg-slate-50 hover:text-[#193eb8]"
                >
                    Contact Us
            </a>
            </div>
        </swiper-slide>
        <swiper-slide class="swiper-slide relative">
            <img src="../../assets/images/swiper/slider2.jpg" alt="" class="w-full h-[35vh] md:h-[80vh]" />
            <div class="absolute inset-0 bg-sky-600/30"></div>
            <div class="absolute bottom-5 md:bottom-32 left-56 text-white">
                <!-- <h2 class="text-3xl">Support when you need it</h2>
                <p class="lg my-3">port when you need it contact us</p> -->
                 <a href="javascript:void(0);" @click="scrollToSection"
                    class="bg-theme-red px-4 py-2 rounded-md font-semibold hover:bg-slate-50 hover:text-[#193eb8]"
                >
                    Contact Us
            </a>
            </div>
        </swiper-slide>
        <swiper-slide class="swiper-slide relative">
            <img src="../../assets/images/swiper/slider3.jpg" alt="" class="w-full h-[35vh] md:h-[80vh]" />
            <div class="absolute inset-0 bg-sky-600/30"></div>
            <div class="absolute bottom-5 md:bottom-32 left-56 text-white">
                <!-- <h2 class="text-3xl">Support when you need it</h2>
                <p class="lg my-3">port when you need it contact us</p> -->
                 <a href="javascript:void(0);" @click="scrollToSection"
                    class="bg-theme-red px-4 py-2 rounded-md font-semibold hover:bg-slate-50 hover:text-[#193eb8]"
                >
                    Contact Us
            </a>
            </div>
        </swiper-slide>

        <swiper-slide class="swiper-slide relative">
            <img src="../../assets/images/swiper/slider4.jpg" alt="" class="w-full h-[35vh] md:h-[80vh]" />
            <div class="absolute inset-0 bg-sky-600/30"></div>
            <div class="absolute bottom-5 md:bottom-32 left-56 text-white">
                <!-- <h2 class="text-3xl">Support when you need it</h2>
                <p class="lg my-3">port when you need it contact us</p> -->
                 <a href="javascript:void(0);" @click="scrollToSection"
                    class="bg-theme-red px-4 py-2 rounded-md font-semibold hover:bg-slate-50 hover:text-[#193eb8]"
                >
                    Contact Us
            </a>
            </div>
        </swiper-slide>
        <swiper-slide class="swiper-slide relative">
            <img src="../../assets/images/swiper/slider5.png" alt="" class="w-full h-[35vh] md:h-[80vh]" />
            <div class="absolute inset-0 bg-sky-600/30"></div>
            <div class="absolute bottom-5 md:bottom-32 left-56 text-white">
                <!-- <h2 class="text-3xl">Support when you need it</h2>
                <p class="lg my-3">port when you need it contact us</p> -->
                 <a href="javascript:void(0);" @click="scrollToSection"
                    class="bg-theme-red px-4 py-2 rounded-md font-semibold hover:bg-slate-50 hover:text-[#193eb8]"
                >
                    Contact Us
            </a>
            </div>
        </swiper-slide>
        <swiper-slide class="swiper-slide relative">
            <img src="../../assets/images/swiper/slider6.jpg" alt="" class="w-full h-[35vh] md:h-[80vh]" />
            <div class="absolute inset-0 bg-sky-600/30"></div>
            <div class="absolute bottom-5 md:bottom-32 left-56 text-white">
                <!-- <h2 class="text-3xl">Support when you need it</h2>
                <p class="lg my-3">port when you need it contact us</p> -->
                 <a href="javascript:void(0);" @click="scrollToSection"
                    class="bg-theme-red px-4 py-2 rounded-md font-semibold hover:bg-slate-50 hover:text-[#193eb8]"
                >
                    Contact Us
            </a>
            </div>
        </swiper-slide>
    </swiper>
</template>

<script>
// import Swiper core and required modules
import { Navigation, A11y, Autoplay } from "swiper/modules";

// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";

// Import Swiper styles
import "swiper/css";
import "swiper/css/navigation";

export default {
    components: {
        Swiper,
        SwiperSlide,
    },
    setup() {
        const onSwiper = (swiper) => {
            console.log(swiper);
        };
        const onSlideChange = () => {
            console.log("slide change");
        };
        return {
            onSwiper,
            onSlideChange,
            modules: [Navigation, A11y, Autoplay],
        };
    },

    methods: {
    scrollToSection() {
      const section = document.getElementById('contactus');
      if (section) {
        section.scrollIntoView({ behavior: 'smooth' });
      } else {
        console.error('Section not found.');
      }
    }
  }
  
};
</script>
