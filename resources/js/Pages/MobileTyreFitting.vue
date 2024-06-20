<template>
    <Head>
        <title>Mobile Tyre Fitting in and around Peterborough</title>
        <meta name="description" content="Enjoy the convenience of expert mobile tyre fitting at your location in Peterborough. Velocity Tech offers fast and professional tyre services.">
    </Head>

    <MainLayout>
        <ShowcaseBanner img="/assets/images/showcase/mobile-tyre-fitting.webp">
            Mobile Tyre Fitting <br> in & around Peterborough
            <template #subtitle>Same day service at home, work or roadside</template>
        </ShowcaseBanner>

        <div class="container py-10 flex 2xl:space-x-16 xl:space-x-8 xl:flex-row flex-col">
            <div class="font-exo">
                <div class="space-y-6">
                    <div class="font-exo">
                        <h1 class="text-3xl font-bold text-secondary mb-4">| Expert Mobile Tyre Fitting Services in Peterborough</h1>
                        <h2 class="text-xl font-semibold">Convenient and Professional Tyre Fitting at Your Location</h2>
                    </div>
                    <p>
                        At Velocity Tech, we understand that your time is valuable. That's why we offer expert mobile tyre fitting services in and around Peterborough.
                        Our skilled technicians come to you, whether you're at home, work, or stranded on the roadside, ensuring a hassle-free tyre fitting experience.
                        We use state-of-the-art equipment to guarantee that your new tyres are fitted quickly and safely, so you can get back on the road with confidence.
                    </p>
                    <p>
                        Mobile tyre fitting is the perfect solution for those with busy schedules or those who experience unexpected tyre issues.
                        Our team is equipped to handle a variety of vehicles and tyre types, ensuring that you receive the best possible service.
                        With competitive pricing and exceptional customer care, Velocity Tech is your go-to choice for mobile tyre fitting in Peterborough.
                    </p>
                </div>
                <img
                    src="/assets/images/mobile-tyre-fitting-1.webp"
                    srcset="/assets/images/mobile-tyre-fitting-1-300.webp 300w,
                        /assets/images/mobile-tyre-fitting-1-500.webp 500w,
                        /assets/images/mobile-tyre-fitting-1.webp 1920w"
                    sizes="(max-width: 400px) 300px, (max-width: 600px) 500px, 1920px"
                    alt="Mobile Tyre Fitting on Roadside"
                    class="w-full sm:h-96 h-60 mt-6 object-cover object-bottom"
                >


                <div class="py-10 space-y-6">
                    <div class="font-exo">
                        <h1 class="text-3xl font-bold text-secondary mb-4">| Why Choose Velocity Tech for Mobile Tyre Fitting?</h1>
                        <h2 class="text-xl font-semibold">Same-Day Service with High-Quality Tyres</h2>
                    </div>
                    <p>
                        When you choose Velocity Tech for your mobile tyre fitting needs, you are choosing reliability, quality, and convenience.
                        Our same-day service means that you won't have to wait long to have your tyres replaced or repaired.
                        We stock a wide range of high-quality tyres from leading brands, ensuring that you get the best tyres suited to your vehicle and driving needs.
                    </p>
                    <div class="flex lg:flex-row flex-col-reverse lg:space-x-6">
                        <div class="space-y-6">
                            <p>
                                Our mobile tyre fitting service is designed to provide you with peace of mind.
                                Our technicians are trained to handle all aspects of tyre fitting, from balancing to alignment,
                                ensuring your vehicle's performance and safety are maintained.
                                Plus, with our transparent pricing and no hidden fees, you can trust that you're getting excellent value for your money.
                            </p>
                            <p>
                                Velocity Tech is committed to providing exceptional automotive services to the Peterborough community.
                                Contact us today to book your mobile tyre fitting service and experience the convenience and professionalism that sets us apart.
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
                            src="/assets/images/mobile-tyre-fitting-2.webp"
                            srcset="/assets/images/mobile-tyre-fitting-2-300.webp 300w,
                                    /assets/images/mobile-tyre-fitting-2-500.webp 500w,
                                    /assets/images/mobile-tyre-fitting-2.webp 1920w"
                            sizes="(max-width: 400px) 300px, 500px"
                            alt="Tyre Replacement"
                        >
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
