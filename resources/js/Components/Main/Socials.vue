<template>
    <div class="relative py-20">
        <img
            src="/assets/images/underlay.webp"
            srcset="/assets/images/underlay-300.webp 300w,
                        /assets/images/underlay-500.webp 500w,
                        /assets/images/underlay.webp 1920w"
            sizes="(max-width: 300px) 300px, (max-width: 500px) 500px, 1366px"
            class="absolute inset-0 w-full h-full object-cover opacity-15"
            alt="Follow our social media to stay updated"
        >

        <div class="container relative z-10">
            <h4 class="text-center font-oswald font-semibold text-2xl">Follow us in socials networks</h4>

            <div class="flex items-center justify-center sm:space-x-8 space-x-4 mt-10">
                <Button href="/" size="sm" theme="outline" :useInertia="true">
                    Facebook
                </Button>
                <Button  href="/" size="sm" theme="outline" :useInertia="true">
                    Twitter
                </Button>
                <Button  href="/" size="sm" theme="outline" :useInertia="true">
                    Instagram
                </Button>
            </div>
        </div>
    </div>
</template>

<script setup>
import Button from './Button.vue'

</script>

<style scoped>

</style>
