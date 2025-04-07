<x-main-nav>
    <style>
        @media (max-width: 640px) {
            .mobile-hidden {
                display: none;
            }
        }
    </style>
    <div class="container mx-auto px-4 py-6 max-w-7xl">
        <!-- Search Bar -->
        <div class="relative mb-8">
            <div class="flex items-center border-b border-gray-300">
                <i class="fas fa-search text-gray-400 mr-2"></i>
                <input type="text" placeholder="Search by job title, company or skill" class="w-full py-3 focus:outline-none text-gray-600">
            </div>
        </div>

        <!-- Navigation -->
        <div class="border-b border-gray-200 overflow-x-auto">
            <nav class="flex space-x-4 md:space-x-8 whitespace-nowrap pb-1">
                <a href="#" class="pb-4 text-gray-400 text-xs sm:text-sm font-medium">CONTENT</a>
                <a href="#" class="pb-4 text-gray-800 text-xs sm:text-sm font-medium border-b-2 border-gray-800">JOBS</a>
                <a href="#" class="pb-4 text-gray-400 text-xs sm:text-sm font-medium">COMPANIES</a>
                <a href="#" class="pb-4 text-gray-400 text-xs sm:text-sm font-medium">INVESTORS</a>
            </nav>
        </div>

        <!-- Promotional Banner -->
        <div class="my-8 bg-white rounded-lg shadow-sm p-4 sm:p-6 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6">
            <div class="flex flex-col sm:flex-row items-start sm:items-center">
                <div class="mb-4 sm:mb-0 sm:mr-6 flex justify-center w-full sm:w-auto">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Screenshot%20from%202025-04-07%2014-48-23-jVt3l2E4O2n970O0fFrUfLqzBUik41.png" alt="Astronaut" class="w-16 sm:w-24 h-auto">
                </div>
                <div>
                    <h3 class="text-blue-500 font-bold text-lg sm:text-xl mb-2">Our subscribers excel in tech careers</h3>
                    <p class="text-gray-700 text-sm sm:text-base max-w-xl">
                        Stay ahead of the curve. Don't let your colleagues outshine you with the latest 
                        innovations applied at work. Our subscriber community includes professionals from 
                        these companies:
                    </p>
                    <div class="mt-4 flex flex-wrap items-center gap-4 sm:gap-6">
                        <img src="https://placehold.co/60x30/green/white?text=Gojek" alt="Gojek" class="h-4 sm:h-6">
                        <img src="https://placehold.co/60x30/green/white?text=Grab" alt="Grab" class="h-4 sm:h-6">
                        <img src="https://placehold.co/60x30/red/white?text=Lazada" alt="Lazada" class="h-4 sm:h-6">
                        <img src="https://placehold.co/60x30/blue/white?text=Microsoft" alt="Microsoft" class="h-4 sm:h-6">
                        <img src="https://placehold.co/60x30/blue/white?text=Sea" alt="Sea" class="h-4 sm:h-6">
                        <img src="https://placehold.co/60x30/green/white?text=Tokopedia" alt="Tokopedia" class="h-4 sm:h-6">
                        <img src="https://placehold.co/60x30/blue/white?text=Traveloka" alt="Traveloka" class="h-4 sm:h-6">
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-auto mt-4 sm:mt-0">
                <button class="bg-red-600 hover:bg-red-700 text-white font-medium px-6 py-2 rounded-full w-full sm:w-auto">LEARN MORE</button>
            </div>
        </div>

        <!-- Filters -->
        <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6 mb-4">
            <div class="flex flex-wrap gap-3 sm:gap-4 mb-6 text-xs sm:text-sm">
                <div class="relative">
                    <button class="flex items-center text-gray-700 font-medium">
                        LOCATION
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
                <div class="relative">
                    <button class="flex items-center text-gray-700 font-medium">
                        FUNCTION
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
                <div class="relative">
                    <button class="flex items-center text-gray-700 font-medium">
                        <span class="hidden sm:inline">YEARS OF EXPERIENCE</span>
                        <span class="sm:hidden">YEARS</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
                <div class="relative">
                    <button class="flex items-center text-gray-700 font-medium">
                        INDUSTRY
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
                <div class="relative">
                    <button class="flex items-center text-gray-700 font-medium">
                        TYPE
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
                <div class="relative">
                    <button class="flex items-center text-gray-700 font-medium">
                        SALARY
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 sm:gap-0">
                <div>
                    <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-xs sm:text-sm flex items-center inline-flex">
                        Uganda
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4 ml-1 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </span>
                </div>
                <button class="text-blue-500 flex items-center text-xs sm:text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                    RESET
                </button>
            </div>
        </div>

        <!-- Job Listings -->
        <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6 mb-4">
            <div class="flex flex-col sm:flex-row gap-4 mb-8">
                <div class="flex-shrink-0 flex justify-center sm:block">
                    <div class="bg-green-500 w-16 h-16 sm:w-20 sm:h-20 rounded flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 sm:h-12 sm:w-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <div class="flex-grow">
                    <div class="flex flex-col sm:flex-row justify-between">
                        <div>
                            <h3 class="text-lg font-bold">Customer Service Agent (REMOTE)</h3>
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">Featured</span>
                            <p class="text-blue-500 mt-1 text-sm sm:text-base">Deliveries On-Demand Logistics (Southeast Asia)</p>
                            <p class="text-gray-600 mt-1 text-sm sm:text-base">Surakarta, Indonesia (Remote)</p>
                            <p class="text-gray-600 mt-1 text-sm sm:text-base">IDR 4,000,000</p>
                            <div class="flex flex-wrap gap-2 mt-2 text-xs">
                                <span class="text-gray-600">Customer Service</span>
                                <span class="text-gray-400 hidden sm:inline">•</span>
                                <span class="text-gray-600">Logistics</span>
                                <span class="text-gray-400 hidden sm:inline">•</span>
                                <span class="text-gray-600">Full-time</span>
                            </div>
                        </div>
                        <div class="text-gray-400 flex items-start mt-2 sm:mt-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-xs sm:text-sm">17 Feb 2025</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row gap-4 mb-8">
                <div class="flex-shrink-0 flex justify-center sm:block">
                    <div class="bg-green-500 w-16 h-16 sm:w-20 sm:h-20 rounded flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 sm:h-12 sm:w-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <div class="flex-grow">
                    <div class="flex flex-col sm:flex-row justify-between">
                        <div>
                            <h3 class="text-lg font-bold">Customer Service Agent (REMOTE)</h3>
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">Featured</span>
                            <p class="text-blue-500 mt-1 text-sm sm:text-base">Deliveries On-Demand Logistics (Southeast Asia)</p>
                            <p class="text-gray-600 mt-1 text-sm sm:text-base">Surakarta, Indonesia (Remote)</p>
                            <p class="text-gray-600 mt-1 text-sm sm:text-base">IDR 4,000,000</p>
                            <div class="flex flex-wrap gap-2 mt-2 text-xs">
                                <span class="text-gray-600">Customer Service</span>
                                <span class="text-gray-400 hidden sm:inline">•</span>
                                <span class="text-gray-600">Logistics</span>
                                <span class="text-gray-400 hidden sm:inline">•</span>
                                <span class="text-gray-600">Full-time</span>
                            </div>
                        </div>
                        <div class="text-gray-400 flex items-start mt-2 sm:mt-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-xs sm:text-sm">17 Feb 2025</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row gap-4 mb-8">
                <div class="flex-shrink-0 flex justify-center sm:block">
                    <div class="bg-green-500 w-16 h-16 sm:w-20 sm:h-20 rounded flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 sm:h-12 sm:w-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <div class="flex-grow">
                    <div class="flex flex-col sm:flex-row justify-between">
                        <div>
                            <h3 class="text-lg font-bold">Customer Service Agent (REMOTE)</h3>
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">Featured</span>
                            <p class="text-blue-500 mt-1 text-sm sm:text-base">Deliveries On-Demand Logistics (Southeast Asia)</p>
                            <p class="text-gray-600 mt-1 text-sm sm:text-base">Surakarta, Indonesia (Remote)</p>
                            <p class="text-gray-600 mt-1 text-sm sm:text-base">IDR 4,000,000</p>
                            <div class="flex flex-wrap gap-2 mt-2 text-xs">
                                <span class="text-gray-600">Customer Service</span>
                                <span class="text-gray-400 hidden sm:inline">•</span>
                                <span class="text-gray-600">Logistics</span>
                                <span class="text-gray-400 hidden sm:inline">•</span>
                                <span class="text-gray-600">Full-time</span>
                            </div>
                        </div>
                        <div class="text-gray-400 flex items-start mt-2 sm:mt-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-xs sm:text-sm">17 Feb 2025</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row gap-4 mb-8">
                <div class="flex-shrink-0 flex justify-center sm:block">
                    <div class="bg-green-500 w-16 h-16 sm:w-20 sm:h-20 rounded flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 sm:h-12 sm:w-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <div class="flex-grow">
                    <div class="flex flex-col sm:flex-row justify-between">
                        <div>
                            <h3 class="text-lg font-bold">Customer Service Agent (REMOTE)</h3>
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">Featured</span>
                            <p class="text-blue-500 mt-1 text-sm sm:text-base">Deliveries On-Demand Logistics (Southeast Asia)</p>
                            <p class="text-gray-600 mt-1 text-sm sm:text-base">Surakarta, Indonesia (Remote)</p>
                            <p class="text-gray-600 mt-1 text-sm sm:text-base">IDR 4,000,000</p>
                            <div class="flex flex-wrap gap-2 mt-2 text-xs">
                                <span class="text-gray-600">Customer Service</span>
                                <span class="text-gray-400 hidden sm:inline">•</span>
                                <span class="text-gray-600">Logistics</span>
                                <span class="text-gray-400 hidden sm:inline">•</span>
                                <span class="text-gray-600">Full-time</span>
                            </div>
                        </div>
                        <div class="text-gray-400 flex items-start mt-2 sm:mt-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-xs sm:text-sm">17 Feb 2025</span>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <!-- Featured Companies -->
        <div class="mt-8 sm:mt-10 mb-6 sm:mb-8">
            <h2 class="text-gray-800 font-medium text-base sm:text-lg border-b border-blue-500 pb-2 inline-block">FEATURED COMPANIES</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 mb-8 sm:mb-10">
            <!-- Company 1 -->
            <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6 relative">
                <div class="flex items-center mb-4">
                    <div class="mr-4">
                        <img src="https://placehold.co/40x40/cyan/white?text=E" alt="Enciety" class="w-8 h-8 sm:w-10 sm:h-10">
                    </div>
                    <h3 class="font-bold text-gray-800 text-sm sm:text-base">Enciety Business Consult</h3>
                </div>
                <div class="space-y-2">
                    <div class="flex items-center text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="text-xs sm:text-sm">Indonesia</span>
                    </div>
                    <div class="flex items-center text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                        </svg>
                        <span class="text-xs sm:text-sm">App Marketing</span>
                    </div>
                    <div class="mt-4">
                        <a href="#" class="text-blue-500 text-xs sm:text-sm">0 job positions</a>
                    </div>
                </div>
            </div>

            <!-- Company 2 -->
            <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6 relative">
                <div class="flex items-center mb-4">
                    <div class="mr-4">
                        <img src="https://placehold.co/40x40/000/white?text=P" alt="Playmakers" class="w-8 h-8 sm:w-10 sm:h-10">
                    </div>
                    <h3 class="font-bold text-gray-800 text-sm sm:text-base">Playmakers</h3>
                </div>
                <div class="space-y-2">
                    <div class="flex items-center text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="text-xs sm:text-sm">Indonesia</span>
                    </div>
                    <div class="flex items-center text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                        </svg>
                        <span class="text-xs sm:text-sm">Advertising</span>
                    </div>
                    <div class="mt-4">
                        <a href="#" class="text-blue-500 text-xs sm:text-sm">4 job positions</a>
                    </div>
                </div>
            </div>

            <!-- Company 3 -->
            <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6 relative">
                <div class="flex items-center mb-4">
                    <div class="mr-4">
                        <img src="https://placehold.co/40x40/orange/white?text=T" alt="TurnkeyID" class="w-8 h-8 sm:w-10 sm:h-10">
                    </div>
                    <h3 class="font-bold text-gray-800 text-sm sm:text-base">TurnkeyID</h3>
                </div>
                <div class="space-y-2">
                    <div class="flex items-center text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="text-xs sm:text-sm">Indonesia</span>
                    </div>
                    <div class="flex items-center text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                        </svg>
                        <span class="text-xs sm:text-sm">Big Data</span>
                    </div>
                    <div class="mt-4">
                        <a href="#" class="text-blue-500 text-xs sm:text-sm">6 job positions</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Job Listings -->
        <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6 mb-4">
            <div class="flex flex-col sm:flex-row gap-4 mb-8">
                <div class="flex-shrink-0 flex justify-center sm:block">
                    <div class="bg-green-500 w-16 h-16 sm:w-20 sm:h-20 rounded flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 sm:h-12 sm:w-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <div class="flex-grow">
                    <div class="flex flex-col sm:flex-row justify-between">
                        <div>
                            <h3 class="text-lg font-bold">IPO Team Associate/Senior Associate</h3>
                            <p class="text-blue-500 mt-1 text-sm sm:text-base">Deliveries On-Demand Logistics (Southeast Asia)</p>
                            <p class="text-gray-600 mt-1 text-sm sm:text-base">Jakarta, Indonesia</p>
                            <div class="flex flex-wrap gap-2 mt-2 text-xs">
                                <span class="text-gray-600">Finance, Legal & Accounting</span>
                                <span class="text-gray-400 hidden sm:inline">•</span>
                                <span class="text-gray-600">Logistics</span>
                                <span class="text-gray-400 hidden sm:inline">•</span>
                                <span class="text-gray-600">Full-time</span>
                            </div>
                        </div>
                        <div class="text-gray-400 flex items-start mt-2 sm:mt-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-xs sm:text-sm">9h ago</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row gap-4">
                <div class="flex-shrink-0 flex justify-center sm:block">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 rounded flex items-center justify-center overflow-hidden">
                        <img src="https://placehold.co/80x80/pink/white?text=Ichigo" alt="PT. Ichigo Indonesia Intl" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="flex-grow">
                    <div class="flex flex-col sm:flex-row justify-between">
                        <div>
                            <h3 class="text-lg font-bold">HR Specialist</h3>
                            <p class="text-blue-500 mt-1 text-sm sm:text-base">PT. Ichigo Indonesia Intl</p>
                            <p class="text-gray-600 mt-1 text-sm sm:text-base">Jakarta, Indonesia</p>
                            <p class="text-gray-600 mt-1 text-sm sm:text-base">IDR 7,000,000 - 10,000,000</p>
                            <div class="flex flex-wrap gap-2 mt-2 text-xs">
                                <span class="text-gray-600">Human Resources</span>
                                <span class="text-gray-400 hidden sm:inline">•</span>
                                <span class="text-gray-600">Internet technology</span>
                                <span class="text-gray-400 hidden sm:inline">•</span>
                                <span class="text-gray-600">Full-time</span>
                            </div>
                        </div>
                        <div class="text-gray-400 flex items-start mt-2 sm:mt-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-xs sm:text-sm">9h ago</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row gap-4">
                <div class="flex-shrink-0 flex justify-center sm:block">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 rounded flex items-center justify-center overflow-hidden">
                        <img src="https://placehold.co/80x80/pink/white?text=Ichigo" alt="PT. Ichigo Indonesia Intl" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="flex-grow">
                    <div class="flex flex-col sm:flex-row justify-between">
                        <div>
                            <h3 class="text-lg font-bold">HR Specialist</h3>
                            <p class="text-blue-500 mt-1 text-sm sm:text-base">PT. Ichigo Indonesia Intl</p>
                            <p class="text-gray-600 mt-1 text-sm sm:text-base">Jakarta, Indonesia</p>
                            <p class="text-gray-600 mt-1 text-sm sm:text-base">IDR 7,000,000 - 10,000,000</p>
                            <div class="flex flex-wrap gap-2 mt-2 text-xs">
                                <span class="text-gray-600">Human Resources</span>
                                <span class="text-gray-400 hidden sm:inline">•</span>
                                <span class="text-gray-600">Internet technology</span>
                                <span class="text-gray-400 hidden sm:inline">•</span>
                                <span class="text-gray-600">Full-time</span>
                            </div>
                        </div>
                        <div class="text-gray-400 flex items-start mt-2 sm:mt-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-xs sm:text-sm">9h ago</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row gap-4">
                <div class="flex-shrink-0 flex justify-center sm:block">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 rounded flex items-center justify-center overflow-hidden">
                        <img src="https://placehold.co/80x80/pink/white?text=Ichigo" alt="PT. Ichigo Indonesia Intl" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="flex-grow">
                    <div class="flex flex-col sm:flex-row justify-between">
                        <div>
                            <h3 class="text-lg font-bold">HR Specialist</h3>
                            <p class="text-blue-500 mt-1 text-sm sm:text-base">PT. Ichigo Indonesia Intl</p>
                            <p class="text-gray-600 mt-1 text-sm sm:text-base">Jakarta, Indonesia</p>
                            <p class="text-gray-600 mt-1 text-sm sm:text-base">IDR 7,000,000 - 10,000,000</p>
                            <div class="flex flex-wrap gap-2 mt-2 text-xs">
                                <span class="text-gray-600">Human Resources</span>
                                <span class="text-gray-400 hidden sm:inline">•</span>
                                <span class="text-gray-600">Internet technology</span>
                                <span class="text-gray-400 hidden sm:inline">•</span>
                                <span class="text-gray-600">Full-time</span>
                            </div>
                        </div>
                        <div class="text-gray-400 flex items-start mt-2 sm:mt-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-xs sm:text-sm">9h ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back to Top Button -->
        <div class="fixed bottom-4 sm:bottom-6 right-4 sm:right-6">
            <button class="bg-gray-800 text-white p-2 sm:p-3 rounded-full shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                </svg>
            </button>
        </div>
    </div>
    
</x-main-nav>