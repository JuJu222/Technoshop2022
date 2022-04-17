<template>
    <div>
        <div class="xl:px-20 md:px-10 sm:px-6 px-4 md:py-12 py-9 2xl:mx-auto 2xl:container md:flex items-center justify-center">
            <div class="xl:w-1/3 md:w-1/2 lg:mr-16 md:mt-0">
                <div class="flex items-start mt-8">
                    <LeaderboardCard :team="team"></LeaderboardCard>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg xl:w-1/3 lg:w-5/12 md:w-1/2 w-full lg:px-10 sm:px-6 sm:py-10 px-6 py-10 mt-4">
                <form method="POST" :action="/judge/+team.id">
                    <input type="hidden" name="_token" :value="csrf">
                    <p tabindex="0" class="focus:outline-none text-2xl font-extrabold leading-6 text-gray-800">Enter points and scores for {{ team.name }}</p>
                    <p class="focus:outline-none mt-2 text-xl font-medium leading-6 text-gray-800">Remaining Points: <b>{{ judge.points }}</b></p>
                    <div class="mt-6 w-full">
                        <label for="investment" class="text-sm font-medium leading-none text-gray-800">Investment</label>
                        <input hidden id="investment" type="number" class="border rounded text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2" name="investment" required autofocus>
                        <number-input controls size="large" :min="1" :max="judge.points" @change="onChange3"></number-input>
                    </div>
                    <div class="mt-6">
                        <label for="prototype" class="text-sm font-medium leading-none text-gray-800">Prototype</label>
                        <input hidden id="prototype" type="number" class="border rounded text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2" name="prototype" required autofocus>
                        <number-input controls size="large" :min="1" :max="10" @change="onChange1"></number-input>
                    </div>
                    <div class="mt-6 w-full">
                        <label for="idea" class="text-sm font-medium leading-none text-gray-800">Idea</label>
                        <input hidden id="idea" type="number" class="border rounded text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2" name="idea" required autofocus>
                        <number-input controls size="large" :min="1" :max="10" @change="onChange2"></number-input>
                    </div>
                    <div class="mt-8">
                        <button type="submit" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 text-sm font-semibold leading-none text-white focus:outline-none bg-indigo-700 border rounded hover:bg-indigo-600 py-4 w-full">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import LeaderboardCard from "./LeaderboardCard";
export default {
    name: "Judge",
    components: {LeaderboardCard},
    data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        };
    },
    props: ['team', 'judge'],
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

</style>
