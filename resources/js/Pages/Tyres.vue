<template>
    <Head>
        <title>Affordable Tyre Solutions in Peterborough</title>
        <meta name="description" content="Find high-quality tyres at competitive prices in Peterborough. Velocity Tech offers reliable tyre fitting, balancing, and maintenance services.">
    </Head>

    <MainLayout>
        <ShowcaseBanner img="/assets/images/showcase/tyres.webp">
            Quality & Cheap<br> Tyres in Peterborough
            <template #subtitle>Affordable Prices, Unmatched Service</template>
        </ShowcaseBanner>

        <div class="container py-10 flex 2xl:space-x-16 xl:space-x-8 xl:flex-row flex-col">
            <div class="font-exo">
                <div class="space-y-6">
                    <div class="font-exo">
                        <h1 class="text-3xl font-bold text-secondary mb-4">| Quality Tyres in Peterborough</h1>
                        <h2 class="text-xl font-semibold">Affordable and Reliable Tyre Solutions</h2>
                    </div>
                    <p>
                        At Velocity Tech, we offer a wide range of high-quality tyres that combine affordability, reliability, and performance.
                        Whether you need tyres for your car, van, or SUV, we have the perfect options to suit your driving needs and budget.
                        Our selection includes tyres from leading brands known for their durability and excellent performance, ensuring you get the best value for your money.
                    </p>
                    <p>
                        We understand that choosing the right tyres is crucial for your vehicle's safety and efficiency.
                        Our experienced team is here to help you select the ideal tyres that match your driving style and conditions.
                        With our competitive pricing and expert advice, you can trust Velocity Tech to provide the best tyre solutions in Peterborough.
                    </p>
                </div>
                <img
                    src="/assets/images/quality-tyres.webp"
                    srcset="/assets/images/quality-tyres-300.webp 300w,
                        /assets/images/quality-tyres-500.webp 500w,
                        /assets/images/quality-tyres.webp 1920w"
                    sizes="(max-width: 400px) 300px, (max-width: 600px) 500px, 1920px"
                    alt="Roster of premium and high quality tyres"
                    class="w-full sm:h-96 h-60 mt-6 object-cover object-bottom object-bottom"
                >


                <div class="py-10 space-y-6">
                    <div class="font-exo">
                        <h1 class="text-3xl font-bold text-secondary mb-4">| High-Performance Tyres and Wheel Balancing</h1>
                        <h2 class="text-xl font-semibold">Ensuring Superior Handling and Safety</h2>
                    </div>
                    <p>
                        Velocity Tech is committed to enhancing your driving experience with our range of high-performance tyres.
                        Designed to offer superior handling, traction, and safety, our high-performance tyres are perfect for drivers who demand the best from their vehicles.
                        Whether you need tyres for high-speed driving, off-road adventures, or everyday commuting, we have the right tyres to meet your needs.
                    </p>
                    <div class="flex lg:flex-row flex-col-reverse lg:space-x-6">
                        <div class="space-y-6">
                            <p>
                                In addition to providing top-quality tyres, we offer professional wheel balancing services to ensure your vehicle operates smoothly and safely.
                                Proper wheel balancing is essential for maintaining even tyre wear, reducing vibration, and enhancing overall driving comfort.
                                Our technicians use advanced equipment to balance your wheels accurately, prolonging the life of your tyres and improving your vehicle's performance.
                            </p>
                            <p>
                                Velocity Tech is dedicated to providing exceptional automotive services to the Peterborough community.
                                Contact us today to find the perfect tyres for your vehicle and experience our reliable and professional service.
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
                            src="/assets/images/tyre-change.webp"
                            srcset="/assets/images/tyre-change-300.webp 300w,
                                    /assets/images/tyre-change-500.webp 500w,
                                    /assets/images/tyre-change.webp 1920w"
                            sizes="(max-width: 400px) 300px, 500px"
                            alt="tyre being changed at the garage"
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
