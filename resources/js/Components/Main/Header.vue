<template>
    <div>
        <div class="container flex justify-between py-4">
            <Link href="/">
                <img class="h-40 w-40 object-contain" src="/assets/images/logo.png" alt="VelocityTech">
            </Link>

            <div class="flex flex-col justify-center space-y-2">
                <div class="flex items-center justify-end space-x-3 font-semibold font-oswald">
                    <a href="mailto:info@velocitytech.co.uk">info@velocitytech.co.uk</a>
                    <span class="text-primary-500">|</span>
                    <a href="tel:01733813128" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 mr-2">
                            <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                        </svg>
                        01733 813 128
                    </a>
                </div>
                <div class="flex items-center justify-end space-x-3 font-semibold font-oswald">
                    <span>Mon-Sat: <span class="font-normal text-primary-500">8am - 5pm</span></span>
                    <span class="text-primary-500">|</span>
                    <span>Sun: <span class="font-normal text-primary-500">10am - 4pm</span></span>
                </div>
                <div class="flex items-center justify-end font-semibold font-oswald">
                    <Button @click="getDirections" :isLink="false" size="sm" theme="outline">
                        <template #icon>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 mr-2">
                                <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                            </svg>

                        </template>
                        Get Directions
                    </Button>
                </div>
            </div>
        </div>

        <div class="w-full bg-primary-500 border-t-4 border-primary-300">
            <div class="container flex items-center">
                <NavLink href="/">Home</NavLink>
                <NavLink href="/mobile-tyre-fitting">Mobile Tyre Fitting</NavLink>
                <NavLink href="/tyres">Tyres</NavLink>
                <NavLink href="/mot">MOT</NavLink>
                <NavLink href="/servicing">Servicing</NavLink>
                <NavLink href="/brakes">Brakes</NavLink>
                <NavLink href="/about-us">About Us</NavLink>
                <NavLink href="/contact">Contact</NavLink>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue"
import { Link } from "@inertiajs/vue3"
import NavLink from "./NavLink.vue"
import Button from "./Button.vue"

const destination = ref('Unit A Peartree Business Centre Enterprise way Bretton PE3 8YQ Peterborough')

function getDirections() {
    if (destination.value) {
        const url = `https://www.google.com/maps/dir/?api=1&destination=${encodeURIComponent(
            destination.value
        )}`;
        window.open(url, '_blank');
    }
}
</script>

<style scoped>
.v-enter-active,
.v-leave-active {
    transition-property: height, opacity;
    transition:  0.5s ease;
}

.v-enter-from,
.v-leave-to {
    height: 0;
    opacity: 0;
}



</style>
