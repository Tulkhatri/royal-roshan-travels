<script setup>
import { Link, usePage } from "@inertiajs/vue3";

const page = usePage(); // Get the whole page object

function scrollToSection() {
  const section = document.getElementById('contactus');
  if (section) {
    section.scrollIntoView({ behavior: 'smooth' });
  } 
}

</script>

<template>
    <div class="top-social-media-section">
        <div class="bg-theme-light p-2 md:px-56 flex justify-between flex-wrap">
            <p>Welcome to Royal Roshan Tours & Travels</p>
            <div class="social-media-wrapper">
                <a href="https://www.facebook.com/roheel.xetree/" target="_blank" rel="noopener noreferrer">
                <font-awesome-icon
                    :icon="['fab', 'facebook']"
                    class="mx-3 cursor-pointer text-blue-700"
                />
            </a>
                <!-- <font-awesome-icon
                    :icon="['fab', 'linkedin']"
                    class="mx-3 cursor-pointer text-blue-500"
                /> -->
            </div>
        </div>
    </div>
    <header class="top-social-media-section bg-[#9edafb] sticky -top-24 md:top-0 px-5 z-20">
        <nav class="p-2 lg:px-56 flex justify-between items-center flex-wrap">
            <Link :href="route('home')" class="image-wrapper flex items-center">
                <img
                    class="block h-20 w-48 m-auto"
                    src="../../assets/images/logo.png"
                    alt="Logo"
                />
                <!-- <span class="mx-2">Royal Roshan Travels & Tours</span> -->
            </Link>
            <div class="social-media-wrapper flex">
                <div class="right-button flex">
                <div class="custom-slider-top-button bg-white text-[#1F71B9] m-4 px-6 py-1.5 rounded-3xl">
                    <!-- <a href="#contactus">Book Now</a> -->
                    <a href="javascript:void(0);" @click="scrollToSection">Book Now</a>
                </div>
            </div>
                <div class="flex justify-start items-center">
                    <font-awesome-icon
                        :icon="['far', 'envelope']"
                        class="mx-3 cursor-pointer bg-theme-red text-white p-1.5 rounded-md"
                    /><span>royalroshantravels@gmail.com</span>
                </div>
                <div class="flex justify-start items-center">
                    <font-awesome-icon
                        :icon="['fas', 'phone-volume']"
                        class="mx-3 cursor-pointer bg-theme-red text-white p-1.5 rounded-md"
                    /><span>9841787837</span>
                </div>
            </div>
        </nav>
    </header>

    <header class="bg-theme-red pr-56 pl-52 sticky top-0 z-20">
        <nav class="flex justify-between items-center">
           
        </nav>
    </header>
</template>
