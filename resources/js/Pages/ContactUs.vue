<script setup>
</script>
<template>
    <div class="upcomming-event bg-slate-100 py-5 md:py-20" id="contactus">
        <div class="mx-5 md:mx-56">
            <h1 class="title-section text-3xl text-center font-medium">
                Contact Us
            </h1>
            <div class="mt-8 w-48 m-auto">
                <img src="../../assets/images/icon/icon.png" alt="" class="" />
            </div>
            <p class="text-center mt-2">
                Get in touch for personalized travel assistance, booking inquiries, or to plan your next adventure!
            </p>
        </div>
        <div class="upcomming-event-row mt-10 px-5 md:px-56">
            <div class="row-wrapper mt-5 flex justify-between items-center gap-5">
                <div class="basis-1/2">
                    <input
                        type="text"
                        placeholder="Name"
                        class="rounded-md p-2 border-2 border-slate-200 w-full focus:border-2 focus:!border-red-200 focus:outline-none"
                    />
                </div>
                <div class="basis-1/2">
                    <input
                        type="email"
                        placeholder="Email"
                        class="rounded-md p-2 border-2 border-slate-200 w-full focus:border-2 focus:!border-red-200 focus:outline-none"
                    />
                </div>
            </div>
            <div class="row-wrapper mt-5 flex justify-between items-center gap-5">
                <div class="basis-1/2">
                    <input
                        type="text"
                        placeholder="Phone"
                        class="rounded-md p-2 border-2 border-slate-200 w-full focus:border-2 focus:!border-red-200 focus:outline-none"
                    />
                </div>
                <div class="basis-1/2">
                    <input
                        type="text"
                        placeholder="Address"
                        class="rounded-md p-2 border-2 border-slate-200 w-full focus:border-2 focus:!border-red-200 focus:outline-none"
                    />
                </div>
            </div>

            <div class="my-4">
                <textarea
                    name=""
                    id=""
                    placeholder="Message"
                  class="rounded-md p-2 border-2 border-slate-200 w-full focus:border-2 focus:!border-red-200 focus:outline-none"
                ></textarea>
            </div>
            <button
                class="bg-theme-red p-2 rounded-md text-white hover:bg-slate-50 hover:text-[#1F71B9] w-full"
            >
                Send Message
            </button>
        </div>

        <div class="contact-section flex justify-start items-center gap-5 mx-5 md:mx-56 my-10">
            <div class="left-section custom-shadow basis-1/3 p-5">
                <div class="icon-text-wrapper flex justify-start items-center gap-5">
                    <font-awesome-icon :icon="['fas', 'location-dot']" 
                      class="cursor-pointer bg-theme-red text-white p-1.5 rounded-md"
                    />
                    <div class="text-wrapper">
                        <h1>Samkhusi-26, Kathmandu</h1>
                    </div>
                </div>
                <div class="icon-text-wrapper flex justify-start items-center gap-5 my-10">
                    <font-awesome-icon
                        :icon="['fas', 'phone-volume']"
                        class="cursor-pointer bg-theme-red text-white p-1.5 rounded-md"
                    />
                    <div class="text-wrapper">
                        <h1>9841787837</h1>
                    </div>
                </div>
                <div class="icon-text-wrapper flex justify-start items-center gap-5">
                    <font-awesome-icon
                        :icon="['far', 'envelope']"
                        class="cursor-pointer bg-theme-red text-white p-1.5 rounded-md"
                    />
                    <div class="text-wrapper">
                        <h1>royalroshantravels@gmail.com</h1>
                    </div>
                </div>
            </div>
            <div class="map-section basis-2/3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7063.291366980416!2d85.3129470662952!3d27.728224004284723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb191ed757779f%3A0xa3fb7fed922d73e8!2sSamakhusi%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1729427242617!5m2!1sen!2snp" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</template>
