<template>
    <div class="2xl:container 2xl:mx-auto">
        <div class="text-center lg:py-14 md:py-12 py-10">
            <p class="w-10/12 mx-auto md:w-full font-bold lg:text-4xl text-3xl lg:leading-9 md:leading-7 leading-9 text-center text-gray-800">Leaderboard</p>
        </div>
        <div class="pb-6 lg:px-20 md:px-6 px-3">
            <div>
                <div v-for="(team, index) in teams" class="md:px-40 lg:px-60 md:!mb-5 mb-3" :key="team.id">
                    <LeaderboardCard class="mx-auto w-full" :team="team" :index="index + 1"></LeaderboardCard>
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
