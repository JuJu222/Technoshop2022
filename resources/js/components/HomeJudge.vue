<template>
    <!-- for vue instead of using a href, vue router links will be used -->
    <!-- replace appropriate tags after installing vue-router -->
    <section>
        <div class="w-full relative px-6 xl:px-0">
            <div class="pt-10 lg:pt-20 lg:flex items-center relative z-10 container mx-auto">
                <div class="w-full lg:w-1/2 h-full lg:pr-10 xl:pr-0 mb-10 lg:mb-0">
                    <img class="mx-auto w-100 md:w-3/5" src="img/asset_1.png" />
                </div>
                <div class="w-full lg:w-1/2 h-full">
                    <p class="uppercase text-2xl mb-4 text-purple">Qusique Tincidun sapien</p>
                    <h1 class="text-gray-900 text-4xl md:text-7xl mb-8">All natural ingredients</h1>
                    <p class="text-gray-800 font-regular mb-8">COMBINING SCIENCE WITH BEAUTY. L'Oreal Paris offers a wide range of skincare solutions for your beauty needs. Each of our skincare products is developed and rigorously tested with leading scientists. Indulge yourself in a luxurious and sensorial skincare experience. Cutting-edge innovations, proven by Science.</p>
                    <div class="bg-white py-4 px-4 flex flex-col sm:flex-row justify-start sm:justify-between items-start sm:items-center shadow-lg rounded-lg">
                        <div class="sm:flex items-center py-2">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-indigo-500 icon icon-tabler icon-tabler-user" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <circle cx="12" cy="7" r="4" />
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                </svg>
                                <p class="leading-none tracking-normal text-gray-800 ml-2.5">Doctor Name</p>
                            </div>
                            <div class="flex items-center sm:mx-4 xl:mx-14 my-6 lg:my-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-indigo-500 icon icon-tabler icon-tabler-layout-bottombar" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <rect x="4" y="4" width="16" height="16" rx="2" />
                                    <line x1="4" y1="15" x2="20" y2="15" />
                                </svg>
                                <p class="leading-none tracking-normal text-gray-800 ml-2.5">Zip code</p>
                            </div>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-indigo-500 icon icon-tabler icon-tabler-flag" width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <line x1="5" y1="5" x2="5" y2="21" />
                                    <line x1="19" y1="5" x2="19" y2="14" />
                                    <path d="M5 5a5 5 0 0 1 7 0a5 5 0 0 0 7 0" />
                                    <path d="M5 14a5 5 0 0 1 7 0a5 5 0 0 0 7 0" />
                                </svg>
                                <p class="leading-none tracking-normal text-gray-800 ml-2.5">Insurance</p>
                            </div>
                        </div>
                        <div class="text-white bg-indigo-600 mt-4 sm:mt-0 p-3 rounded w-full sm:w-auto relative">
                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute right-0 mr-2 sm:mr-auto sm:relative icon icon-tabler icon-tabler-search cursor-pointer" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="10" cy="10" r="7" />
                                <line x1="21" y1="21" x2="15" y2="15" />
                            </svg>
                            <input class="sm:hidden border-b border-gray-300 w-full bg-transparent pr-6" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ExampleComponent class="w-75 mx-auto my-20"></ExampleComponent>
    </section>
</template>

<script>
import JudgeCard from "./InvestorCard";
import ExampleComponent from "./ExampleComponent";

export default {
    name: "HomeJudge",
    components: {JudgeCard, ExampleComponent},
    methods: {
        MenuHandler(flag) {
            if (flag) {
                document.getElementById("list").classList.add("top-100");
                document.getElementById("list").classList.remove("hidden");
                document.getElementById("close").classList.remove("hidden");
                document.getElementById("open").classList.add("hidden");
            } else {
                document.getElementById("list").classList.remove("top-100");
                document.getElementById("list").classList.add("hidden");
                document.getElementById("close").classList.add("hidden");
                document.getElementById("open").classList.remove("hidden");
            }
        },
    },
};
</script>

<style scoped>
/* Top menu */
.top-100 {
    animation: slideDown 0.5s ease-in-out;
}
@keyframes slideDown {
    0% {
        top: -50%;
    }
    100% {
        top: 0;
    }
}
* {
    outline: none !important;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    -webkit-tap-highlight-color: transparent;
}
</style>
