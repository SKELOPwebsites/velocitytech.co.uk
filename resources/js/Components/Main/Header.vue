<template>
    <div>
        <div class="container flex justify-between py-4">
            <Link href="/">
                <img class="sm:size-40 size-28 object-contain" src="/assets/images/logo.webp" alt="VelocityTech">
            </Link>

            <div class="flex flex-col justify-center space-y-2 sm:text-base text-sm">
                <div class="flex items-center justify-end space-x-3 font-semibold font-oswald">
                    <a class="sm:block hidden" href="mailto:info@velocitytech.co.uk">info@velocitytech.co.uk</a>
                    <span class="text-primary-500 sm:block hidden">|</span>
                    <a href="tel:01733813128" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 mr-2">
                            <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                        </svg>
                        01733 813 128
                    </a>
                </div>
                <div class="flex sm:flex-row flex-col sm:items-center items-end sm:justify-end justify-center space-x-3 font-semibold font-oswald">
                    <span>Mon-Sat: <span class="font-normal text-primary-500">8:30am - 5:30pm</span></span>
                    <span class="text-primary-500 sm:block hidden">|</span>
                    <span>Sun: <span class="font-normal text-primary-500">11am - 3pm</span></span>
                </div>
                <div class="flex items-center justify-end font-semibold font-oswald">
                    <Button @click="getDirections" :isLink="false" size="sm" theme="outline" aria-label="Navbar toggle button">
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
            <div class="container xl:flex hidden items-center">
                <NavLink href="/">Home</NavLink>
                <NavLink href="/mot">MOT</NavLink>
                <NavLink href="/servicing">Servicing</NavLink>
                <NavLink href="/brakes">Brakes</NavLink>
                <NavLink href="/clutches">Clutches</NavLink>
                <NavLink href="/tyres">Tyres</NavLink>
                <NavLink href="/batteries" class="2xl:block hidden">Batteries</NavLink>

                <div class="relative" @mouseenter="showDropdown = true" @mouseleave="showDropdown = false">
                    <NavLink href="#" class="flex items-center pointer-events-none">
                        Other Services
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-2">
                            <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
                        </svg>
                    </NavLink>

                    <div v-show="showDropdown" class="absolute flex flex-col bg-primary-500 shadow-md z-50 w-60">
                        <NavLink href="/batteries" class="2xl:hidden block">Batteries</NavLink>
                        <NavLink href="/wheel-alignment">Wheel Alignment</NavLink>
                        <NavLink href="/exhausts">Exhausts</NavLink>
                        <NavLink href="/engine-diagnostics-scan">Engine Diagnostics</NavLink>
                        <NavLink href="/mobile-tyre-fitting">Mobile Tyre Fitting</NavLink>
                        <NavLink href="/recovery">Recovery</NavLink>
                    </div>
                </div>

                <NavLink href="/about-us">About Us</NavLink>
                <NavLink href="/contact">Contact</NavLink>
            </div>
            <div class="container xl:hidden flex items-center justify-between py-2">
                <Button href="tel:01733813128" theme="outline-white" size="sm">
                    Book now
                </Button>

                <button @click="toggleMobileNav()" class="p-2 bg-primary-600 text-white border-0 outline-0 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>

        <transition name="mobile-nav">
            <div v-show="mobileNavShow" class="xl:hidden block bg-primary-200 w-72 fixed top-0 left-0 z-50">
                <div class="h-screen overflow-y-scroll">
                    <button @click="hideMobileNav" class="w-full flex items-center justify-center h-14 text-lg font-oswald" type="button">
                        CLOSE
                    </button>
                    <div class="flex flex-col">
                        <NavLinkMob href="/" component="Home" class="border-b flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                            </svg>
                            HOME
                        </NavLinkMob>
                        <NavLinkMob href="/mot" component="MOT" title="MOT" class="border-b">MOT</NavLinkMob>
                        <NavLinkMob href="/servicing" component="Servicing" title="Servicing" class="border-b">Servicing</NavLinkMob>
                        <NavLinkMob href="/brakes" component="Brakes" title="Brakes" class="border-b">Brakes</NavLinkMob>
                        <NavLinkMob href="/clutches" component="Clutches" title="Clutches" class="border-b">Clutches</NavLinkMob>
                        <NavLinkMob href="/tyres" component="Tyres" title="Tyres" class="border-b">Tyres</NavLinkMob>
                        <NavLinkMob href="/batteries" component="Batteries" title="Batteries" class="border-b">Batteries</NavLinkMob>
                        <NavLinkMob href="/wheel-alignment" component="WheelAlignment" title="Wheel Alignment" class="border-b">Wheel Alignment</NavLinkMob>
                        <NavLinkMob href="/exhausts" component="Exhausts" title="Exhausts" class="border-b">Exhausts</NavLinkMob>
                        <NavLinkMob href="/engine-diagnostics-scan" component="EngineDiagnostics" title="Engine Diagnostics" class="border-b">Engine Diagnostics</NavLinkMob>
                        <NavLinkMob href="/mobile-tyre-fitting" component="MobileTyreFitting" title="Mobile Tyre Fitting" class="border-b">Mobile Tyre Fitting</NavLinkMob>
                        <NavLinkMob href="/recovery" component="Recovery" title="Recovery" class="border-b">Recovery</NavLinkMob>
                        <NavLinkMob href="/about-us" component="About Us" title="About Us" class="border-b">About Us</NavLinkMob>

                        <NavLinkMob href="/contact" component="Contact" title="Contact Us" class="border-b">Contact</NavLinkMob>
                    </div>
                </div>
            </div>
        </transition>
    </div>
</template>

<script setup>
import { ref } from "vue"
import { Link } from "@inertiajs/vue3"
import NavLink from "./NavLink.vue"
import NavLinkMob from "./NavLinkMob.vue"
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

const showDropdown = ref(false);
const otherServicesOpen = ref(false)
const mobileNavShow = ref(false)
const sliding = ref(false)

function toggleMobileNav(){
    if(sliding.value) return;
    mobileNavShow.value = !mobileNavShow.value;
    setSliding();
}
function hideMobileNav(){
    if(sliding.value) return;
    mobileNavShow.value = false;
    setSliding();
}
function setSliding() {
    sliding.value = true;
    setTimeout(() => {
        sliding.value = false;
    }, 500)
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

.mobile-nav-enter-active{
    animation: navInAnimation 0.5s ease;
}
.mobile-nav-leave-active{
    animation: navOutAnimation 0.5s ease;
}

@keyframes navInAnimation {
    from { transform: translateX(-100%); }
    to { transform: translateX(0) }
}
@keyframes navOutAnimation {
    from { transform: translateX(0); }
    to { transform: translateX(-100%) }
}
</style>
