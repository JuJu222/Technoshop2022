<template>
    <table class="my-2 rounded-lg overflow-hidden shadow-lg text-xs table-auto">
        <tr class="bg-gray-200 px-2 py-2 purple text-white">
            <td class="text-left text-xl font-bold"></td>
            <td class="px-2 text-center">Start Time</td>
            <td class="px-2 text-center">Finish Time</td>
            <td class="px-2 text-center">Time Taken</td>
        </tr>

        <tr class="px-2 py-2 items-center bg-white">
            <td class="text-sm font-bold">{{ team.user.name }}</td>
            <td class="px-1 text-center">{{ team.start_at }}</td>
            <td class="px-1 text-center">{{ team.finish_at }}</td>
            <td class="px-1 text-center">{{ team.delta }}</td>

        </tr>

        <tr class="px-2 py-2 items-center bg-white">
            <td class="text-xs" colspan="4">{{ team.mentors }}</td>
        </tr>

        <tr class="px-2 py-2 items-center bg-white">
            <td class="text-xs" colspan="4">{{ team.members }}</td>
        </tr>

    </table>
</template>

<script>
export default {
    name: "GameCard",
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
