<template>
    <div class="">
        <h2 class="text-center font-exo sm:text-3xl text-2xl font-bold mb-2">See what our customers think</h2>
        <p class="text-center md:text-xl sm:text-lg text-sm font-light mb-4">Browse through our customers testimonials.</p>
        <div class="flex items-center justify-center">
            <div class="rating flex items-center justify-center bg-gray-100">
                <span class="font-exo font-extrabold text-sm mr-2.5">RATED SUPERB</span>
                <span class="flex items-center text-yellow-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </span>
            </div>
        </div>
        <div class="w-full md:h-[300px] h-auto pb-8 md:mt-10 sm:mt-12 mt-6 relative select-none">
            <div class="review-wrapper mx-auto md:h-full flex items-center justify-center overflow-hidden" ref="reviewTray">
                <div class="flex items-start justify-start flex-nowrap w-full transition-transform duration-700 ease-in-out" :style="`transform: translateX(${translate}px)`">
                    <div v-for="review in reviews" class="lg:w-1/3 md:w-1/2 w-full md:p-7 p-5 shrink-0 grow-0">
                        <span class="flex items-center justify-center text-yellow-400">
                            <svg v-for="rating in review.rating" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </span>
                        <span class="block text-center text-sm my-4 font-poppins">{{ review.message }}</span>
                        <span class="block text-center text-wheelfit-600 font-oswald uppercase font-bold md:text-xl text-lg">{{ review.author }}</span>
                    </div>
                </div>
            </div>
            <div class="md:hidden flex items-center justify-center flex-row space-x-3">
                <button @click="moveReviews(-1)" class="bg-gray-800 text-white w-10 h-10 outline-0 border-0 text-3xl flex items-center justify-center" type="button" name="button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M7.72 12.53a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 1 1 1.06 1.06L9.31 12l6.97 6.97a.75.75 0 1 1-1.06 1.06l-7.5-7.5Z" clip-rule="evenodd" />
                    </svg>
                </button>
                <button @click="moveReviews(1)" class="bg-gray-800 text-white w-10 h-10 outline-0 border-0 text-3xl flex items-center justify-center" type="button" name="button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            <button @click="moveReviews(-1)" class="md:flex items-center justify-center hidden absolute top-1/2 left-0 -translate-y-1/2 bg-gray-800 text-white w-10 h-10 m-1 outline-0 border-0 text-3xl" type="button" name="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M7.72 12.53a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 1 1 1.06 1.06L9.31 12l6.97 6.97a.75.75 0 1 1-1.06 1.06l-7.5-7.5Z" clip-rule="evenodd" />
                </svg>
            </button>
            <button @click="moveReviews(1)" class="md:flex items-center justify-center hidden absolute top-1/2 right-0 -translate-y-1/2 bg-gray-800 text-white w-10 h-10 m-1 outline-0 border-0 text-3xl" type="button" name="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </div>
</template>

<script setup>
import { ref, computed, onMounted, onUnmounted } from "vue";

const reviews = [
    {
        rating: 5,
        author: 'Sarah L.',
        message: 'Excellent service every time. Mehdi is the best! He always ensures my car is in top condition. Highly recommend!',
    },
    {
        rating: 5,
        author: 'John D.',
        message: 'Fast, reliable, and friendly. They always take great care of my car. The staff is knowledgeable and efficient. Highly recommend!',
    },
    {
        rating: 5,
        author: 'Emily R.',
        message: 'Had my car serviced here. Great job by Mehdi and the team. They explained everything clearly. Will definitely come back!',
    },
    {
        rating: 5,
        author: 'Mark T.',
        message: 'Quick tyre change and fair pricing. The team was very professional. They made the process easy and stress-free. Thank you!',
    },
    {
        rating: 5,
        author: 'Lisa M.',
        message: 'Trustworthy and efficient. My go-to garage for all car needs. The staff is always friendly and helpful. Never disappointed!',
    },
    {
        rating: 5,
        author: 'Mike H.',
        message: 'VelocityTech never disappoints. Great service every time. They are quick and thorough. Highly recommend to everyone!',
    },
    {
        rating: 5,
        author: 'Jessica F.',
        message: 'Mehdi\'s expertise is top-notch. Always a positive experience. He takes the time to ensure everything is perfect. Wouldn\'t go anywhere else!',
    },
    {
        rating: 5,
        author: 'David P.',
        message: 'Professional staff and excellent service. They really know their stuff. The garage is clean and well-organized. Highly recommend!',
    },
    {
        rating: 5,
        author: 'Karen S.',
        message: 'Got an MOT done here. Super fast and friendly service. They made the whole process seamless. Will be back for sure!',
    },
    {
        rating: 5,
        author: 'Alex G.',
        message: 'I’ve been using VelocityTech for years. Their commitment to quality and customer satisfaction is unmatched. Mehdi always goes above and beyond to ensure my car is in perfect condition. The team is knowledgeable and offers great value for money.',
    },
]
shuffle(reviews);

const translate = ref(0);
const index = ref(0);

const reviewTray = ref(null);
const reviewsPerSlide = ref(0);

const reviewPages = computed(() => {
    return Math.ceil((reviews.length / reviewsPerSlide.value))
})

onMounted(() => {
    window.addEventListener('resize', setReviewsPerSlide);
    setReviewsPerSlide();
})
onUnmounted(() => {
    window.removeEventListener('resize', setReviewsPerSlide);
})
function setReviewsPerSlide() {
    reviewsPerSlide.value = getReviewsPerSlide();
    translate.value = 0;
    index.value = 0;
}
function getReviewsPerSlide(){
    let width = window.innerWidth;

    if(width >= 1024){
        return 3;
    }else if(width < 1024 && width >= 768){
        return 2;
    }else{
        return 1;
    }
}

function moveReviews(dir){
    let newIndex = index.value + dir;

    if(newIndex >= reviewPages.value) return;
    if(newIndex < 0) return;

    index.value = newIndex;
    translate.value = -index.value * reviewTray.value.clientWidth;
}
function shuffle(array) {
    let currentIndex = array.length,  randomIndex;

    // While there remain elements to shuffle...
    while (currentIndex !== 0) {

        // Pick a remaining element...
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex--;

        // And swap it with the current element.
        [array[currentIndex], array[randomIndex]] = [
            array[randomIndex], array[currentIndex]];
    }

    return array;
}

</script>

<style scoped>
.rating{
    box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
    padding: 7px 20px;
}
.review-wrapper{
    width: 100%;
}
@media screen and (min-width: 768px) {
    .review-wrapper {
        width: calc(100% - 100px);
    }
}
</style>
