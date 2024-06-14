<template>
    <MainLayout>
        <ShowcaseBanner img="/assets/images/contact-us/showcase.png">
            Reach out to us
            <template #subtitle>Contact us by filling out the form below</template>
        </ShowcaseBanner>

        <div class="container py-10 flex space-x-16">
            <div class="w-full">
                <div class="bg-white shadow-xl shadow-stone-300 px-6 py-4 rounded-lg">
                    <template v-if="$page.props.success">
                        <p class="uppercase font-medium tracking-wide">Message sent successfully</p>
                        <p class="text-sm mt-2">Hold tight for our response soon!</p>

                        <Link href="/" class="block bg-gray-200 w-fit px-4 py-1.5 border border-gray-300 text-gray-600 mt-4 rounded-md text-sm uppercase hover:text-gray-800 hover:border-gray-800 transition duration-150">Back to home</Link>
                    </template>
                    <template v-else>
                        <p class="text-sm text-gray-400 mb-4">Note: * fields are required</p>
                        <div class="mb-4">
                            <label class="block font-medium sm:text-sm text-xs text-gray-700" for="fname">
                                First Name <span class="text-red-500">*</span>
                            </label>

                            <input v-model="form.first_name" class="py-2 px-3 border outline-0 rounded shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-25 w-full block mt-1" id="fname" autocomplete="given-name" type="text">
                            <span v-if="$page.props.errors.first_name" v-text="$page.props.errors.first_name" class="text-xs text-red-500"></span>
                        </div>
                        <div class="mb-4">
                            <label class="block font-medium sm:text-sm text-xs text-gray-700" for="lname">
                                Last Name <span class="text-red-500">*</span>
                            </label>

                            <input v-model="form.last_name" class="py-2 px-3 border outline-0 rounded shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-25 w-full block mt-1" id="lname" autocomplete="family-name" type="text">
                            <span v-if="$page.props.errors.last_name" v-text="$page.props.errors.last_name" class="text-xs text-red-500"></span>
                        </div>
                        <div class="mb-4">
                            <label class="block font-medium sm:text-sm text-xs text-gray-700" for="email">
                                E-mail Address <span class="text-red-500">*</span>
                            </label>

                            <input v-model="form.email" class="py-2 px-3 border outline-0 rounded shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-25 w-full block mt-1" id="email" autocomplete="email" type="email">
                            <span v-if="$page.props.errors.email" v-text="$page.props.errors.email" class="text-xs text-red-500"></span>
                        </div>
                        <div class="mb-4">
                            <label class="block font-medium sm:text-sm text-xs text-gray-700" for="phone">
                                Phone Number
                            </label>

                            <input v-model="form.phone" class="py-2 px-3 border outline-0 rounded shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-25 w-full block mt-1" id="phone" type="text">
                            <span v-if="$page.props.errors.phone" v-text="$page.props.errors.phone" class="text-xs text-red-500"></span>
                        </div>
                        <div class="mb-6">
                            <label class="block font-medium sm:text-sm text-xs text-gray-700" for="comments">
                                Comments <span class="text-red-500">*</span>
                            </label>

                            <textarea v-model="form.comments" id="comments" class="w-full py-2 px-3 block mt-1 min-h-[6rem] rounded shadow-sm outline-0 border border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-25"></textarea>
                            <span v-if="$page.props.errors.comments" v-text="$page.props.errors.comments" class="text-xs text-red-500"></span>
                        </div>

                        <div class="flex items-center justify-end">
                            <Button class="w-full" size="sm">
                                Send Inquiry
                            </Button>
                        </div>
                    </template>
                </div>
            </div>
            <div class="w-80 shrink-0 space-y-10">
                <!--                Sidebar-->
                <PageSidebar />
            </div>
        </div>

    </MainLayout>
</template>

<script setup>
import { Link, useForm } from "@inertiajs/vue3"
import MainLayout from "../Layouts/MainLayout.vue"
import ShowcaseBanner from "../Components/Main/ShowcaseBanner.vue"
import Button from "../Components/Main/Button.vue"
import PageSidebar from "../Components/Main/PageSidebar.vue"

defineProps({
    errors: Object,
})

const form = useForm({
    first_name: null,
    last_name: null,
    email: null,
    phone: null,
    comments: null,
})

function submit() {
    // form.post('/contact', {
    //     preserveScroll: true,
    // })
    router.post('/contact', form, {
        preserveScroll: (page) => Object.keys(page.props.errors).length,
    });

}

</script>

<style scoped>

</style>
