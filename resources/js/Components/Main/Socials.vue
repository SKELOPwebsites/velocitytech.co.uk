<template>
    <div class="relative py-20">
        <img src="/assets/images/underlay.jpg" class="absolute inset-0 w-full h-full object-cover opacity-15" alt="">

        <div class="container relative z-10">
            <h4 class="text-center font-oswald font-semibold text-2xl">Follow us in socials networks</h4>

            <div class="flex items-center justify-center space-x-8 mt-10">
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
