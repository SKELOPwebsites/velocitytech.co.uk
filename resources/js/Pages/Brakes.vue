<template>
    <Head>
        <title>Expert Brake Services in Peterborough</title>
        <meta name="description" content="Ensure your vehicle's safety with professional brake inspections and repairs in Peterborough. Trust Velocity Tech for reliable and precise brake services.">

    </Head>

    <MainLayout>
        <ShowcaseBanner img="/assets/images/showcase/brakes.webp">
            Hassle-free Brake &<br> Disc Replacement
            <template #subtitle>Quality Parts for Lasting Performance</template>
        </ShowcaseBanner>

        <div class="container py-10 flex 2xl:space-x-16 xl:space-x-8 xl:flex-row flex-col">
            <div class="font-exo">
                <div class="space-y-6">
                    <div class="font-exo">
                        <h1 class="text-3xl font-bold text-secondary mb-4">| Professional Brake Services in Peterborough</h1>
                        <h2 class="text-xl font-semibold">Expert Brake Inspections and Replacements</h2>
                    </div>
                    <p>
                        At Velocity Tech, your safety is our top priority. We offer professional brake services in Peterborough,
                        ensuring that your vehicle's braking system is in perfect working condition.
                        Our experienced technicians perform thorough brake inspections to identify any issues and provide precise repairs or replacements as needed.
                        From brake pads and discs to calipers and fluid, we handle all aspects of your brake system with expertise and care.
                    </p>
                    <p>
                        Regular brake inspections are crucial to maintaining the safety and performance of your vehicle.
                        At Velocity Tech, we use the latest diagnostic tools and high-quality parts to ensure that your brakes function optimally.
                        Don't compromise on safety—trust our team to keep your braking system in top condition.
                    </p>
                </div>
                <img
                    src="/assets/images/brake-pads.webp"
                    srcset="/assets/images/brake-pads-300.webp 300w,
                        /assets/images/brake-pads-500.webp 500w,
                        /assets/images/brake-pads.webp 1920w"
                    sizes="(max-width: 400px) 300px, (max-width: 600px) 500px, 1920px"
                    alt="Brake pad and discs replacement"
                    class="w-full sm:h-96 h-60 mt-6 object-cover object-bottom"
                >


                <div class="py-10 space-y-6">
                    <div class="font-exo">
                        <h1 class="text-3xl font-bold text-secondary mb-4">| High-Quality Brake Replacement and Maintenance</h1>
                        <h2 class="text-xl font-semibold">Ensuring Maximum Safety and Performance</h2>
                    </div>
                    <p>
                        Velocity Tech specializes in high-quality brake replacement and maintenance services.
                        Over time, brake components can wear out, reducing their effectiveness and compromising your safety.
                        Our technicians are skilled in identifying worn or damaged parts and providing timely replacements to restore your vehicle's braking performance.
                    </p>
                    <div class="flex lg:flex-row flex-col-reverse lg:space-x-6">
                        <div class="space-y-6">
                            <p>
                                We offer a wide range of brake components from leading manufacturers, ensuring that you receive the best products for your vehicle.
                                Our comprehensive brake maintenance services include fluid checks, rotor resurfacing, and system diagnostics,
                                ensuring that every aspect of your braking system is thoroughly examined and maintained.
                                With Velocity Tech, you can drive confidently, knowing your brakes are in expert hands.
                            </p>
                            <p>
                                Velocity Tech is committed to providing top-tier automotive services to the Peterborough community.
                                Schedule your brake service today and experience the professional care that sets us apart.
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
