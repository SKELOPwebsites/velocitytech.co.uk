<template>
    <Head>
        <title>Reliable Exhaust Repairs in Peterborough</title>
        <meta name="description" content="Ensure your vehicle runs efficiently with professional exhaust repairs and replacements in Peterborough. Velocity Tech provides high-quality exhaust services.">
    </Head>

    <MainLayout>
        <ShowcaseBanner img="/assets/images/showcase/exhausts.webp">
            Professional Exhaust <br> Repairs & Replacement
            <template #subtitle>Reliable and affordable exhaust repair services</template>
        </ShowcaseBanner>

        <div class="container py-10 flex 2xl:space-x-16 xl:space-x-8 xl:flex-row flex-col">
            <div class="font-exo">
                <div class="space-y-6">
                    <div class="font-exo">
                        <h1 class="text-3xl font-bold text-secondary mb-4">| Expert Exhaust Services in Peterborough</h1>
                        <h2 class="text-xl font-semibold">Reliable and Affordable Exhaust Repairs and Replacements</h2>
                    </div>
                    <p>
                        At Velocity Tech, we offer expert exhaust services to ensure your vehicle runs efficiently and quietly.
                        Whether you need a repair, replacement, or a complete exhaust system upgrade, our experienced technicians provide reliable and affordable solutions.
                        A well-maintained exhaust system is crucial for reducing emissions, improving fuel efficiency, and enhancing overall vehicle performance.
                    </p>
                    <p>
                        We stock high-quality exhaust components from leading manufacturers, ensuring durability and optimal performance.
                        Our team is equipped to handle all types of exhaust issues, from minor leaks to complete system failures.
                        Trust Velocity Tech for all your exhaust needs in Peterborough and enjoy a smoother, quieter ride.
                    </p>
                </div>
                <img
                    src="/assets/images/exhaust-1.webp"
                    srcset="/assets/images/exhaust-1-300.webp 300w,
                        /assets/images/exhaust-1-500.webp 500w,
                        /assets/images/exhaust-1.webp 1920w"
                    sizes="(max-width: 400px) 300px, (max-width: 600px) 500px, 1920px"
                    alt="Exhaust of a car on ramps"
                    class="w-full sm:h-96 h-60 mt-6 object-cover"
                >


                <div class="py-10 space-y-6">
                    <div class="font-exo">
                        <h1 class="text-3xl font-bold text-secondary mb-4">| Comprehensive Exhaust System Maintenance</h1>
                        <h2 class="text-xl font-semibold">Enhancing Performance and Reducing Emissions</h2>
                    </div>
                    <p>
                        Regular exhaust system maintenance is essential for maintaining your vehicle's performance and reducing harmful emissions.
                        At Velocity Tech, we offer comprehensive exhaust system checks and maintenance services, including:
                    </p>
                    <ul class="list-disc pl-4 space-y-2">
                        <li>
                            <b>Exhaust Leak Repairs</b>: Identifying and repairing leaks to prevent noise and dangerous gas emissions.
                        </li>
                        <li>
                            <b>Catalytic Converter Services</b>: Ensuring your catalytic converter is functioning properly to reduce harmful emissions.
                        </li>
                        <li>
                            <b>Silencer Replacement</b>: Replacing worn-out silencers to reduce noise levels and improve driving comfort.
                        </li>
                        <li>
                            <b>Exhaust System Inspections</b>: Thorough inspections to identify potential issues and prevent costly repairs.
                        </li>
                    </ul>
                    <div class="flex lg:flex-row flex-col-reverse lg:space-x-6">
                        <div class="space-y-6">
                            <p>
                                Our technicians use advanced diagnostic tools to assess the condition of your exhaust system accurately.
                                By maintaining your exhaust system, you can improve fuel efficiency, reduce emissions,
                                and ensure your vehicle complies with environmental regulations.
                            </p>
                            <p>
                                Velocity Tech is committed to providing top-tier automotive services to the Peterborough community.
                                Schedule your exhaust service today and experience the professional care that sets us apart.
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
                            src="/assets/images/exhaust-2.webp"
                            srcset="/assets/images/exhaust-2-300.webp 300w,
                                    /assets/images/exhaust-2-500.webp 500w,
                                    /assets/images/exhaust-2.webp 1920w"
                            sizes="(max-width: 400px) 300px, 500px"
                            alt="Repair on car exhaust being done">
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
