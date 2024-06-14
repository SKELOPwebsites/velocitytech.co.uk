<template>
    <header>
        <Header />
    </header>

    <main>
        <slot />

        <OurPartners />
        <Socials />
    </main>

    <footer>
        <Footer />
    </footer>
</template>

<script setup>
import Header from "/resources/js/Components/Main/Header.vue"
import Footer from "/resources/js/Components/Main/Footer.vue"
import OurPartners from "/resources/js/Components/Main/OurPartners.vue"
import Socials from "/resources/js/Components/Main/Socials.vue"
</script>

<style scoped>

</style>
