<template>
    <div class="bg-gray-200 pb-10">
        <!-- Page title starts -->
        <div class="bg-gray-800 pt-8 pb-16 relative z-10">
            <div class="container px-6 mx-auto flex flex-col lg:flex-row items-start lg:items-center justify-between">
                <div class="flex-col flex lg:flex-row items-start lg:items-center">
                    <div class="flex items-center">
                        <img class="border-2 shadow border-gray-600 rounded-full mr-3" :src="titlePhoto" alt="logo" />
                        <div>
                            <h5 class="text-sm text-white leading-4 mb-1">Andres Berlin</h5>
                            <p class="text-xs text-gray-400 leading-4">VP Operations</p>
                        </div>
                    </div>
                    <div class="ml-0 lg:ml-20 my-6 lg:my-0">
                        <h4 class="text-2xl font-bold leading-tight text-white mb-2">Dashboard</h4>
                        <p class="flex items-center text-gray-300 text-xs">
                            <span class="cursor-pointer"> Portal </span>
                            <span class="mx-2"> &gt; </span>
                            <span class="cursor-pointer"> Dashboard </span>
                            <span class="mx-2"> &gt; </span>
                            <span class="cursor-pointer"> KPIs </span>
                        </p>
                    </div>
                </div>
                <div>
                    <button class="focus:outline-none mr-3 bg-transparent transition duration-150 ease-in-out rounded hover:bg-gray-700 text-white px-5 py-2 text-sm border border-white">Back</button>
                    <button class="focus:outline-none transition duration-150 ease-in-out hover:bg-gray-200 border bg-white rounded text-indigo-700 px-8 py-2 text-sm">Edit Profile</button>
                </div>
            </div>
        </div>
        <!-- Page title ends -->
        <div class="container px-6 mx-auto">
            <!-- Remove class [ h-64 ] when adding a card block -->
            <div class="rounded shadow relative bg-white z-10 -mt-8 mb-8 w-full h-64">
                <!-- Place your content here -->
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Investor",
    data() {
        return {
            xmlns: "http://www.w3.org/2000/svg",
            profilePhoto: "https://tuk-cdn.s3.amazonaws.com/assets/components/boxed_layout/bl_1.png",
            titlePhoto: "https://cdn.tuk.dev/assets/webapp/master_layouts/boxed_layout/boxed_layout2.jpg",
        };
    },
    methods: {
        dropdownHandler(event) {
            let single = event.currentTarget.getElementsByTagName("ul")[0];
            single.classList.toggle("hidden");
        },
        MenuHandler(el, val) {
            let MainList = el.currentTarget.parentElement.getElementsByTagName("ul")[0];
            let closeIcon = el.currentTarget.parentElement.getElementsByClassName("close-m-menu")[0];
            let showIcon = el.currentTarget.parentElement.getElementsByClassName("show-m-menu")[0];
            if (val) {
                MainList.classList.remove("hidden");
                el.currentTarget.classList.add("hidden");
                closeIcon.classList.remove("hidden");
            } else {
                showIcon.classList.remove("hidden");
                MainList.classList.add("hidden");
                el.currentTarget.classList.add("hidden");
            }
        },
    },
};
</script>
