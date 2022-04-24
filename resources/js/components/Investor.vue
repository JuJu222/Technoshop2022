<template>
    <div class="2xl:container 2xl:mx-auto">
        <div class="text-center lg:py-14 md:py-12 py-10">
            <p class="w-10/12 mx-auto md:w-full font-bold lg:text-4xl text-3xl lg:leading-9 md:leading-7 leading-9 text-center text-gray-800">Investor Profile</p>
        </div>
        <div class="pb-6 lg:px-20 md:px-6 px-3">
            <div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-8 lg:my-0">

                <!--Main Col-->
                <div id="profile" class="w-full lg:w-3/5 rounded-lg shadow-2xl bg-white lg:mx-0">


                    <div class="p-4 md:p-12 text-center lg:text-left">
                        <!-- Image for mobile view-->
                        <div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" :style="'background-image: url(\'/img/investors/' + investor.img_portrait + '\')'"></div>

                        <h1 class="text-3xl font-bold pt-8 lg:pt-0">{{ investor.user.name }}</h1>
                        <div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-green-500 opacity-25"></div>
                        <div class="flex flex-col align-items-center">
                            <p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start">{{ investor.field }}</p>
                            <p class="pt-8 text-center text-lg font-bold flex items-center justify-center">About</p>
                            <p class="pt-4 text-sm">{{ investor.about }}</p>
                            <div class="flex flex-row max-w-fit mx-auto pt-3">
                                <div class="max-w-fit">
                                    <p class="inline">{{ investor.red_flag }}</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-red-600 inline" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" width="20" height="20" viewBox="0 0 471.098 471.098" style="enable-background:new 0 0 471.098 471.098;" xml:space="preserve">
                                <path d="M403.288,153.454L111.732,45.741v-21.27C111.732,10.961,100.779,0,87.261,0C73.743,0,62.79,10.961,62.79,24.471v422.156  c0,13.51,10.952,24.471,24.471,24.471c13.518,0,24.471-10.961,24.471-24.471V275.555l291.557-107.699  c3.012-1.113,5.019-3.981,5.019-7.2C408.307,157.436,406.3,154.57,403.288,153.454z"/>
                            </svg>
                                    <p class="inline">{{ investor.yellow_flag }}</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-yellow-400 inline" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" width="20" height="20" viewBox="0 0 471.098 471.098" style="enable-background:new 0 0 471.098 471.098;" xml:space="preserve">
                                <path d="M403.288,153.454L111.732,45.741v-21.27C111.732,10.961,100.779,0,87.261,0C73.743,0,62.79,10.961,62.79,24.471v422.156  c0,13.51,10.952,24.471,24.471,24.471c13.518,0,24.471-10.961,24.471-24.471V275.555l291.557-107.699  c3.012-1.113,5.019-3.981,5.019-7.2C408.307,157.436,406.3,154.57,403.288,153.454z"/>
                            </svg>
                                    <p class="inline">{{ investor.green_flag }}</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-green-500 inline" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" width="20" height="20" viewBox="0 0 471.098 471.098" style="enable-background:new 0 0 471.098 471.098;" xml:space="preserve">
                                <path d="M403.288,153.454L111.732,45.741v-21.27C111.732,10.961,100.779,0,87.261,0C73.743,0,62.79,10.961,62.79,24.471v422.156  c0,13.51,10.952,24.471,24.471,24.471c13.518,0,24.471-10.961,24.471-24.471V275.555l291.557-107.699  c3.012-1.113,5.019-3.981,5.019-7.2C408.307,157.436,406.3,154.57,403.288,153.454z"/>
                            </svg>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 pb-4 lg:pb-0 mx-auto">
                            <p class="pt-4 text-center text-lg font-bold flex items-center justify-center">Portfolio</p>
                            <img :src="'/img/investors/'+investor.img_portfolio">
                        </div>
                    </div>

                </div>

                <!--Img Col-->
                <div class="w-full lg:w-2/5">
                    <!-- Big profile image for side bar (desktop) -->
                    <img :src="'/img/investors/'+investor.img_portrait" class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">
                    <!-- Image from: http://unsplash.com/photos/MP0IUfwrn0A -->

                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Investor",
    props: ['investor']
};
</script>
