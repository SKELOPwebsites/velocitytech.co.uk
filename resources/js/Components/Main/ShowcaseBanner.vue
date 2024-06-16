<template>
    <div class="relative 2xl:h-[500px] lg:h-96 sm:h-80 h-64">
        <img
            :src="img"
            :srcset="removeWebpExtension(img)+'-500.webp 500w,' + removeWebpExtension(img)+'-1000.webp 1000w,' + img + ' 1366w'"
            sizes="(max-width: 500px) 500px, (max-width: 1000px) 1000px, 1366px"
            :alt="alt"
            class="absolute w-full h-full object-cover inset-0"
        >

        <div class="container z-20 relative 2xl:pt-44 sm:pt-24 pt-12 font-exo">
            <h1 class="lg:text-5xl sm:text-3xl text-xl text-white font-extrabold leading-tight sm:text-left text-center"><slot/></h1>
            <h2 class="text-white lg:text-2xl sm:text-xl text-lg lg:mt-8 sm:mt-4 mt-2 sm:text-left text-center"><slot name="subtitle"/></h2>

            <div class="flex items-center sm:justify-start justify-center mt-4">
                <Button href="tel:01733813128">
                    Call us now
                </Button>
            </div>
        </div>
    </div>
</template>

<script setup>
import Button from "./Button.vue"

defineProps({
    img: String,
    alt: String,
})

const removeWebpExtension = path => path.replace(/\.webp$/, '');

</script>

<style scoped>

</style>
