<template>
    <div class="pt-16">
        <div class="w-full border-gray-300 border-t lg:w-11/12 md:w-11/12 lg:mx-auto md:mx-auto">
            <div class="container mx-auto py-4">
                <div class="xl:flex lg:flex md:flex text-center md:!text-left pt-6 justify">
                    <div class="md:w-11/12 xl:w-3/6 lg:w-2/5 lg:mx-0 xl:mx-0 w-full">
                        <div class="flex items-center md:justify-start justify-center mb-6 xl:mb-0 lg:mb-0">
                            <img src="/img/logo_uc.png" alt="Logo UC" class="w-10 mr-2">
                            <img src="/img/logo_su.png" alt="Logo SU" class="w-10 mr-0 xl:mr-3">
                            <p class="ml-3 font-bold text-xl hidden md:block">Technopreneurship Workshop 2022</p>
                        </div>
                    </div>
                </div>
                <div class="xl:flex flex-wrap justify-between xl:mt-14 mt-10 pb-6  sm:pl-0 text-center sm:!text-left">
                    <div class="w-11/12 xl:w-2/6 mx-auto lg:mx-0 xl:mx-0 mb-6 xl:mb-0 sm:text-center xl:text-base">
                        <p class="text-gray-800">2022 SU IMT Universitas Ciputra</p>
                    </div>
                    <div class="w-11/12 xl:w-2/6 mx-auto lg:mx-0 xl:mx-0 mb-6 lg:mb-0 xl:mb-0">
                        <ul class="xl:flex lg:flex md:flex sm:flex justify-between">
                            <li class="text-gray-800 hover:text-gray-900 text-base mb-4 sm:mb-0">
                                <a href="/">Home</a>
                            </li>
                            <li class="text-gray-800 hover:text-gray-900 text-base mb-4 sm:mb-0">
                                <a href="/leaderboard">Leaderboard</a>
                            </li>
                            <li class="text-gray-800 hover:text-gray-900 text-base mb-4 sm:mb-0">
                                <a href="/investors">Investors</a>
                            </li>
                            <li class="text-gray-800 hover:text-gray-900 text-base mb-4 sm:mb-0">
                                <a href="/map">Map</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-11/12 xl:w-1/6 lg:w-1/6 sm:w-11/12 mx-auto lg:mx-0 xl:mx-0 mb-6 lg:mb-0 xl:mb-0 mt-8 lg:mt-8 xl:mt-0">
                        <div class="flex justify-center sm:justify-center xl:justify-end space-x-6">
                            <div>
                                <a href="https://www.instagram.com/uc_imtsu/" target="_blank">
                                    <svg aria-label="Instagram" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Footer",
};
</script>
