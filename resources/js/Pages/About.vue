<script setup>
</script>
<template>
    <div class="mission-area bg-gray-100 py-5 md:py-20">
        <div class="mx-5 md:mx-56">
            <h1 class="title-section text-3xl text-center font-medium">
                Meet Our Team
            </h1>
            <div class="mt-8 w-48 m-auto">
                <img src="../../assets/images/icon/icon.png" alt="" class="" />
            </div>
            <p class="text-center mt-2">Experienced, passionate travel experts dedicated to creating unforgettable journeys.</p>
        </div>
        <div class="mission-row mt-10 px-5 md:px-56 flex items-center flex-wrap gap-5 justify-center">
            <div class="mission-container basis-[80%] h-full md:basis-[22%] relative group">
                <div
                    class="team-hover h-72 w-full py-5 md:py-10 px-5 bg-theme-red text-center text-white"
                >
                    <h1 class="text-lg font-medium">Roshan KC</h1>
                    <h1 class="">Managing Director</h1>
                    <p class="my-3 text-sm">
                        I lead our team in delivering exceptional travel experiences and seamless ticketing services, ensuring every journey is memorable and hassle-free
                    </p>
                    <div class="social-media-wrapper flex gap-1 justify-center">
                        <a href="https://www.facebook.com/profile.php?id=100004140436847" target="_blank">
                            <font-awesome-icon
                                :icon="['fab', 'facebook']"
                                class="mx-3 cursor-pointer bg-white rounded-full text-blue-700 p-2 hover:bg-[#2d99f7] hover:text-white"
                            />
                        </a>
                        <!-- <Link :href="route('home')">
                            <font-awesome-icon
                                :icon="['fab', 'linkedin']"
                                class="mx-3 cursor-pointer bg-white rounded-full text-blue-700 p-2 hover:text-[#1F71B9]"
                            />
                        </Link> -->
                    </div>
                </div>

                <div
                    class="team-wrapper w-[100%] absolute left-0 top-0 scale-100 group-hover:scale-0 transition-all duration-500"
                >
                    <div class="image-wrapper">
                        <img
                            class="h-56 md:h-auto w-full  object-cover"
                            src="../../assets/images/roshan1.jpeg"
                            alt=""
                        />
                    </div>
                    <div
                        class="title-detail-wrapper py-4 px-4 bg-theme-red text-center text-white"
                    >
                        <h1 class="text-xl font-medium">Roshan KC</h1>
                        <p class="mt-1">Managing Director</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
