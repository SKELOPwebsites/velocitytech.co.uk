<template>
    <div class="2xl:w-80 xl:w-52 w-full xl:pt-0 pt-10 shrink-0 space-y-10">
        <div class="relative w-full 2xl:h-80 xl:h-52 h-60">
            <img
                src="/assets/images/sidebar/mobile-tyre-fitting.webp"
                srcset="/assets/images/sidebar/mobile-tyre-fitting-500.webp 500w,
                        /assets/images/sidebar/mobile-tyre-fitting.webp 1000w"
                sizes="(max-width: 600px) 500px, (max-width: 960px) 1000px, 500px"
                alt="24hr Mobile Tyre Fitting Service"
                class="w-full h-full absolute inset-0 object-cover">

            <div class="absolute inset-0 bg-black/50 z-10 flex flex-col items-center justify-center">
                <p class="font-oswald text-primary-200 2xl:text-4xl xl:text-2xl text-4xl mb-2">Mobile Tyre Fitting</p>
                <p class="text-white font-exo">Same Day Service</p>
                <p class="text-white font-exo">We Come to You</p>

                <Button href="tel:01733813128" size="sm" class="mt-4">
                    <template #icon>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 mr-2">
                            <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                        </svg>
                    </template>
                    Call now
                </Button>
            </div>
        </div>


        <div class="relative w-full 2xl:h-80 xl:h-52 h-60">
            <img
                src="/assets/images/sidebar/garage.webp"
                srcset="/assets/images/sidebar/garage-500.webp 500w,
                        /assets/images/sidebar/garage.webp 1000w"
                sizes="(max-width: 600px) 500px, (max-width: 960px) 1000px, 500px"
                alt="Call us for fast and efficient services"
                class="w-full h-full absolute inset-0 object-cover"
            >

            <div class="absolute inset-0 bg-primary-600/70 z-10 flex flex-col items-center justify-center">
                <a href="tel:01733813128" class="flex items-center font-oswald text-white 2xl:text-4xl xl:text-2xl text-4xl mb-2 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 mr-2">
                        <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                    </svg>
                    01733 813 128
                </a>
                <p class="text-white font-exo">For fast & efficient service</p>
            </div>
        </div>

        <div class="relative w-full 2xl:h-80 xl:h-52 h-60">
            <img
                src="/assets/images/sidebar/coverage.webp"
                srcset="/assets/images/sidebar/coverage-500.webp 500w,
                        /assets/images/sidebar/coverage.webp 1000w"
                sizes="(max-width: 600px) 500px, (max-width: 960px) 1000px, 500px"
                alt="Covering Peterborough and more!"
                class="w-full h-full absolute inset-0 object-cover">

            <div class="absolute inset-0 bg-black/50 z-10 flex flex-col items-center justify-start 2xl:pt-10 pt-2">
                <div class="mb-2">
                    <p class="font-oswald text-primary-200 2xl:text-4xl xl:text-2xl text-4xl">Areas we Cover</p>
                    <p class="text-gray-300 text-center">(mobile tyre fitting)</p>
                </div>
                <div class="w-full 2xl:px-4 xl:px-1 sm:px-10 px-4 flex flex-wrap mt-4 text-white 2xl:text-sm xl:text-xs text-base space-y-1">
                    <div class="w-1/2 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="2xl:size-5 size-4 text-primary-200 mr-2">
                            <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" />
                        </svg>
                        <span class="font-exo">Bicester</span>
                    </div>
                    <div class="w-1/2 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="2xl:size-5 size-4 text-primary-200 mr-2">
                            <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" />
                        </svg>
                        <span class="font-exo">Milton Keynes</span>
                    </div>
                    <div class="w-1/2 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="2xl:size-5 size-4 text-primary-200 mr-2">
                            <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" />
                        </svg>
                        <span class="font-exo">Northampton</span>
                    </div>
                    <div class="w-1/2 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="2xl:size-5 size-4 text-primary-200 mr-2">
                            <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" />
                        </svg>
                        <span class="font-exo">Oxford</span>
                    </div>
                    <div class="w-1/2 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="2xl:size-5 size-4 text-primary-200 mr-2">
                            <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" />
                        </svg>
                        <span class="font-exo">Peterborough</span>
                    </div>
                    <div class="w-1/2 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="2xl:size-5 size-4 text-primary-200 mr-2">
                            <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" />
                        </svg>
                        <span class="font-exo">Watford</span>
                    </div>
                    <div class="w-1/2 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="2xl:size-5 size-4 text-primary-200 mr-2">
                            <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" />
                        </svg>
                        <span class="font-exo">and Beyond</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import Button from "./Button.vue"

</script>

<style scoped>

</style>
