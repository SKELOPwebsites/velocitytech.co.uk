<template>
    <div class="container py-20">
        <h3 class="text-center font-oswald font-bold text-2xl">Our Services</h3>
        <p class="text-center mt-2 font-exo text-3xl">that deliver results</p>
        <hr class="border-t-2 w-32 mx-auto mt-4 border-primary-500">

        <div class="grid grid-cols-3 gap-x-4 2xl:h-80 lg:h-60 mt-10">
            <ServiceItem href="/mobile-tyre-fitting" src="/assets/images/services/mobile-tyre-fitting.webp" alt="Mobile Tyre Fitting">
                Mobile Tyre Fitting
                <template #subtitle>
                    At Home, Work or Roadside
                </template>
            </ServiceItem>
            <ServiceItem href="/mot" src="/assets/images/services/mot.webp" alt="MOT">
                MOT
                <template #subtitle>
                    <span>MOT offer from <b>&pound;39.95</b></span>
                </template>
            </ServiceItem>
            <Link href="/brakes" class="lg:col-span-1 col-span-3 lg:h-full h-60 relative group overflow-hidden">
                <img src="/assets/images/brakes-500.webp" alt="Free Brake Check" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition">
                <div class="absolute inset-0 flex flex-col items-center justify-center bg-black/50 text-white">
                    <h3 class="font-oswald font-semibold 2xl:text-6xl text-5xl">Free<br>Brake<br>Check</h3>

                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100 group-hover:translate-y-[300%] transition">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </Link>
        </div>

        <div class="mt-10">
            <h3 class="text-center font-oswald font-bold text-2xl">Other Services</h3>

            <div class="flex items-center justify-center mt-10 space-x-2 text-xl text-primary-500 uppercase font-exo font-semibold">
                <Link href="/brakes">Brakes</Link>
                <span class="text-secondary text-2xl font-normal">|</span>
                <Link href="/servicing">Servicing</Link>
                <span class="text-secondary text-2xl font-normal">|</span>
                <Link href="/tyres">Tyres</Link>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3"
import ServiceItem from "./ServiceItem.vue"
</script>

<style scoped>

</style>
