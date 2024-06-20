<template>
    <Link :href="href" :class="{'bg-primary-600': $page.url === href, 'hover:scale-90 transition duration-200 ease-in-out': $page.url !== href}" class="py-3 2xl:px-5 px-4 text-sm text-white font-exo uppercase font-bold">
        <slot />
    </Link>
</template>

<script setup>
import { Link } from "@inertiajs/vue3"

defineProps({
    href: String,
})
</script>

<style scoped>

</style>
