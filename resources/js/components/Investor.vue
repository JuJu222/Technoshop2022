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
