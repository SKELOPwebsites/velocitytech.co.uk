<template>
    <Head>
        <title>Accurate Wheel Alignment in Peterborough</title>
        <meta name="description" content="Ensure your vehicle's wheels are perfectly aligned with professional services in Peterborough. Velocity Tech provides precise and reliable wheel alignment.">
    </Head>

    <MainLayout>
        <ShowcaseBanner img="/assets/images/showcase/wheel-alignment.webp">
            Accurate & Reliable <br> Wheel Alignment
            <template #subtitle>Precise and reliable wheel alignment.</template>
        </ShowcaseBanner>

        <div class="container py-10 flex 2xl:space-x-16 xl:space-x-8 xl:flex-row flex-col">
            <div class="font-exo">
                <div class="space-y-6">
                    <div class="font-exo">
                        <h1 class="text-3xl font-bold text-secondary mb-4">| Professional Wheel Alignment Services in Peterborough</h1>
                        <h2 class="text-xl font-semibold">Accurate and Reliable Wheel Alignment</h2>
                    </div>
                    <p>
                        At Velocity Tech, we provide professional wheel alignment services to ensure your vehicle's wheels are perfectly aligned.
                        Proper wheel alignment is essential for maintaining vehicle stability, enhancing handling, and extending the life of your tyres.
                        Our experienced technicians use state-of-the-art alignment equipment to deliver precise and reliable results,
                        ensuring your vehicle operates smoothly and safely.
                    </p>
                    <p>
                        Driving with misaligned wheels can lead to uneven tyre wear, poor fuel efficiency, and a less comfortable driving experience.
                        Our comprehensive wheel alignment service addresses these issues, improving your vehicle's performance and safety.
                        Trust Velocity Tech for accurate and dependable wheel alignment in Peterborough.
                    </p>
                </div>
                <img
                    src="/assets/images/wheel-alignment-1.webp"
                    srcset="/assets/images/wheel-alignment-1-300.webp 300w,
                        /assets/images/wheel-alignment-1-500.webp 500w,
                        /assets/images/wheel-alignment-1.webp 1920w"
                    sizes="(max-width: 400px) 300px, (max-width: 600px) 500px, 1920px"
                    alt="Wheel alignment tracking being carried out"
                    class="w-full sm:h-96 h-60 mt-6 object-cover"
                >


                <div class="py-10 space-y-6">
                    <div class="font-exo">
                        <h1 class="text-3xl font-bold text-secondary mb-4">| Benefits of Regular Wheel Alignment</h1>
                        <h2 class="text-xl font-semibold">Enhancing Performance and Tyre Longevity</h2>
                    </div>
                    <p>
                        Regular wheel alignment checks are crucial for maintaining your vehicle’s optimal performance and tyre longevity.
                        At Velocity Tech, we offer expert alignment services designed to:
                    </p>
                    <ul class="list-disc pl-4 space-y-2">
                        <li>
                            <b>Improve Fuel Efficiency</b>: Properly aligned wheels reduce rolling resistance, helping your vehicle consume less fuel.
                        </li>
                        <li>
                            <b>Enhance Vehicle Handling</b>: Correct alignment ensures your vehicle handles better, providing a smoother and safer driving experience.
                        </li>
                        <li>
                            <b>Extend Tyre Life</b>: Even tyre wear extends the life of your tyres, saving you money in the long run.
                        </li>
                        <li>
                            <b>Reduce Vehicle Wear and Tear</b>: Proper alignment minimizes strain on your vehicle’s suspension and steering systems, reducing wear and tear.
                        </li>
                    </ul>
                    <div class="flex lg:flex-row flex-col-reverse lg:space-x-6">
                        <div class="space-y-6">
                            <p>
                                Our technicians are trained to identify and correct alignment issues quickly and efficiently.
                                Whether you've noticed uneven tyre wear or your vehicle pulls to one side, we can diagnose and fix the problem with precision.
                            </p>
                            <p>
                                Velocity Tech is dedicated to providing exceptional automotive services to the Peterborough community.
                                Schedule your wheel alignment service today and experience the professional care that sets us apart.
                            </p>

                            <Button href="tel:01733813128">
                                <template #icon>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 mr-2">
                                        <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                                    </svg>
                                </template>
                                CALL US NOW
                            </Button>
                        </div>

                        <img
                            class="lg:w-96 w-full lg:h-80 sm:h-96 h-60 lg:mb-0 mb-6 object-cover"
                            src="/assets/images/brakes.webp"
                            srcset="/assets/images/brakes-300.webp 300w,
                                    /assets/images/brakes-500.webp 500w,
                                    /assets/images/brakes.webp 1920w"
                            sizes="(max-width: 400px) 300px, 500px"
                            alt="Brake pad replacement">
                    </div>
                </div>
            </div>
            <PageSidebar />
        </div>

    </MainLayout>
</template>

<script setup>
import { Link, Head } from "@inertiajs/vue3"
import MainLayout from "../Layouts/MainLayout.vue"
import ShowcaseBanner from "../Components/Main/ShowcaseBanner.vue"
import Button from "../Components/Main/Button.vue"
import PageSidebar from "../Components/Main/PageSidebar.vue"
</script>

<style scoped>

</style>
