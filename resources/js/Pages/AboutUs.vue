<template>
    <Head>
        <title>Who we are & What we do</title>
        <meta name="description" content="Test description">
    </Head>

    <MainLayout>
        <ShowcaseBanner img="/assets/images/showcase/about-us.webp">
            Your Trusted <br> Local Auto Garage
            <template #subtitle>Who we are & What we do</template>
        </ShowcaseBanner>

        <div class="container py-10 flex 2xl:space-x-16 xl:space-x-8 xl:flex-row flex-col">
            <div class="font-exo">
                <div class="space-y-6">
                    <div class="font-exo">
                        <h1 class="text-3xl font-bold text-secondary mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h1>
                        <h2 class="text-xl font-semibold">Suspendisse quis eleifend magna. Morbi lacinia, arcu id rutrum dapibus</h2>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis eleifend magna. Morbi lacinia, arcu id rutrum dapibus, nisi quam varius est,
                        at vulputate ante velit a eros. Aenean a malesuada nibh. Aliquam a sem dapibus turpis sagittis hendrerit. Phasellus viverra massa enim, at ornare orci rutrum id.
                        Curabitur vitae eleifend nulla, ut luctus tellus. Integer malesuada urna sit amet lorem lacinia, condimentum malesuada sapien aliquam.
                        Nam a pulvinar neque, non blandit libero. Cras vehicula facilisis nisi et porttitor. Etiam ac auctor orci, eu aliquam velit. Suspendisse id posuere justo,
                        a imperdiet lacus.
                    </p>
                    <p>
                        Duis gravida nulla sit amet augue elementum elementum. Ut eu ipsum id turpis rutrum dictum. Aliquam tortor felis, cursus at sem sed, sodales volutpat mauris.
                        Quisque eu dolor blandit, congue odio non, porta nisi. Proin vulputate pretium nibh ac pharetra. Etiam ultrices, turpis vitae feugiat porta, orci diam molestie ex,
                        eget mattis ipsum massa eu ipsum. Nam ac dolor sed turpis gravida egestas.
                    </p>
                </div>
                <img
                    src="/assets/images/mot-waiting-area.webp"
                    srcset="/assets/images/mot-waiting-area-300.webp 300w,
                        /assets/images/mot-waiting-area-500.webp 500w,
                        /assets/images/mot-waiting-area.webp 1920w"
                    sizes="(max-width: 400px) 300px, (max-width: 600px) 500px, 1920px"
                    alt="MOT waiting customer facilities"
                    class="w-full sm:h-96 h-60 mt-6 object-cover object-bottom"
                >


                <div class="py-10 space-y-6">
                    <div class="font-exo">
                        <h1 class="text-3xl font-bold text-secondary mb-4">| In fermentum leo eros, eu dignissim ex placerat et. </h1>
                        <h2 class="text-xl font-semibold">Suspendisse quis eleifend magna. Morbi lacinia, arcu id rutrum dapibus</h2>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis eleifend magna. Morbi lacinia, arcu id rutrum dapibus,
                        nisi quam varius est, at vulputate ante velit a eros. Aenean a malesuada nibh. Aliquam a sem dapibus turpis sagittis hendrerit.
                        Phasellus viverra massa enim, at ornare orci rutrum id. Curabitur vitae eleifend nulla, ut luctus tellus. Integer malesuada urna sit amet lorem lacinia,
                        condimentum malesuada sapien aliquam. Nam a pulvinar neque, non blandit libero. Cras vehicula facilisis nisi et porttitor.
                        Etiam ac auctor orci, eu aliquam velit.Suspendisse id posuere justo, a imperdiet lacus.
                    </p>
                    <div class="flex lg:flex-row flex-col-reverse lg:space-x-6">
                        <div class="space-y-6">
                            <p>
                                Duis gravida nulla sit amet augue elementum elementum. Ut eu ipsum id turpis rutrum dictum. Aliquam tortor felis, cursus at sem sed, sodales volutpat mauris.
                                Quisque eu dolor blandit, congue odio non, porta nisi. Proin vulputate pretium nibh ac pharetra.
                            </p>
                            <p>
                                Etiam euismod elementum nisi, in imperdiet sapien bibendum et. Etiam vel neque mi. Etiam ex eros, tristique a tempus eu, feugiat nec magna.
                                Integer elementum eros quis urna tincidunt, a tristique sem gravida.
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
                            src="/assets/images/car-parts.webp"
                            srcset="/assets/images/car-parts-300.webp 300w,
                                    /assets/images/car-parts-500.webp 500w,
                                    /assets/images/car-parts.webp 1920w"
                            sizes="(max-width: 400px) 300px, 500px"
                            alt="High quality and performance car parts"
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
