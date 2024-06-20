<template>
    <Head>
        <title>Reliable Car Battery Services in Peterborough</title>
        <meta name="description" content="Get high-quality car batteries and professional installation services in Peterborough. Ensure your vehicle runs smoothly with Velocity Tech's reliable battery solutions.">
    </Head>

    <MainLayout>
        <ShowcaseBanner img="/assets/images/showcase/batteries.webp">
            Reliable Car Battery <br> Services in Peterborough
            <template #subtitle>High-quality car batteries and installation.</template>
        </ShowcaseBanner>

        <div class="container py-10 flex 2xl:space-x-16 xl:space-x-8 xl:flex-row flex-col">
            <div class="font-exo">
                <div class="space-y-6">
                    <div class="font-exo">
                        <h1 class="text-3xl font-bold text-secondary mb-4">| Reliable Car Battery Services in Peterborough</h1>
                        <h2 class="text-xl font-semibold">Affordable and High-Quality Car Batteries</h2>
                    </div>
                    <p>
                        At Velocity Tech, we understand the importance of a reliable car battery for the smooth operation of your vehicle.
                        We offer a wide range of high-quality car batteries at affordable prices, ensuring you get the best performance and longevity for your investment.
                        Our batteries are sourced from leading manufacturers known for their durability and reliability,
                        providing you with peace of mind every time you start your vehicle.
                    </p>
                    <p>
                        Choosing the right battery is crucial for your vehicle's performance, and our experienced team is here to help you make the best choice.
                        We provide expert advice and professional installation services, ensuring your new battery is fitted correctly and efficiently.
                        Trust Velocity Tech for all your car battery needs in Peterborough.
                    </p>
                </div>
                <img
                    src="/assets/images/battery-1.webp"
                    srcset="/assets/images/battery-1-300.webp 300w,
                        /assets/images/battery-1-500.webp 500w,
                        /assets/images/battery-1.webp 1920w"
                    sizes="(max-width: 400px) 300px, (max-width: 600px) 500px, 1920px"
                    alt="Battery replacement"
                    class="w-full sm:h-96 h-60 mt-6 object-cover"
                >


                <div class="py-10 space-y-6">
                    <div class="font-exo">
                        <h1 class="text-3xl font-bold text-secondary mb-4">| Expert Battery Testing and Replacement</h1>
                        <h2 class="text-xl font-semibold">Ensuring Optimal Vehicle Performance</h2>
                    </div>
                    <p>
                        At Velocity Tech, we offer comprehensive battery testing and replacement services to keep your vehicle running smoothly.
                        Regular battery testing is essential to identify potential issues before they become major problems.
                        Our technicians use advanced diagnostic tools to test your battery's health and performance, providing accurate assessments and recommendations.
                    </p>
                    <div class="flex lg:flex-row flex-col-reverse lg:space-x-6">
                        <div class="space-y-6">
                            <p>
                                If your battery needs replacing, we ensure a quick and hassle-free service. Our team will remove the old battery and install a new one,
                                checking all connections and ensuring optimal performance. With our expert battery replacement services, you can drive confidently,
                                knowing your vehicle's electrical system is in top condition.
                            </p>
                            <p>
                                Velocity Tech is dedicated to providing exceptional automotive services to the Peterborough community.
                                Contact us today for reliable battery testing, replacement, and installation services, and experience the professional care that sets us apart.
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
                            src="/assets/images/battery-2.webp"
                            srcset="/assets/images/battery-2-300.webp 300w,
                                    /assets/images/battery-2-500.webp 500w,
                                    /assets/images/battery-2.webp 1920w"
                            sizes="(max-width: 400px) 300px, 500px"
                            alt="Open bonnet with newly inserted battery">
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
