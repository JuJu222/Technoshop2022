<template>
    <!-- for vue instead of using a href, vue router links will be used -->
    <!-- replace appropriate tags after installing vue-router -->
    <div>
        <div class="w-full relative px-2 xl:!px-20">
            <div class="pt-10 lg:pt-20 lg:flex items-center relative z-10 container mx-auto">
                <div class="w-full lg:w-1/2 h-full">
                    <p class="uppercase text-2xl mb-4">Technopreneurship Workshop 2022</p>
                    <h1 class="text-purple text-4xl md:text-7xl mb-8 fw-bold">Welcome, {{ judge.name }}</h1>
                    <p class="text-gray-800 font-regular mb-8 text-base">Please use the QR scanner to scan a team's QR code whom you want to invest in and input their scores and the amount of coins to invest. You can also use any QR code scanner on your phone (Note: The QR code must have the logo of UC).</p>
                </div>
                <div class="w-full lg:w-1/2 h-full lg:pl-10 mb-10 lg:mb-0">
                    <div>
                        <h1 class="text-purple text-2xl md:text-3xl mb-3 fw-bold">Your remaining coins: </h1>
                        <div class="bg-white py-4 px-4 flex flex-col sm:flex-row justify-start sm:justify-between items-start sm:items-center shadow-lg rounded-lg">
                            <h1 class="text-center mx-auto tracking-normal text-purple text-4xl fw-bold">{{ judge.judge.points }}</h1>
                        </div>
                    </div>
                    <div>
                        <button @click="openModal" class="block w-full text-center my-4 border rounded-md px-3 sm:px-16 py-3 bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-700 focus:ring-opacity-50">Show QR Scanner</button>
                    </div>
                </div>
            </div>
            <div class="relative z-10 container mx-auto pt-6 lg:px-20 md:px-6 px-1">
                <h1 class="text-purple text-2xl md:text-3xl mb-3 fw-bold mx-auto max-w-max">Or use the list below if you are having problems: </h1>
                <div v-for="(team, index) in teams" :key="team.id" class="md:!mb-5 mb-3 text-xs flex flex-row w-full">
                    <div class="px-2 py-2 items-center bg-white rounded-lg shadow-lg w-full">
                        <div class="flex flex-row">
                            <div class="px-2 py-2 items-center">
                                <p class="text-lg sm:text-xl font-bold whitespace-nowrap">{{ team.user.name }}</p>
                            </div>
                            <div class="px-2 py-2 items-center max-h-max flex">
                                <p class="text-xs align-items-center">{{ team.mentors }}</p>
                            </div>
                        </div>
                        <div class="flex flex-row">
                            <div class="px-2 py-2 items-center">
                                <p class="text-xs">{{ team.members }}</p>
                            </div>
                            <div class="w-full flex align-items-center justify-content-end pr-4 mb-2">
                                <span v-if="team.idea || judge.judge.points < 1" class="block text-center w-32 border rounded-md px-3 sm:px-16 py-3 bg-gray-300 text-gray-500 disabled focus:outline-none focus:ring-2 focus:ring-indigo-700 focus:ring-opacity-50">Invest</span>
                                <a v-else :href="'/judge/'+team.id" class="block text-center w-32 border rounded-md px-3 sm:px-16 py-3 bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-700 focus:ring-opacity-50">Invest</a>
                            </div>
                        </div>
                        <div v-if="team.idea" class="flex flex-row">
                            <div class="px-2 py-2 items-center max-h-max flex">
                                <p class="text-xs align-items-center">Scores and coins given: </p>
                            </div>
                            <div class="px-2 py-2 items-center max-h-max flex">
                                <p class="text-xs align-items-center">Idea: {{ team.idea }}</p>
                            </div>
                            <div class="px-2 py-2 items-center max-h-max flex">
                                <p class="text-xs align-items-center">Prototype: {{ team.prototype }}</p>
                            </div>
                            <div class="px-2 py-2 items-center max-h-max flex">
                                <p class="text-xs align-items-center">Coins: {{ team.investment }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ScannerModal v-show="isModalVisible" @close-modal="closeModal"/>
    </div>
</template>

<script>
import JudgeCard from "./InvestorCard";
import ExampleComponent from "./ExampleComponent";
import ScannerModal from "./ScannerModal";

export default {
    name: "HomeJudge",
    components: {ScannerModal, JudgeCard},
    props: ['judge', 'teams'],
    data(){
        return {
            isModalVisible: false,
        }
    },
    methods: {
        openModal() {
            this.isModalVisible = true;
        },
        closeModal() {
            this.isModalVisible = false;
        },
    }
};
</script>

<style scoped>
.table-auto td {
    padding: 0.5rem 1rem;
}
</style>
