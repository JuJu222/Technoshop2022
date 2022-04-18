<template>
    <a :href="/investors/ + investor.id">
        <div class="relative">
            <div class="h-300 rounded-2xl overflow-hidden shadow-md bg-white">
                <div class="absolute -mt-20 w-full flex justify-center">
                    <div class="h-32 w-32">
                        <img :src="'/img/investors/'+investor.judge.img_portrait" alt="" class="rounded-full object-cover h-full w-full shadow-md" />
                    </div>
                </div>
                <div class="px-6 mt-16">
                    <div class="font-bold text-3xl text-center pb-1">{{ investor.name }}</div>
                    <p class="text-gray-800 text-sm text-center">{{ investor.judge.field }}</p>
                    <p class="text-center text-gray-600 text-base pt-3 pb-5 font-normal">Our services encompass the assessment and repair of property damage caused by water, fire, smoke, or mold. We can also be a part of the restoration.</p>
                </div>
            </div>
        </div>
    </a>

</template>

<script>
export default {
    name: "InvestorCard",
    props: ['investor']
}
</script>

<style scoped>

</style>
