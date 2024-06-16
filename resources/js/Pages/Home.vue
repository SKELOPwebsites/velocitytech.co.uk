<template>
    <Head>
        <title>#1 Auto Services Garage in Peterborough</title>
        <meta name="description" content="Test description">
    </Head>

    <MainLayout>
        <div class="relative 2xl:h-[500px] lg:h-96 sm:h-80 h-64">
            <img
                src="/assets/images/showcase/home.webp"
                srcset="/assets/images/showcase/home-500.webp 500w,
                        /assets/images/showcase/home-1000.webp 1000w,
                        /assets/images/showcase/home.webp 1366w"
                sizes="(max-width: 500px) 500px, (max-width: 1000px) 1000px, 1366px"
                alt="Velocity Tech Auto Services Garage"
                class="absolute w-full h-full object-cover inset-0"
            >

            <div class="container z-20 relative 2xl:pt-44 sm:pt-24 pt-8 font-exo">
                <h1 class="lg:text-5xl sm:text-3xl text-xl text-white font-extrabold leading-tight sm:text-left text-center">Your Trusted Auto Garage <br> in Peterborough</h1>
                <h2 class="text-white lg:text-2xl sm:text-xl text-lg lg:mt-8 sm:mt-4 mt-2 sm:text-left text-center">Same day service from just &pound;80</h2>

                <div class="flex items-center sm:justify-start justify-center sm:mt-4 mt-12 space-x-4">
                    <Button href="tel:01733813128" theme="outline-white">
                        Call us
                    </Button>
                    <span class="font-oswald text-white font-semibold">OR</span>
                    <Button href="tel:01733813128">
                        Book now
                    </Button>
                </div>
            </div>
        </div>

        <Partners />

        <OurServices />

        <div class="relative">
            <img
                src="/assets/images/showcase/about-us.webp"
                srcset="/assets/images/showcase/about-us-500.webp 500w,
                        /assets/images/showcase/about-us-1000.webp 1000w,
                        /assets/images/showcase/about-us.webp 2048w"
                sizes="(max-width: 500px) 500px, (max-width: 1000px) 1000px, 1366px"
                alt="Why choose VelocityTech for your Auto Service needs?"
                class="absolute inset-0 w-full h-full object-cover"
            >
            <div class="absolute inset-0 bg-gradient-to-bl from-black/60 to-primary-500/50"></div>
            <div class="relative z-10 container sm:py-32 py-16">
                <h4 class="text-center sm:text-4xl text-3xl font-bold font-exo text-white">Why choose VelocityTech?</h4>

                <p class="text-white sm:text-lg text-base font-exo xl:px-20 lg:px-10 text-center sm:mt-10 mt-6">
                    VelocityTech in Peterborough offers expert automotive services, including mobile tyre fitting and comprehensive repairs,
                    with a commitment to using top-quality parts and equipment. <br class="sm:hidden block"><br class="sm:hidden block"> We prioritize customer satisfaction through convenience, transparent pricing,
                    and fostering long-lasting relationships built on trust and reliability.
                </p>

                <Button class="sm:mt-20 mt-10 mx-auto" href="/about-us" :useInertia="true">
                    About VelocityTech
                </Button>
            </div>
        </div>
    </MainLayout>
</template>

<script setup>
import { Link, Head } from "@inertiajs/vue3"
import MainLayout from "../Layouts/MainLayout.vue"
import Button from "../Components/Main/Button.vue"
import Partners from "../Components/Main/Partners.vue"
import OurServices from "../Components/Main/OurServices.vue"
</script>

<style scoped>

</style>
