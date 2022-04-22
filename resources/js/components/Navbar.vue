<template>
    <nav class="bg-white shadow">
        <div class="mx-auto container px-6 py-2 xl:py-0">
            <div class="flex items-center justify-between">
                <div class="inset-y-0 left-0 flex items-center xl:hidden">
                    <div class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-gray-400 focus:outline-none transition duration-150 ease-in-out">
                        <div class="visible xl:hidden z-50">
                            <ul class="p-2 border-r bg-white absolute rounded left-0 right-0 shadow mt-8 md:mt-8 hidden">
                                <li class="flex xl:hidden cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-2 py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                    <a href="/" class="w-100">
                                        <div class="flex items-center">
                                            <svg class="icon icon-tabler icon-tabler-grid" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="18" height="18"><path d="M 24.962891 1.0546875 A 1.0001 1.0001 0 0 0 24.384766 1.2636719 L 1.3847656 19.210938 A 1.0005659 1.0005659 0 0 0 2.6152344 20.789062 L 4 19.708984 L 4 46 A 1.0001 1.0001 0 0 0 5 47 L 18.832031 47 A 1.0001 1.0001 0 0 0 19.158203 47 L 30.832031 47 A 1.0001 1.0001 0 0 0 31.158203 47 L 45 47 A 1.0001 1.0001 0 0 0 46 46 L 46 19.708984 L 47.384766 20.789062 A 1.0005657 1.0005657 0 1 0 48.615234 19.210938 L 41 13.269531 L 41 6 L 35 6 L 35 8.5859375 L 25.615234 1.2636719 A 1.0001 1.0001 0 0 0 24.962891 1.0546875 z M 25 3.3222656 L 44 18.148438 L 44 45 L 32 45 L 32 26 L 18 26 L 18 45 L 6 45 L 6 18.148438 L 25 3.3222656 z M 37 8 L 39 8 L 39 11.708984 L 37 10.146484 L 37 8 z M 20 28 L 30 28 L 30 45 L 20 45 L 20 28 z"/></svg>
                                            <span class="ml-2 font-bold">Home</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="xl:hidden flex-col cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none flex justify-center">
                                    <a href="/leaderboard" class="w-100">
                                        <div class="flex items-center">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 19H9V12.5V8.6C9 8.26863 9.26863 8 9.6 8H14.4C14.7314 8 15 8.26863 15 8.6V14.5V19Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M15 5H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M20.4 19H15V15.1C15 14.7686 15.2686 14.5 15.6 14.5H20.4C20.7314 14.5 21 14.7686 21 15.1V18.4C21 18.7314 20.7314 19 20.4 19Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M9 19V13.1C9 12.7686 8.73137 12.5 8.4 12.5H3.6C3.26863 12.5 3 12.7686 3 13.1V18.4C3 18.7314 3.26863 19 3.6 19H9Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span class="ml-2 font-bold">Leaderboard</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="xl:hidden flex-col cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none flex justify-center">
                                    <a href="/investors" class="w-100">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" width="19" height="19" viewBox="0 0 512 512">
                                                <g>
                                                    <g>
                                                        <g>
                                                            <path d="M366.933,341.333h-25.6c-1.195,0-29.355,0.222-48.7,19.567c-19.345,19.345-19.567,47.505-19.567,48.7v25.6     c0,4.71,3.814,8.533,8.533,8.533h25.6c1.195,0,29.355-0.222,48.7-19.567c19.345-19.345,19.567-47.505,19.567-48.7v-25.6     C375.467,345.156,371.652,341.333,366.933,341.333z M358.4,375.467c0,0.222-0.171,22.229-14.566,36.634     c-14.157,14.157-36.113,14.558-36.651,14.566h-17.05V409.6c0-0.222,0.171-22.229,14.566-36.634     c14.259-14.259,36.446-14.566,36.634-14.566H358.4V375.467z"/>
                                                            <path d="M153.6,392.533H128c-4.719,0-8.533,3.823-8.533,8.533v25.6c0,1.195,0.222,29.355,19.567,48.7     c19.345,19.345,47.505,19.567,48.7,19.567h25.6c4.719,0,8.533-3.823,8.533-8.533v-25.6c0-1.195-0.222-29.355-19.567-48.7     C182.955,392.755,154.795,392.533,153.6,392.533z M204.8,477.867h-17.067c-0.213,0-22.229-0.171-36.634-14.566     c-14.259-14.259-14.566-36.437-14.566-36.634V409.6H153.6c0.213,0,22.229,0.171,36.634,14.566     c14.259,14.259,14.566,36.437,14.566,36.634V477.867z"/>
                                                            <path d="M256,110.933c9.412,0,17.067,7.654,17.067,17.067c0,4.71,3.814,8.533,8.533,8.533c4.719,0,8.533-3.823,8.533-8.533     c0-15.855-10.914-29.107-25.6-32.922v-1.212c0-4.71-3.814-8.533-8.533-8.533s-8.533,3.823-8.533,8.533v1.212     c-14.686,3.814-25.6,17.067-25.6,32.922c0,18.825,15.309,34.133,34.133,34.133c9.412,0,17.067,7.654,17.067,17.067     s-7.654,17.067-17.067,17.067c-9.412,0-17.067-7.654-17.067-17.067c0-4.71-3.814-8.533-8.533-8.533s-8.533,3.823-8.533,8.533     c0,15.855,10.914,29.107,25.6,32.922v1.212c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533v-1.212     c14.686-3.814,25.6-17.067,25.6-32.922c0-18.825-15.309-34.133-34.133-34.133c-9.412,0-17.067-7.654-17.067-17.067     C238.933,118.588,246.588,110.933,256,110.933z"/>
                                                            <path d="M469.333,0H42.667C19.14,0,0,19.14,0,42.667v221.867C0,288.06,19.14,307.2,42.667,307.2h196.267v196.267     c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533v-204.8c0-4.71-3.814-8.533-8.533-8.533h-204.8     c-14.114,0-25.6-11.486-25.6-25.6V42.667c0-14.114,11.486-25.6,25.6-25.6h426.667c14.114,0,25.6,11.486,25.6,25.6v221.867     c0,14.114-11.486,25.6-25.6,25.6H281.6c-4.719,0-8.533,3.823-8.533,8.533s3.814,8.533,8.533,8.533h187.733     c23.526,0,42.667-19.14,42.667-42.667V42.667C512,19.14,492.86,0,469.333,0z"/>
                                                            <path d="M426.667,264.533c0-23.526,19.14-42.667,42.667-42.667c4.719,0,8.533-3.823,8.533-8.533V93.867     c0-4.71-3.814-8.533-8.533-8.533c-23.526,0-42.667-19.14-42.667-42.667c0-4.71-3.814-8.533-8.533-8.533H93.867     c-4.719,0-8.533,3.823-8.533,8.533c0,23.526-19.14,42.667-42.667,42.667c-4.719,0-8.533,3.823-8.533,8.533v119.467     c0,4.71,3.814,8.533,8.533,8.533c23.526,0,42.667,19.14,42.667,42.667c0,4.71,3.814,8.533,8.533,8.533h324.267     C422.852,273.067,426.667,269.244,426.667,264.533z M101.794,256c-3.755-26.121-24.465-46.839-50.594-50.594V101.794     c26.129-3.755,46.839-24.474,50.594-50.594h308.412c3.755,26.121,24.465,46.839,50.594,50.594v103.612     c-26.129,3.755-46.839,24.474-50.594,50.594H101.794z"/>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                            <span class="ml-2 font-bold">Investors</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="xl:hidden flex-col cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none flex justify-center">
                                    <a href="/maps" class="w-100">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                            <span class="ml-2 font-bold">Maps</span>
                                        </div>
                                    </a>
                                </li>
                                <li v-if="user" class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 flex items-center focus:text-indigo-700 focus:outline-none">
                                    <div class="flex items-center">
                                        <p class="text-sm ml-2 cursor-pointer">Logged in as: <b>{{ user.name }}</b></p>
                                        <div class="sm:ml-2 text-white relative">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down cursor-pointer" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </div>
                                    </div>
                                </li>
                                <li onclick="event.preventDefault(); document.getElementById('logout-form').submit();" v-if="user" class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="15" height="15" stroke-width="3" stroke="currentColor" fill="#B23B3B" stroke-linecap="round" stroke-linejoin="round"
                                             viewBox="0 0 384.971 384.971" style="enable-background:new 0 0 384.971 384.971;" xml:space="preserve">
                                            <g>
                                                <g id="Sign_Out">
                                                    <path d="M180.455,360.91H24.061V24.061h156.394c6.641,0,12.03-5.39,12.03-12.03s-5.39-12.03-12.03-12.03H12.03
                                                        C5.39,0.001,0,5.39,0,12.031V372.94c0,6.641,5.39,12.03,12.03,12.03h168.424c6.641,0,12.03-5.39,12.03-12.03
                                                        C192.485,366.299,187.095,360.91,180.455,360.91z"/>
                                                    <path d="M381.481,184.088l-83.009-84.2c-4.704-4.752-12.319-4.74-17.011,0c-4.704,4.74-4.704,12.439,0,17.179l62.558,63.46H96.279
                                                        c-6.641,0-12.03,5.438-12.03,12.151c0,6.713,5.39,12.151,12.03,12.151h247.74l-62.558,63.46c-4.704,4.752-4.704,12.439,0,17.179
                                                        c4.704,4.752,12.319,4.752,17.011,0l82.997-84.2C386.113,196.588,386.161,188.756,381.481,184.088z"/>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="ml-2 font-bold">Logout</span>
                                    </div>
                                </li>
                            </ul>
                            <svg @click="MenuHandler($event, true)" aria-haspopup="true" aria-label="Main Menu" xmlns="http://www.w3.org/2000/svg" class="show-m-menu icon icon-tabler icon-tabler-menu" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                <line x1="4" y1="8" x2="20" y2="8"></line>
                                <line x1="4" y1="16" x2="20" y2="16"></line>
                            </svg>
                            <div class="hidden close-m-menu text-gray-700" @click="MenuHandler($event, false)">
                                <svg aria-label="Close" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <line x1="18" y1="6" x2="6" y2="18" />
                                    <line x1="6" y1="6" x2="18" y2="18" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex w-full sm:w-auto items-center sm:items-stretch justify-end sm:justify-start">
                        <a href="/" class="flex items-center">
                            <img src="/img/logo_uc.png" alt="Logo UC" class="w-10 mr-2">
                            <img src="/img/logo_su.png" alt="Logo SU" class="w-10 mr-3">
                            <div class="flex flex-col">
                                <h2 class="hidden sm:block text-base text-gray-700 font-bold leading-normal">Technopreneruship Workshop</h2>
                                <h2 class="hidden sm:block text-tiny text-gray-700 font-bold leading-normal">2022</h2>
                            </div>
                        </a>
                    <div class="hidden xl:flex md:ml-6">
                        <a href="/leaderboard" class="flex px-5 items-center py-6 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none transition duration-150 ease-in-out">
                            <span class="mr-2">
                               <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 19H9V12.5V8.6C9 8.26863 9.26863 8 9.6 8H14.4C14.7314 8 15 8.26863 15 8.6V14.5V19Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15 5H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M20.4 19H15V15.1C15 14.7686 15.2686 14.5 15.6 14.5H20.4C20.7314 14.5 21 14.7686 21 15.1V18.4C21 18.7314 20.7314 19 20.4 19Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9 19V13.1C9 12.7686 8.73137 12.5 8.4 12.5H3.6C3.26863 12.5 3 12.7686 3 13.1V18.4C3 18.7314 3.26863 19 3.6 19H9Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            Leaderboard
                        </a>
                        <a href="/investors" class="flex px-5 items-center py-6 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none transition duration-150 ease-in-out">
                            <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" width="20" height="20" viewBox="0 0 512 512">
                            <g>
                                <g>
                                    <g>
                                        <path d="M366.933,341.333h-25.6c-1.195,0-29.355,0.222-48.7,19.567c-19.345,19.345-19.567,47.505-19.567,48.7v25.6     c0,4.71,3.814,8.533,8.533,8.533h25.6c1.195,0,29.355-0.222,48.7-19.567c19.345-19.345,19.567-47.505,19.567-48.7v-25.6     C375.467,345.156,371.652,341.333,366.933,341.333z M358.4,375.467c0,0.222-0.171,22.229-14.566,36.634     c-14.157,14.157-36.113,14.558-36.651,14.566h-17.05V409.6c0-0.222,0.171-22.229,14.566-36.634     c14.259-14.259,36.446-14.566,36.634-14.566H358.4V375.467z"/>
                                        <path d="M153.6,392.533H128c-4.719,0-8.533,3.823-8.533,8.533v25.6c0,1.195,0.222,29.355,19.567,48.7     c19.345,19.345,47.505,19.567,48.7,19.567h25.6c4.719,0,8.533-3.823,8.533-8.533v-25.6c0-1.195-0.222-29.355-19.567-48.7     C182.955,392.755,154.795,392.533,153.6,392.533z M204.8,477.867h-17.067c-0.213,0-22.229-0.171-36.634-14.566     c-14.259-14.259-14.566-36.437-14.566-36.634V409.6H153.6c0.213,0,22.229,0.171,36.634,14.566     c14.259,14.259,14.566,36.437,14.566,36.634V477.867z"/>
                                        <path d="M256,110.933c9.412,0,17.067,7.654,17.067,17.067c0,4.71,3.814,8.533,8.533,8.533c4.719,0,8.533-3.823,8.533-8.533     c0-15.855-10.914-29.107-25.6-32.922v-1.212c0-4.71-3.814-8.533-8.533-8.533s-8.533,3.823-8.533,8.533v1.212     c-14.686,3.814-25.6,17.067-25.6,32.922c0,18.825,15.309,34.133,34.133,34.133c9.412,0,17.067,7.654,17.067,17.067     s-7.654,17.067-17.067,17.067c-9.412,0-17.067-7.654-17.067-17.067c0-4.71-3.814-8.533-8.533-8.533s-8.533,3.823-8.533,8.533     c0,15.855,10.914,29.107,25.6,32.922v1.212c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533v-1.212     c14.686-3.814,25.6-17.067,25.6-32.922c0-18.825-15.309-34.133-34.133-34.133c-9.412,0-17.067-7.654-17.067-17.067     C238.933,118.588,246.588,110.933,256,110.933z"/>
                                        <path d="M469.333,0H42.667C19.14,0,0,19.14,0,42.667v221.867C0,288.06,19.14,307.2,42.667,307.2h196.267v196.267     c0,4.71,3.814,8.533,8.533,8.533s8.533-3.823,8.533-8.533v-204.8c0-4.71-3.814-8.533-8.533-8.533h-204.8     c-14.114,0-25.6-11.486-25.6-25.6V42.667c0-14.114,11.486-25.6,25.6-25.6h426.667c14.114,0,25.6,11.486,25.6,25.6v221.867     c0,14.114-11.486,25.6-25.6,25.6H281.6c-4.719,0-8.533,3.823-8.533,8.533s3.814,8.533,8.533,8.533h187.733     c23.526,0,42.667-19.14,42.667-42.667V42.667C512,19.14,492.86,0,469.333,0z"/>
                                        <path d="M426.667,264.533c0-23.526,19.14-42.667,42.667-42.667c4.719,0,8.533-3.823,8.533-8.533V93.867     c0-4.71-3.814-8.533-8.533-8.533c-23.526,0-42.667-19.14-42.667-42.667c0-4.71-3.814-8.533-8.533-8.533H93.867     c-4.719,0-8.533,3.823-8.533,8.533c0,23.526-19.14,42.667-42.667,42.667c-4.719,0-8.533,3.823-8.533,8.533v119.467     c0,4.71,3.814,8.533,8.533,8.533c23.526,0,42.667,19.14,42.667,42.667c0,4.71,3.814,8.533,8.533,8.533h324.267     C422.852,273.067,426.667,269.244,426.667,264.533z M101.794,256c-3.755-26.121-24.465-46.839-50.594-50.594V101.794     c26.129-3.755,46.839-24.474,50.594-50.594h308.412c3.755,26.121,24.465,46.839,50.594,50.594v103.612     c-26.129,3.755-46.839,24.474-50.594,50.594H101.794z"/>
                                    </g>
                                </g>
                            </g>
                            </svg>
                            </span>
                            Investors
                        </a>
                        <a href="/maps" class="flex px-5 items-center py-6 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none transition duration-150 ease-in-out">
                            <span class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            </span>
                            Maps
                        </a>
                    </div>
                </div>
                <div class="flex">
                    <button v-if="isGuest === 'true'" @click="goToLogin()" class="mx-2 my-2 bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-8 py-3 text-sm">Login</button>
                    <div v-else class="hidden xl:flex items-center">
                        <div class="ml-6 relative">
                            <div class="flex items-center relative z-40" @click="dropdownHandler($event)">
                                <ul class="p-2 w-40 border-r bg-white absolute rounded right-0 shadow top-0 mt-12 hidden">
                                    <li onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 flex items-center focus:text-indigo-700 focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                            <circle cx="12" cy="12" r="3" />
                                        </svg>
                                        <span class="ml-2">Logout</span>
                                        <form id="logout-form" action="/logout" method="POST" class="d-none">
                                            <input type="hidden" name="_token" :value="csrf">
                                        </form>
                                    </li>
                                </ul>
                                <div class="cursor-pointer flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-white transition duration-150 ease-in-out">
                                    <p class="text-sm ml-2 cursor-pointer">Logged in as: <b>{{ user.name }}</b></p>
                                </div>
                                <div class="ml-2 text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down cursor-pointer" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z"></path>
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "Navbar",
    data() {
        return {
            profilePhoto: "https://tuk-cdn.s3.amazonaws.com/assets/components/horizontal_navigation/hn_1.png",
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
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
        goToLogin() {
            window.location.href = '/login'
        },
        goToHome() {
            window.location.href = '/'
        },
        goToInvestors(event) {
            window.location.href = '/investors'
            this.dropdownHandler(event)
        }
    },
    props: ['homeRoute', 'isGuest', 'user']
};
</script>
