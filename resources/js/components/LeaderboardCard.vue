<template>
    <table class="mx-auto my-2 max-w-lg rounded overflow-hidden shadow-md text-xs table-auto">

        <tr class="bg-gray-200 px-2 py-2">
            <td class="text-gray-700 text-left text-red-700">{{ index + 1 }}</td>
            <td class="text-gray-700 text-left text-red-700">{{ index + 1 }}</td>
                <td class="px-2 text-center">Prototype Score</td>
                <td class="px-2 text-center">Idea Score</td>
            <td class="text-gray-700 text-center    ">Investment Points</td>
        </tr>

        <tr class="px-2 py-2 items-center bg-white">
            <td class="text-sm font-bold">{{ team.user.name }}</td>
                <td class="flex flex-col">
                    <p class="sm:block">{{ team.mentors }}</p>
                    <p class="sm:block text-gray-600">{{ team.members }}</p>
                </td>
            <td class="px-1 text-center">29</td>
            <td class="px-1 text-center">23</td>

            <td class="text-lg sm:text-xl font-bold text-center">109</td>
        </tr>

    </table>

</template>

<script>
export default {
    name: "LeaderboardCard",
    props: ['index', 'team']
}
</script>

<style scoped>
    .table-auto td {
        padding: 0.5rem 1rem;
    }
</style>
