<template>
    <div class="2xl:container 2xl:mx-auto xl:px-20">
        <div class="text-center lg:py-14 md:py-12 py-10">
            <p class="w-10/12 mx-auto md:w-full font-bold lg:text-4xl text-3xl lg:leading-9 md:leading-7 leading-9 text-center text-gray-800">Investors</p>
        </div>
        <div class="pb-6 lg:px-20 md:px-6 px-3">
            <hr class="w-full bg-gray-200 my-6" />

            <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 lg:gap-y-12 lg:gap-x-8 sm:gap-y-10 sm:gap-x-6 gap-y-6 lg:mt-12 mt-10">
                <InvestorCard class="mb-20 sm:mb-16" v-for="investor in investors" :key="investor.id" :investor="investor"></InvestorCard>
            </div>
        </div>
    </div>
</template>

<script>
import InvestorCard from "./InvestorCard";
import ExampleComponent from "./ExampleComponent";

export default {
    name: "Investors",
    components: {InvestorCard, ExampleComponent},
    props: ['investors']
    // data(){
    //     return{
    //         investors:[]
    //     }
    // },
    // methods:{
    //     getUsers(){
    //         axios.get('investors')
    //             .then(response=>{
    //                 this.investors=response.data
    //             })
    //     }
    // },
    // mounted(){
    //     this.getUsers()
    // }
}
</script>

<style scoped>

</style>
