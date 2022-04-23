<template>
    <div>
        <div class="xl:px-20 md:px-10 sm:px-6 px-3 md:py-12 py-9 2xl:mx-auto 2xl:container md:flex items-center justify-center">
            <div class="xl:w-1/3 md:w-1/2 lg:mr-16 md:mt-0">
                <div class="flex items-start mt-8">
                    <GameCard :team="team"></GameCard>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg xl:w-1/3 lg:w-5/12 md:w-1/2 w-full lg:px-10 sm:px-6 sm:py-10 px-6 py-10 mt-4">
                <form method="POST" :action="/log/+team.id">
                    <input type="hidden" name="_token" :value="csrf">
                    <p tabindex="0" class="focus:outline-none text-2xl font-extrabold leading-6 text-gray-800">Log time for {{ team.user.name }}</p>
                    <p class="focus:outline-none mt-3 text-base font-medium leading-6 text-gray-800">Press the log button to log the team's time.</p>
                    <p class="focus:outline-none mt-2 text-base font-medium leading-6 text-gray-800">If both the start and finish time are empty then it will log a start time, if the start time has been logged then it will automatically log a finish time.</p>
                    <div class="mt-4">
                        <button type="submit" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 text-sm font-semibold leading-none text-white focus:outline-none bg-indigo-700 border rounded hover:bg-indigo-600 py-4 w-full">Log Time</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import LeaderboardCard from "./LeaderboardCard";
import GameCard from "./GameCard";
export default {
    name: "Judge",
    components: {GameCard, LeaderboardCard},
    data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        };
    },
    props: ['team'],
    methods: {
        onChange1(event) {
            document.getElementById("prototype").value = event;
        },
        onChange2(event) {
            document.getElementById("idea").value = event;
        },
        onChange3(event) {
            document.getElementById("investment").value = event;
        },
    }
}
</script>

<style scoped>
.table-auto td {
    padding: 0.5rem 1rem;
}
</style>
