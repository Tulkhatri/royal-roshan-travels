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
        class="swiper-testimonials  bg-theme-red"
    >
        <swiper-slide class="testimonials pt-20 px-20 pb-14">
            <font-awesome-icon
                :icon="['fas', 'quote-left']"
                class="text-white text-4xl"
            />
            <p class="text-white mt-10">
                An unforgettable experience! Royal Roshan Travels & Tours made our dream vacation seamless, from booking flights to planning every detail of our tour. Their team went above and beyond to ensure everything was perfect. Highly recommend for both ticketing and tour packages!
            </p>
            <div class="image-wrapper mt-8 flex items-center gap-5">
                <img src="../../assets/images/tul.jpg" alt="" />
                <div class="name-designation text-white">
                    <p class="font-bold">Tul Bahadur Khatri</p>
                    <p>Software Engineer</p>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide class="testimonials pt-20 px-20 pb-14">
            <font-awesome-icon
                :icon="['fas', 'quote-left']"
                class="text-white text-4xl"
            />
            <p class="text-white mt-10">
                Exceptional service and attention to detail. Our international tickets were booked quickly, and the team helped us plan an amazing trip. We felt well taken care of throughout the entire journey!
            </p>
            <div class="image-wrapper mt-8 flex items-center gap-5">
                <img src="../../assets/images/swiper/slider6.jpg" alt="" />
                <div class="name-designation text-white">
                    <p class="font-bold">Dhiraj Magar</p>
                    <p>Vlogger</p>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide class="testimonials pt-20 px-20 pb-14">
            <font-awesome-icon
                :icon="['fas', 'quote-left']"
                class="text-white text-4xl"
            />
            <p class="text-white mt-10">
                Fantastic travel agency! The booking process was smooth, and the tour package exceeded our expectations. We'll definitely book with them again
            </p>
            <div class="image-wrapper mt-8 flex items-center gap-5">
                <img src="../../assets/images/swiper/slider4.jpg" alt="" />
                <div class="name-designation text-white">
                    <p class="font-bold">Rohit Dhakal</p>
                    <p>Singer</p>
                </div>
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
};
</script>
