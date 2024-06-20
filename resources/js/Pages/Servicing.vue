<template>
    <Head>
        <title>Comprehensive Vehicle Servicing in Peterborough</title>
        <meta name="description" content="Maintain your vehicle with reliable servicing and mechanical repairs in Peterborough. Velocity Tech provides expert care for all makes and models.">
    </Head>

    <MainLayout>
        <ShowcaseBanner img="/assets/images/showcase/servicing.webp">
            Full & Partial <br> Vehicle Servicing
            <template #subtitle>Comprehensive Care for Your Car</template>
        </ShowcaseBanner>

        <div class="container py-10 flex 2xl:space-x-16 xl:space-x-8 xl:flex-row flex-col">
            <div class="font-exo">
                <div class="space-y-6">
                    <div class="font-exo">
                        <h1 class="text-3xl font-bold text-secondary mb-4">| Expert All Makes Servicing & Mechanical Repairs in Peterborough</h1>
                        <h2 class="text-xl font-semibold">Comprehensive Maintenance and Repairs for All Vehicle Brands</h2>
                    </div>
                    <p>
                        At Velocity Tech, we provide expert servicing and mechanical repairs for all makes and models of vehicles.
                        Our highly skilled technicians are trained to handle a wide range of automotive issues, ensuring that your vehicle remains in optimal condition.
                        From routine maintenance to complex mechanical repairs, we have the expertise and equipment to get the job done right.
                    </p>
                    <p>
                        We understand that each vehicle has unique needs, which is why we offer personalized service plans tailored to your specific make and model.
                        Our commitment to quality and customer satisfaction means that you can trust us to deliver reliable and efficient service every time.
                        Whether you drive a domestic or foreign vehicle, Velocity Tech is your go-to destination for all makes servicing and mechanical repairs in Peterborough.
                    </p>
                </div>
                <img
                    src="/assets/images/oil-change.webp"
                    srcset="/assets/images/oil-change-300.webp 300w,
                        /assets/images/oil-change-500.webp 500w,
                        /assets/images/oil-change.webp 1920w"
                    sizes="(max-width: 400px) 300px, (max-width: 600px) 500px, 1920px"
                    alt="Servicing oil change carried out"
                    class="w-full sm:h-96 h-60 mt-6 object-cover object-bottom object-top">


                <div class="py-10 space-y-6">
                    <div class="font-exo">
                        <h1 class="text-3xl font-bold text-secondary mb-4">| Comprehensive Full Servicing Packages </h1>
                        <h2 class="text-xl font-semibold">Complete Vehicle Inspections and Maintenance</h2>
                    </div>
                    <p>
                        Velocity Tech offers comprehensive full servicing packages designed to keep your vehicle running smoothly and efficiently.
                        Our full service includes a thorough inspection of all major components, fluid level checks, and replacements,
                        as well as detailed maintenance tasks to ensure your vehicle's longevity and performance.
                        We use high-quality parts and lubricants to guarantee the best results.
                    </p>
                    <div class="flex lg:flex-row flex-col-reverse lg:space-x-6">
                        <div class="space-y-6">
                            <p>
                                Regular full servicing is essential to prevent potential issues and to maintain the safety and reliability of your vehicle.
                                Our transparent service process includes a detailed report of our findings and any recommended actions,
                                so you are always informed about the condition of your vehicle. With Velocity Tech's full servicing,
                                you can drive with peace of mind knowing that your vehicle is well taken care of.
                            </p>
                            <p>
                                Velocity Tech is dedicated to providing exceptional automotive services to the Peterborough community.
                                Book your servicing appointment today and experience the professional care that sets us apart.
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
                            src="/assets/images/servicing.webp"
                            srcset="/assets/images/servicing-300.webp 300w,
                                    /assets/images/servicing-500.webp 500w,
                                    /assets/images/servicing.webp 1920w"
                            sizes="(max-width: 400px) 300px, 500px"
                            alt="Mechanics by a bonnet of a car">
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
