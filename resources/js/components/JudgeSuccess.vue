<template>
    <div class="flex items-center flex-col justify-center lg:flex-row pt-10 px-3 md:px-24 md:pt-20 gap-16 lg:gap-28">
        <div class="w-full sm:w-1/2">
            <h1 class="py-4 text-3xl lg:text-4xl font-extrabold text-gray-800">{{ message }}</h1>
            <p v-if="query" class="text-base text-gray-800">Your prototype score: {{ query.prototype }}</p>
            <p v-if="query" class="py-1 text-base text-gray-800">Your idea score: {{ query.idea }}</p>
            <p v-if="query" class="mb-4 text-base text-gray-800">Your coins: {{ query.investment }}</p>

            <p v-if="team" class="py-1 text-base text-gray-800">{{ team.name }} current scores and coins: </p>
            <LeaderboardCard v-if="team" :team="team" :index="index"></LeaderboardCard>

            <a href="/" class="block max-w-max my-4 border rounded-md px-3 sm:px-16 py-3 bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-700 focus:ring-opacity-50">Go back to Homepage</a>
        </div>
    </div>
</template>

<script>
import LeaderboardCard from "./LeaderboardCard";

export default {
    name: "JudgeSuccess",
    components: {LeaderboardCard},
    props: ['team', 'judge', 'message', 'query', 'index']
}
</script>

<style scoped>

</style>
