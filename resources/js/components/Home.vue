<template>
    <div class="2xl:container 2xl:mx-auto">
        <ExampleComponent></ExampleComponent>
    </div>
</template>

<script>
import JudgeCard from "./InvestorCard";
import ExampleComponent from "./ExampleComponent";

export default {
    name: "Home",
    components: {JudgeCard, ExampleComponent},
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
