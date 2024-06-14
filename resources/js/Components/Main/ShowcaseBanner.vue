<template>
    <div class="relative h-[500px]">
        <img :src="img" :alt="alt" class="absolute w-full h-full object-cover inset-0">

        <div class="container z-20 relative pt-44 font-montserrat">
            <h1 class="text-5xl text-white font-extrabold leading-tight"><slot/></h1>
            <h2 class="text-white text-2xl mt-8"><slot name="subtitle"/></h2>

            <Button class="mt-4" href="tel:01733813128">
                Call us now
            </Button>
        </div>
    </div>
</template>

<script setup>
import Button from "./Button.vue"

defineProps({
    img: String,
    alt: String,
})

</script>

<style scoped>

</style>
