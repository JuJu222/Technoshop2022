<template>
    <div class="2xl:container 2xl:mx-auto xl:px-20">
        <div class="text-center lg:py-14 md:pt-12 pt-10 md:pb-4 pb-2">
            <p class="w-10/12 mx-auto md:w-full font-bold lg:text-4xl text-3xl lg:leading-9 md:leading-7 leading-9 text-center text-gray-800">Maps</p>
            <p class="text-base mb-3 mx-auto max-w-max pt-2">(Click on the images to view them)</p>
        </div>
        <div class="pb-6 lg:px-20 md:px-6 px-3 sm:w-3/5 mx-auto">
            <div class="images" v-viewer>
                <div v-for="item in images">
                    <h1 class="text-xl mb-3 mx-auto max-w-max pt-4">{{ item.title }}</h1>
                    <img :key="item.src" :src="item.src" class="mx-auto mb-4">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import 'viewerjs/dist/viewer.css'
import VueViewer from 'v-viewer'
import Vue from 'vue'
Vue.use(VueViewer)

export default {
    name: "Map",
    data() {
        return {
            images: [
                {title: '1st Floor', src: "/img/1f.jpg"},
                {title: 'Hall (2nd Floor)', src: "/img/hall.png"},
                {title: 'VIP 2 (2nd Floor)', src: "/img/vvip.png"},
            ]
        };
    },
    methods: {
        show() {
            this.$viewerApi({
                images: this.images,
            })
        },
    },
}
</script>

<style scoped>

</style>
