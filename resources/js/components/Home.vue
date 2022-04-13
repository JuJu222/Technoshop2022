<template>
    <div class="2xl:container 2xl:mx-auto">
        <div class="bg-gray-50 text-center lg:py-10 md:py-8 py-6">
            <p class="w-10/12 mx-auto md:w-full font-semibold lg:text-4xl text-3xl lg:leading-9 md:leading-7 leading-9 text-center text-gray-800">Summer Collection Vol-1</p>
        </div>
        <div class="py-6 lg:px-20 md:px-6 px-4">
            <p class="font-normal text-sm leading-3 text-gray-600">Home / Shop by Category / Women</p>
            <hr class="w-full bg-gray-200 my-6" />

            <div class="flex justify-between items-center">
                <div class="flex space-x-3 justify-center items-center">
                    <svg class="cursor-pointer" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.75 7.5H20.25" stroke="#1F2937" stroke-miterlimit="10" stroke-linecap="round" />
                        <path d="M3.75 12H20.25" stroke="#1F2937" stroke-miterlimit="10" stroke-linecap="round" />
                        <path d="M3.75 16.5H20.25" stroke="#1F2937" stroke-miterlimit="10" stroke-linecap="round" />
                    </svg>
                    <p class="font-normal text-base leading-4 text-gray-800">Filter</p>
                </div>
                <p class="cursor-pointer hover:underline duration-100 font-normal text-base leading-4 text-gray-600">Showing 18 products</p>
            </div>

            <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 lg:gap-y-12 lg:gap-x-8 sm:gap-y-10 sm:gap-x-6 gap-y-6 lg:mt-12 mt-10">
                <JudgeCard v-for="investor in investors" :key="investor.id" :investor="investor"></JudgeCard>
            </div>

            <div class="flex justify-center items-center">
                <button class="hover:bg-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 bg-gray-800 py-5 md:px-16 md:w-auto w-full lg:mt-28 md:mt-12 mt-10 text-white font-medium text-base leading-4">Load More</button>
            </div>
        </div>
    </div>
</template>

<script>
import JudgeCard from "./JudgeCard";

export default {
    name: "Home",
    components: {JudgeCard},
    data(){
        return{
            investors:[]
        }
    },
    methods:{
        getUsers(){
            axios.get('investors')
                .then(response=>{
                    this.investors=response.data
                })
        }
    },
    mounted(){
        this.getUsers()
    }
}
</script>

<style scoped>

</style>
