<script setup></script>
<template>
    <div class="bg-theme-red">
        <div class=" md:flex px-5 py-10 md:mx-56 md:py-20 gap-5 justify-between flex-wrap">
            <div class="footer-address-wrapper basis-1/3 text-white">
                <h2 class="font-bold text-lg">Contact Info</h2>
                <p class="my-5">
                    For personalized travel planning, ticketing services, or any inquiries, we're here to help!
                </p>
                <div class="icon-text">
                    <font-awesome-icon
                        :icon="['fas', 'location-dot']"
                        class="mr-3"
                    /><span>Samkhusi-26, Kathmandu</span>
                </div>
                <div class="icon-text my-4">
                    <font-awesome-icon :icon="['fas', 'phone']" class="mr-3" />
                    <span>9841787837,</span>
                    <span> 9815886688</span>
                </div>
                <div class="icon-text">
                    <font-awesome-icon
                        :icon="['far', 'envelope']"
                        class="mr-3"
                    />
                    <span>royalroshantravels@gmail.com</span>
                </div>
            </div>

         

            <div class="footer-address-wrapper basis-1/3">
                <h2 class="text-white font-bold text-lg">Contact Us</h2>

                <div class="mt-5">
                    <input
                        type="text"
                        placeholder="Name"
                        class="rounded-md p-1 w-full"
                    />
                </div>
                <div class="my-4">
                    <input
                        type="email"
                        placeholder="Email"
                        class="rounded-md p-1 w-full"
                    />
                </div>
                <div class="my-4">
                    <textarea
                        name=""
                        id=""
                        placeholder="Message"
                        class="rounded-md p-1 w-full"
                    ></textarea>
                </div>
                <button
                    class="bg-theme-red px-2 py-1 rounded-md p-1 text-white hover:bg-slate-50 hover:text-[#1F71B9] w-full"
                >
                    Contact Us
                </button>
            </div>
        </div>
    </div>
    <div class="bg-slate-800 p-5 md:px-56 md:py-5 flex justify-between flex-wrap">
        <h1 class="text-white">
            @2024 Royal Roshan Travels & Tours All Right Reserved.
        </h1>
        <h1 class="text-white">
            Designed and Developed by
            <a
                href="http://tulbahadurkhatri.com.np/"
                target="_blank"
                class="text-blue-400 font-bold ml-2 hover:underline"
                >Tul Bahadur Khatri</a
            >
        </h1>
    </div>
</template>
