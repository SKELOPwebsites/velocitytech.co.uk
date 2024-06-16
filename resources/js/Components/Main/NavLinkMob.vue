<template>
    <Link class="w-full py-4 pl-4 border-primary-200 text-white font-oswald" :class="$page.component === component ? 'bg-primary-500 font-bold' : 'bg-primary-400'">
        <slot></slot>
    </Link>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    component: String
})

</script>

<style scoped>

</style>
