<template>
    <Head>
        <title>Professional Clutch Repairs in Peterborough</title>
        <meta name="description" content="Get expert clutch inspections, repairs, and replacements in Peterborough. Velocity Tech offers precise and reliable clutch services for all vehicle types.">
    </Head>

    <MainLayout>
        <ShowcaseBanner img="/assets/images/showcase/clutches.webp">
            Professional Clutch &<br> Inspections and Repairs
            <template #subtitle>Expert clutch repairs and services.</template>
        </ShowcaseBanner>

        <div class="container py-10 flex 2xl:space-x-16 xl:space-x-8 xl:flex-row flex-col">
            <div class="font-exo">
                <div class="space-y-6">
                    <div class="font-exo">
                        <h1 class="text-3xl font-bold text-secondary mb-4">| Expert Clutch Services in Peterborough</h1>
                        <h2 class="text-xl font-semibold">Professional Clutch Inspections and Repairs</h2>
                    </div>
                    <p>
                        At Velocity Tech, we specialize in professional clutch services, ensuring your vehicle's clutch system operates smoothly and efficiently.
                        Our experienced technicians provide thorough clutch inspections to identify any issues, offering precise repairs or replacements as needed.
                        Whether you're experiencing slipping, sticking, or unusual noises, we have the expertise to diagnose and resolve all clutch-related problems.
                    </p>
                    <p>
                        Regular clutch inspections are essential for maintaining the performance and safety of your vehicle.
                        At Velocity Tech, we use advanced diagnostic tools and high-quality parts to ensure your clutch system functions optimally.
                        Trust our team to keep your vehicle running smoothly with our reliable and efficient clutch services.
                    </p>
                </div>

                <div class="py-10 space-y-6">
                    <div class="font-exo">
                        <h1 class="text-3xl font-bold text-secondary mb-4">| High-Quality Clutch Replacement and Maintenance</h1>
                        <h2 class="text-xl font-semibold">Ensuring Optimal Performance and Longevity</h2>
                    </div>
                    <p>
                        Velocity Tech offers high-quality clutch replacement and maintenance services tailored to your vehicle's specific needs.
                        Over time, clutch components can wear out, affecting your vehicle's performance and drivability.
                        Our skilled technicians are adept at identifying worn or damaged parts and providing timely replacements to restore your vehicle's clutch performance.
                    </p>
                    <div class="flex lg:flex-row flex-col-reverse lg:space-x-6">
                        <div class="space-y-6">
                            <p>
                                We stock a wide range of clutch components from leading manufacturers, ensuring you receive the best products for your vehicle.
                                Our comprehensive clutch maintenance services include adjustments, fluid checks, and system diagnostics,
                                ensuring every aspect of your clutch system is thoroughly examined and maintained.
                                With Velocity Tech, you can drive confidently, knowing your clutch system is in expert hands.
                            </p>
                            <p>
                                Velocity Tech is dedicated to providing exceptional automotive services to the Peterborough community.
                                Schedule your clutch service today and experience the professional care that sets us apart.
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
                            src="/assets/images/clutches-2.webp"
                            srcset="/assets/images/clutches-2-300.webp 300w,
                                    /assets/images/clutches-2-500.webp 500w,
                                    /assets/images/clutches-2.webp 1920w"
                            sizes="(max-width: 400px) 300px, 500px"
                            alt="Gear stick after a clutch repair">
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
