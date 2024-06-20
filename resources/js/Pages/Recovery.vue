<template>
    <Head>
        <title>Fast Breakdown Recovery Services in Peterborough</title>
        <meta name="description" content="Experience prompt and safe vehicle recovery services in Peterborough. Velocity Tech offers 24/7 breakdown recovery to get you back on the road quickly.">
    </Head>

    <MainLayout>
        <ShowcaseBanner img="/assets/images/showcase/recovery.webp">
            Fast & Efficient <br> Breakdown Recovery
            <template #subtitle>Prompt and safe vehicle recovery.</template>
        </ShowcaseBanner>

        <div class="container py-10 flex 2xl:space-x-16 xl:space-x-8 xl:flex-row flex-col">
            <div class="font-exo">
                <div class="space-y-6">
                    <div class="font-exo">
                        <h1 class="text-3xl font-bold text-secondary mb-4">| Reliable Vehicle Recovery Services in Peterborough</h1>
                        <h2 class="text-xl font-semibold">Fast and Efficient Breakdown Recovery</h2>
                    </div>
                    <p>
                        At Velocity Tech, we provide reliable and efficient vehicle recovery services in Peterborough and the surrounding areas.
                        Whether you’re stranded on the roadside or your vehicle won’t start at home, our professional recovery team is here to help.
                        We offer prompt and safe recovery for all types of vehicles, ensuring you get back on the road as quickly as possible.
                    </p>
                    <p>
                        Our recovery services are available 24/7, providing peace of mind no matter where or when you experience a breakdown.
                        Trust Velocity Tech for fast and dependable vehicle recovery services, ensuring you’re never left stranded.
                    </p>
                </div>

                <div class="py-10 space-y-6">
                    <div class="font-exo">
                        <h1 class="text-3xl font-bold text-secondary mb-4">| Comprehensive Breakdown Assistance</h1>
                        <h2 class="text-xl font-semibold">Expert Care and Support When You Need It Most</h2>
                    </div>
                    <p>
                        Velocity Tech offers comprehensive breakdown assistance to handle any situation.
                        Our experienced technicians and recovery specialists are equipped to manage a variety of scenarios, including:
                    </p>
                    <ul class="list-disc pl-4 space-y-2">
                        <li>
                            <b>Roadside Assistance</b>: Quick and efficient service to get you back on the road without needing a tow.
                        </li>
                        <li>
                            <b>Accident Recovery</b>: Safe and professional recovery of your vehicle after an accident, ensuring it’s transported securely.
                        </li>
                        <li>
                            <b>Home Start Service</b>: Assistance when your vehicle won’t start at home, saving you the hassle of arranging transportation to a garage.
                        </li>
                        <li>
                            <b>Off-Road Recovery</b>: Specialized equipment and expertise to recover vehicles stuck in difficult terrain.
                        </li>
                    </ul>
                    <div class="flex lg:flex-row flex-col-reverse lg:space-x-6">
                        <div class="space-y-6">
                            <p>
                                We prioritize your safety and convenience, providing expert care and support whenever you need it.
                                With our transparent pricing and commitment to customer satisfaction, you can rely on Velocity Tech for all your vehicle recovery needs.
                            </p>
                            <p>
                                Velocity Tech is dedicated to providing exceptional automotive services to the Peterborough community.
                                Contact us today for reliable vehicle recovery services and experience the professional care that sets us apart.
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
                            src="/assets/images/recovery-2.webp"
                            srcset="/assets/images/recovery-2-300.webp 300w,
                                    /assets/images/recovery-2-500.webp 500w,
                                    /assets/images/recovery-2.webp 1920w"
                            sizes="(max-width: 400px) 300px, 500px"
                            alt="Car breakdown recovery">
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
