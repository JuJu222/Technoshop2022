<template>
    <div class="flex items-center flex-col justify-center lg:flex-row py-28 px-6 md:px-24 md:py-20 lg:py-32 gap-16 lg:gap-28">
        <div class="w-full lg:w-1/2">
            <h1 class="py-4 text-3xl lg:text-4xl font-extrabold text-gray-800">{{ message }}</h1>

            <p class="py-1 text-base text-gray-800">{{ team.user.name }} current logged times: </p>
            <GameCard :team="team"></GameCard>

            <a href="/" class="block max-w-max my-4 border rounded-md px-3 sm:px-16 py-3 bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-700 focus:ring-opacity-50">Go back to Homepage</a>
        </div>
    </div>
</template>

<script>
import LeaderboardCard from "./LeaderboardCard";
import GameCard from "./GameCard";

export default {
    name: "GameSuccess",
    components: {GameCard, LeaderboardCard},
    props: ['team', 'message']
}
</script>

<style scoped>

</style>
