<template>
    <!-- for vue instead of using a href, vue router links will be used -->
    <!-- replace appropriate tags after installing vue-router -->
    <section>
        <div class="w-full relative px-6 xl:!px-20">
            <div class="pt-10 lg:pt-20 lg:flex items-center relative z-10 container mx-auto">
                <div class="w-full lg:w-1/2 h-full lg:pr-10 mb-10 lg:mb-0">
                    <img class="mx-auto w-100 md:w-3/5 drop-shadow-xl" src="img/technoshop_img.png" />
                </div>
                <div class="w-full lg:w-1/2 h-full">
                    <p class="uppercase text-2xl mb-4">Universitas Ciputra - SU IMT</p>
                    <h1 class="text-purple text-4xl md:text-7xl mb-8 fw-bold">Technopreneurship Workshop 2022</h1>
                    <p class="text-gray-800 font-regular mb-8 text-base">Technopreneurship Workshop merupakan workshop bertemakan teknologi yang dikemas dalam bentuk camp jurusan. Melalui workshop ini, peserta diharapkan dapat meningkatkan koneksi yang baik antar angkatan serta melatih dan mempersiapkan peserta untuk menjadi technopreneur muda yang berintegritas dan profesional di masa depan.</p>
                    <div class="bg-white py-4 px-4 flex flex-col sm:flex-row justify-start sm:justify-between items-start sm:items-center shadow-lg rounded-lg">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-indigo-500 icon icon-tabler icon-tabler-user" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="12" cy="7" r="4" />
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            </svg>
                            <p class="leading-none tracking-normal text-gray-800 ml-2.5">Please login to use this website's full features</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import JudgeCard from "./InvestorCard";
import ExampleComponent from "./ExampleComponent";

export default {
    name: "HomeJudge",
    components: {JudgeCard},
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
