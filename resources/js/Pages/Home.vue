<template>
    <MainLayout>
        <div class="relative h-[500px]">
            <img src="/assets/images/showcase.png" alt="" class="absolute w-full h-full object-cover inset-0">

            <div class="container z-20 relative pt-44 font-montserrat">
                <h1 class="text-5xl text-white font-extrabold leading-tight">Your Trusted Auto Garage <br> in Peterborough</h1>
                <h2 class="text-white text-2xl mt-8">Same day service from just &pound;80</h2>

                <div class="flex items-center mt-4 space-x-4">
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
            <img src="/assets/images/about-us/showcase.jpg" alt="" class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-bl from-black/60 to-primary-500/50"></div>
            <div class="relative z-10 container py-32">
                <h4 class="text-center text-4xl font-bold font-montserrat text-white">Why choose VelocityTech?</h4>

                <p class="text-white text-lg font-poppins px-20 text-center mt-10">
                    VelocityTech in Peterborough offers expert automotive services, including mobile tyre fitting and comprehensive repairs,
                    with a commitment to using top-quality parts and equipment. We prioritize customer satisfaction through convenience, transparent pricing,
                    and fostering long-lasting relationships built on trust and reliability.
                </p>

                <Button class="mt-20 mx-auto" href="/about-us" :useInertia="true">
                    About VelocityTech
                </Button>
            </div>
        </div>
    </MainLayout>
</template>

<script setup>
import { Link } from "@inertiajs/vue3"
import MainLayout from "../Layouts/MainLayout.vue"
import Button from "../Components/Main/Button.vue"
import Partners from "../Components/Main/Partners.vue"
import OurServices from "../Components/Main/OurServices.vue"
</script>

<style scoped>

</style>
