<template>
    <div class="2xl:container 2xl:mx-auto">
        <div class="text-center lg:py-10 md:py-8 py-6">
            <p class="w-10/12 mx-auto md:w-full font-semibold lg:text-4xl text-3xl lg:leading-9 md:leading-7 leading-9 text-center text-gray-800">Summer Collection Vol-1</p>
        </div>
        <div class="py-6 lg:px-20 md:px-6 px-4">
            <hr class="w-full bg-gray-200 my-6" />

            <div class="flex justify-between items-center">
                <div class="flex space-x-3 justify-center items-center">
                    <svg class="cursor-pointer" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.75 7.5H20.25" stroke="#1F2937" stroke-miterlimit="10" stroke-linecap="round" />
                        <path d="M3.75 12H20.25" stroke="#1F2937" stroke-miterlimit="10" stroke-linecap="round" />
                        <path d="M3.75 16.5H20.25" stroke="#1F2937" stroke-miterlimit="10" stroke-linecap="round" />
                    </svg>
                    <p class="font-normal text-base leading-4 text-gray-800">Filter</p>
                </div>
                <p class="cursor-pointer hover:underline duration-100 font-normal text-base leading-4 text-gray-600">Showing 18 products</p>
            </div>

            <div>
                <LeaderboardCard v-for="(team, index) in teams" :key="team.id" :team="team" :index="index"></LeaderboardCard>
            </div>
        </div>
    </div>
</template>

<script>
import LeaderboardCard from "./LeaderboardCard";
export default {
    name: "Leaderboard",
    components: {LeaderboardCard},
    props: ['teams']
}
</script>

<style scoped>

</style>
