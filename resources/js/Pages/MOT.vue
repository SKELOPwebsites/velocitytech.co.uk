<template>
    <Head>
        <title>Comprehensive MOT Testing in Peterborough</title>
        <meta name="description" content="Get reliable MOT testing for Class 4 and Class 7 vehicles in Peterborough. Velocity Tech ensures your vehicle meets all safety and environmental standards.">
    </Head>

    <MainLayout>
        <ShowcaseBanner img="/assets/images/showcase/mot.webp">
            MOT Test Centre
            <template #subtitle>Your Trusted Partner for Safety Inspections</template>
        </ShowcaseBanner>

        <div class="container py-10 flex 2xl:space-x-16 xl:space-x-8 xl:flex-row flex-col">
            <div class="font-exo">
                <div class="space-y-6">
                    <div class="font-exo">
                        <h1 class="text-3xl font-bold text-secondary mb-4">| Reliable MOT Testing Station in Peterborough</h1>
                        <h2 class="text-xl font-semibold">Comprehensive and Trustworthy MOT Testing</h2>
                    </div>
                    <p>
                        At Velocity Tech, we pride ourselves on being a trusted MOT testing station in Peterborough.
                        Our fully certified and experienced technicians provide thorough MOT inspections to ensure your
                        vehicle meets the required safety and environmental standards.
                        Whether you're preparing for a routine check or need to address specific concerns, our team is here to help you every step of the way.
                    </p>
                    <p>
                        Our MOT testing station is equipped with the latest diagnostic tools and equipment,
                        ensuring that each test is conducted with precision and accuracy. We understand the importance of keeping your vehicle roadworthy and legal,
                        which is why we offer a seamless and efficient MOT testing service.
                        Book your MOT test with Velocity Tech today and drive with confidence knowing your vehicle is in safe hands.
                    </p>
                </div>
                <img
                    src="/assets/images/mot-1.webp"
                    srcset="/assets/images/mot-1-300.webp 300w,
                        /assets/images/mot-1-500.webp 500w,
                        /assets/images/mot-1.webp 1920w"
                    sizes="(max-width: 400px) 300px, (max-width: 600px) 500px, 1920px"
                    alt="MOT Test being carried out 1"
                    class="w-full sm:h-96 h-60 mt-6 object-cover object-bottom"
                >


                <div class="py-10 space-y-6">
                    <div class="font-exo">
                        <h1 class="text-3xl font-bold text-secondary mb-4">| Expert MOT Testing for Class 4 & 7 Vehicles</h1>
                        <h2 class="text-xl font-semibold">Ensuring Safety and Compliance for All Vehicle Types</h2>
                    </div>
                    <p>
                        Velocity Tech specializes in MOT testing for both Class 4 and Class 7 vehicles.
                        Whether you drive a car, van, or light commercial vehicle,
                        our technicians have the expertise to conduct comprehensive MOT tests that meet all regulatory requirements.
                        We provide detailed reports and honest feedback, ensuring that any necessary repairs or adjustments are clearly communicated and addressed promptly.
                    </p>
                    <div class="flex lg:flex-row flex-col-reverse lg:space-x-6">
                        <div class="space-y-6">
                            <p>
                                Class 4 vehicles, including cars and small vans, and Class 7 vehicles, such as larger vans and commercial vehicles up to 3,500kg,
                                are all catered to at our state-of-the-art facility. We are committed to maintaining high standards of service and customer satisfaction.
                                Our competitive pricing and convenient scheduling options make Velocity Tech the top choice for MOT testing in Peterborough.
                            </p>
                            <p>
                                Velocity Tech is dedicated to providing top-tier automotive services to the Peterborough community.
                                Schedule your MOT test today and experience the professionalism and reliability that Velocity Tech is known for.
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
                            src="/assets/images/mot-2.webp"
                            srcset="/assets/images/mot-2-300.webp 300w,
                                    /assets/images/mot-2-500.webp 500w,
                                    /assets/images/mot-2.webp 1920w"
                            sizes="(max-width: 400px) 300px, 500px"
                            alt="MOT Test being carried out 2">
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
