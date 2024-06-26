<template>
    <component
        :is="componentType"
        :href="isLink ? href : null"
        :class="buttonClasses"
        @click="handleClick"
        v-bind="inertiaProps"
    >
        <slot name="icon"></slot>
        <span class="font-exo font-medium"><slot /></span>
    </component>
</template>

<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: String,
    theme: {
        type: String,
        default: 'default',
        validator: value => ['default', 'outline', 'outline-white'].includes(value),
    },
    size: {
        type: String,
        default: 'md',
        validator: value => ['sm', 'md', 'lg'].includes(value),
    },
    isLink: {
        type: Boolean,
        default: true,
    },
    useInertia: {
        type: Boolean,
        default: false,
    }
});

const emit = defineEmits(['click']);

const baseClasses = 'flex items-center justify-center relative w-fit overflow-hidden cursor-pointer hover:scale-105 transition ease-in-out';

const themeClasses = {
    default: 'text-white bg-primary-500 hover:bg-primary-400',
    outline: 'text-primary-500 border border-primary-500 hover:bg-primary-400 hover:border-primary-400 hover:text-white',
    'outline-white': 'text-white border border-white hover:bg-primary-400 hover:border-primary-400 hover:text-white',
};

const sizeClasses = {
    sm: 'text-sm px-3 py-2',
    md: 'sm:text-lg px-6 py-3 text-base',
    lg: 'sm:text-xl sm:px-8 sm:py-4 text-lg px-6 py-3',
};

const buttonClasses = computed(() => [
    baseClasses,
    themeClasses[props.theme],
    sizeClasses[props.size]
].join(' '));

const componentType = computed(() => props.isLink ? (props.useInertia ? Link : 'a') : 'button');

const inertiaProps = computed(() => (props.useInertia ? { href: props.href } : {}));

const handleClick = (event) => {
    if (!props.isLink) {
        emit('click', event);
    }
};
</script>

<style scoped>
.coolBeans {
    transition: .2s transform ease-in-out;
    will-change: transform;
    z-index: 0;
}

.coolBeans::after {
    background-color: #127acc;
    border-radius: 1000rem;
    content: '';
    display: block;
    height: 100%;
    width: 100%;
    position: absolute;
    left: 0;
    top: 0;
    transform: translate(-100%, 0) rotate(10deg);
    transform-origin: top left;
    transition: .2s transform ease-out;
    will-change: transform;
    z-index: -1;
}

.coolBeans:hover::after {
    transform: translate(0, 0);
}

.theme-dark {
    background-color: black;
    color: white;
}

.theme-light {
    background-color: white;
    color: black;
}
</style>
