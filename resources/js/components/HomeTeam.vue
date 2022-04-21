<template>
    <div>
        <div class="w-full relative px-2 xl:!px-20">
            <div class="pt-10 lg:pt-20 lg:flex items-center relative z-10 container mx-auto">
                <div class="w-full lg:w-1/2 h-full">
                    <p class="uppercase text-2xl mb-4">Technopreneurship Workshop 2022</p>
                    <h1 class="text-purple text-4xl md:text-7xl mb-8 fw-bold">Welcome, {{ team.name }}</h1>
                    <p class="text-gray-800 font-regular mb-8 text-base">Technopreneurship Workshop merupakan workshop bertemakan teknologi yang dikemas dalam bentuk camp jurusan. Melalui workshop ini, peserta diharapkan dapat meningkatkan koneksi yang baik antar angkatan serta melatih dan mempersiapkan peserta untuk menjadi technopreneur muda yang berintegritas dan profesional di masa depan.</p>
                </div>
                <div class="w-full lg:w-1/2 h-full lg:pr-10 xl:pr-0 mb-10 lg:mb-0">
                    <div>
                        <h1 class="text-purple text-2xl md:text-3xl mb-3 fw-bold">Your current scores and points: </h1>
                        <LeaderboardCard class="w-full" :team="team"></LeaderboardCard>
                    </div>
                    <div>
                        <button @click="openModalJudge" class="block w-full text-center my-4 border rounded-md px-3 sm:px-16 py-3 bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-700 focus:ring-opacity-50">Show QR Code for Investor</button>
                        <button @click="openModalGame" class="block w-full text-center my-4 border rounded-md px-3 sm:px-16 py-3 bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-700 focus:ring-opacity-50">Show QR Code for Minigames</button>
                    </div>
                </div>
            </div>
        </div>
        <QrModal v-show="isModalVisibleJudge" @close-modal="closeModalJudge" :name="team.name" :type="'Investors'" :qr-code="team.qr_judge"/>
        <QrModal v-show="isModalVisibleGame" @close-modal="closeModalGame" :name="team.name" :type="'Minigames'" :qr-code="team.qr_game"/>
    </div>
</template>

<script>
import JudgeCard from "./InvestorCard";
import ExampleComponent from "./ExampleComponent";
import LeaderboardCard from "./LeaderboardCard";
import Modal from './QrModal'
import QrModal from "./QrModal";

export default {
    name: "HomeTeam",
    components: {QrModal, JudgeCard, LeaderboardCard},
    props: ['team'],
    data(){
        return {
            isModalVisibleJudge: false,
            isModalVisibleGame: false,
        }
    },
    methods: {
        openModalJudge() {
            this.isModalVisibleJudge = true;
        },
        closeModalJudge() {
            this.isModalVisibleJudge = false;
        },
        openModalGame() {
            this.isModalVisibleGame = true;
        },
        closeModalGame() {
            this.isModalVisibleGame = false;
        },
    }
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
