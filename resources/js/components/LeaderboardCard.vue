<template>
    <table class="my-2 rounded-lg overflow-hidden shadow-lg text-xs table-auto">
        <tr v-if="index === 1" class="gold px-2 py-2 text-white fw-bold">
            <td v-if="index" class="text-left text-xl font-bold">{{ ordinal(index) }}</td>
            <td v-else class="text-left text-xl font-bold"></td>
            <td class="px-2 text-center">Prototype Score</td>
            <td class="px-2 text-center">Idea Score</td>
            <td class="text-center">Coins</td>
        </tr>
        <tr v-else-if="index === 2" class="silver px-2 py-2 text-white fw-bold">
            <td v-if="index" class="text-left text-xl font-bold">{{ ordinal(index) }}</td>
            <td v-else class="text-left text-xl font-bold"></td>
            <td class="px-2 text-center">Prototype Score</td>
            <td class="px-2 text-center">Idea Score</td>
            <td class="text-center">Coins</td>
        </tr>
        <tr v-else-if="index === 3" class="bronze px-2 py-2 text-white fw-bold">
            <td v-if="index" class="text-left text-xl font-bold">{{ ordinal(index) }}</td>
            <td v-else class="text-left text-xl font-bold"></td>
            <td class="px-2 text-center">Prototype Score</td>
            <td class="px-2 text-center">Idea Score</td>
            <td class="text-center">Coins</td>
        </tr>
        <tr v-else class="bg-gray-200 px-2 py-2 purple text-white fw-bold">
            <td v-if="index" class="text-left text-xl font-bold">{{ ordinal(index) }}</td>
            <td v-else class="text-left text-xl font-bold"></td>
            <td class="px-2 text-center">Prototype Score</td>
            <td class="px-2 text-center">Idea Score</td>
            <td class="text-center">Coins</td>
        </tr>

        <tr class="px-2 py-2 items-center bg-white">
            <td class="text-sm font-bold">{{ team.name }}</td>
            <td class="px-1 text-center">{{ team.prototype }}</td>
            <td class="px-1 text-center">{{ team.idea }}</td>

            <td class="text-lg sm:text-xl font-bold text-center">{{ team.investment }}</td>
        </tr>

        <tr class="px-2 py-2 items-center bg-white">
            <td class="text-xs" colspan="4">{{ team.mentors }}</td>
        </tr>

        <tr class="px-2 py-2 items-center bg-white">
            <td class="text-xs" colspan="4">{{ team.members }}</td>
        </tr>

        <tr v-if="team.pictures.length > 0" class="px-2 py-2 items-center bg-white">
            <td class="text-xs" colspan="4">
                <div class="flex items-center flex-wrap mb-1">
                    <div v-for="picture in team.pictures" class="w-11 h-11 bg-cover bg-center rounded-md">
                        <img :src="'/img/investors/' + picture" alt="" class="h-full w-full overflow-hidden object-cover rounded-full border-2 border-white dark:border-gray-700 shadow" />
                    </div>
                    <p class="ml-2 pt-1">has invested</p>
                </div>
            </td>
        </tr>
    </table>

</template>

<script>
export default {
    name: "LeaderboardCard",
    props: ['team', 'index'],
    methods: {
        ordinal(i) {
            const j = i % 10,
                k = i % 100;
            if (j === 1 && k !== 11) {
                return i + "st";
            }
            if (j === 2 && k !== 12) {
                return i + "nd";
            }
            if (j === 3 && k !== 13) {
                return i + "rd";
            }
            return i + "th";
        }
    }
}
</script>

<style scoped>
    .table-auto td {
        padding: 0.5rem 1rem;
    }
</style>
