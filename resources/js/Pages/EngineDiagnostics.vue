<template>
    <Head>
        <title>Accurate Engine Diagnostics in Peterborough</title>
        <meta name="description" content="Discover precise engine diagnostics and fault finding services in Peterborough. Trust Velocity Tech to keep your vehicle running smoothly with our advanced diagnostic tools.">
    </Head>

    <MainLayout>
        <ShowcaseBanner img="/assets/images/showcase/engine-management.webp">
            Accurate & Comprehensive<br> Engine Diagnostics
            <template #subtitle>Precise engine diagnostics scans.</template>
        </ShowcaseBanner>

        <div class="container py-10 flex 2xl:space-x-16 xl:space-x-8 xl:flex-row flex-col">
            <div class="font-exo">
                <div class="space-y-6">
                    <div class="font-exo">
                        <h1 class="text-3xl font-bold text-secondary mb-4">| Professional Engine Diagnostics Scan in Peterborough</h1>
                        <h2 class="text-xl font-semibold">Accurate and Comprehensive Engine Diagnostics</h2>
                    </div>
                    <p>
                        At Velocity Tech, we offer professional engine diagnostics scan services to accurately identify and resolve any issues with your vehicle’s engine.
                        Our state-of-the-art diagnostic tools and experienced technicians ensure precise and comprehensive scans,
                        helping you understand the health of your engine and addressing problems before they become serious.
                    </p>
                    <p>
                        Whether your check engine light is on or you're experiencing performance issues, our diagnostics can pinpoint the exact cause.
                        Trust Velocity Tech for reliable and thorough engine diagnostics in Peterborough, ensuring your vehicle runs smoothly and efficiently.
                    </p>
                </div>
                <img
                    src="/assets/images/engine-management-1.webp"
                    srcset="/assets/images/engine-management-1-300.webp 300w,
                        /assets/images/engine-management-1-500.webp 500w,
                        /assets/images/engine-management-1.webp 1920w"
                    sizes="(max-width: 400px) 300px, (max-width: 600px) 500px, 1920px"
                    alt="Engine management scan and repairs"
                    class="w-full sm:h-96 h-60 mt-6 object-cover"
                >


                <div class="py-10 space-y-6">
                    <div class="font-exo">
                        <h1 class="text-3xl font-bold text-secondary mb-4">| Benefits of Regular Engine Diagnostics</h1>
                        <h2 class="text-xl font-semibold">Maintaining Performance and Preventing Costly Repairs</h2>
                    </div>
                    <p>
                        Regular engine diagnostics are essential for maintaining your vehicle’s performance and preventing costly repairs.
                        At Velocity Tech, our engine diagnostics services offer numerous benefits:
                    </p>
                    <ul class="list-disc pl-4 space-y-2">
                        <li>
                            <b>Early Detection of Issues</b>: Identify problems early to avoid major repairs and keep your vehicle in optimal condition.
                        </li>
                        <li>
                            <b>Enhanced Performance</b>: Ensure your engine is running efficiently, improving fuel economy and overall performance.
                        </li>
                        <li>
                            <b>Reduced Emissions</b>: Proper diagnostics help in reducing harmful emissions by ensuring your engine is functioning correctly.
                        </li>
                        <li>
                            <b>Informed Maintenance</b>: Get detailed insights into your engine’s condition, allowing for informed maintenance decisions and better vehicle care.
                        </li>
                    </ul>
                    <div class="flex lg:flex-row flex-col-reverse lg:space-x-6">
                        <div class="space-y-6">
                            <p>
                                Our technicians use advanced diagnostic equipment to read error codes and perform thorough inspections,
                                providing you with a detailed report and expert recommendations. Whether it’s a minor sensor issue or a more complex problem,
                                we have the expertise to fix it efficiently.
                            </p>
                            <p>
                                Velocity Tech is dedicated to providing exceptional automotive services to the Peterborough community.
                                Schedule your engine diagnostics scan today and experience the professional care that sets us apart.
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
                            src="/assets/images/engine-management-2.webp"
                            srcset="/assets/images/engine-management-2-300.webp 300w,
                                    /assets/images/engine-management-2-500.webp 500w,
                                    /assets/images/engine-management-2.webp 1920w"
                            sizes="(max-width: 400px) 300px, 500px"
                            alt="Engine management scan being carried out">
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
