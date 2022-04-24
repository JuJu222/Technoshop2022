<template>
    <a :href="/investors/ + investor.id">
        <div class="relative">
            <div class="rounded-2xl overflow-hidden shadow-md bg-white">
                <div class="absolute -mt-20 w-full flex justify-center">
                    <div class="h-32 w-32">
                        <img :src="'/img/investors/'+investor.judge.img_portrait" alt="" class="rounded-full object-cover h-full w-full shadow-md" />
                    </div>
                </div>
                <div class="px-6 mt-16">
                    <div class="font-bold text-3xl text-center pb-1">{{ investor.name }}</div>
                    <p class="text-gray-800 text-sm text-center">{{ investor.judge.field }}</p>
                    <p class="text-center text-gray-600 text-base pt-3 pb-3  font-normal">{{ investor.judge.about }}</p>
                    <div class="flex flex-row max-w-fit mx-auto pb-5">
                        <div class="max-w-fit">
                            <p class="inline">{{ investor.judge.red_flag }}</p>
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-red-600 inline" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" width="20" height="20" viewBox="0 0 471.098 471.098" style="enable-background:new 0 0 471.098 471.098;" xml:space="preserve">
                                <path d="M403.288,153.454L111.732,45.741v-21.27C111.732,10.961,100.779,0,87.261,0C73.743,0,62.79,10.961,62.79,24.471v422.156  c0,13.51,10.952,24.471,24.471,24.471c13.518,0,24.471-10.961,24.471-24.471V275.555l291.557-107.699  c3.012-1.113,5.019-3.981,5.019-7.2C408.307,157.436,406.3,154.57,403.288,153.454z"/>
                            </svg>
                            <p class="inline">{{ investor.judge.yellow_flag }}</p>
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-yellow-400 inline" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" width="20" height="20" viewBox="0 0 471.098 471.098" style="enable-background:new 0 0 471.098 471.098;" xml:space="preserve">
                                <path d="M403.288,153.454L111.732,45.741v-21.27C111.732,10.961,100.779,0,87.261,0C73.743,0,62.79,10.961,62.79,24.471v422.156  c0,13.51,10.952,24.471,24.471,24.471c13.518,0,24.471-10.961,24.471-24.471V275.555l291.557-107.699  c3.012-1.113,5.019-3.981,5.019-7.2C408.307,157.436,406.3,154.57,403.288,153.454z"/>
                            </svg>
                            <p class="inline">{{ investor.judge.green_flag }}</p>
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-green-500 inline" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" width="20" height="20" viewBox="0 0 471.098 471.098" style="enable-background:new 0 0 471.098 471.098;" xml:space="preserve">
                                <path d="M403.288,153.454L111.732,45.741v-21.27C111.732,10.961,100.779,0,87.261,0C73.743,0,62.79,10.961,62.79,24.471v422.156  c0,13.51,10.952,24.471,24.471,24.471c13.518,0,24.471-10.961,24.471-24.471V275.555l291.557-107.699  c3.012-1.113,5.019-3.981,5.019-7.2C408.307,157.436,406.3,154.57,403.288,153.454z"/>
                            </svg>
                        </div>
                    </div>
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
