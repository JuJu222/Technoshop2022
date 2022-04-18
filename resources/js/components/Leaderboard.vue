<template>
    <div class="2xl:container 2xl:mx-auto">
        <div class="text-center lg:py-10 md:py-8 py-6">
            <p class="w-10/12 mx-auto md:w-full font-semibold lg:text-4xl text-3xl lg:leading-9 md:leading-7 leading-9 text-center text-gray-800">Summer Collection Vol-1</p>
        </div>
        <div class="py-6 lg:px-20 md:px-6 px-4">
            <div>
                <div v-for="(team, index) in teams" :key="team.id">
                    <LeaderboardCard class="mx-auto" :team="team" :index="index + 1"></LeaderboardCard>
                </div>
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
