<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.jsx'])

    </head>
    <body>
        <header class=" py-4 px-10 shadow-sm">
            <nav class="flex gap-x-16 items-center">
                <h1 class="font-bold">
                    <a href="{{route('index')}}">TechConnect</a>
                </h1>
                <div class="justify-between flex flex-1">
                    <ul class="flex gap-x-8 items-center">
                        <li>
                            <a href="{{route('explore-startups')}}">Explore Startups</a>
                        </li>
                        <li>Tech Corner</li>
                        <li>Jobs</li>
                        <li>Career Hub</li>
                        <li>Events</li>
                        <li>Insights</li>
                        <li>Pricing</li>
                    </ul>
                    <div class="flex gap-x-10">
                        <button>Login</button>
                        <button class="bg-green-700 text-white px-2 py-1 rounded-full">Sign up</button>
                    </div>
                </div>
            </nav>
        </header>

        <div class="bg-green-950 px-10 flex justify-center items-center">
            <div class="h-[300px] flex py-10 w-2/3 gap-x-5">
                <div class="flex-1 text-slate-400">
                    <p class="font-light text-2xl">
                        ARUDEM Launches in Uganda, being the first industry game disraptor in 2025
                    </p>
                    <p class="py-4">
                        WWT is honored to once again be recognized by Fortune Media and Great Place To Work® for its workplace culture.
                    </p>
                    <a href="" class="flex items-center gap-x-2">
                        <span>Read more</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="flex-1">
                    <img class="w-full h-full object-cover rounded-lg" src="images/launch.jpeg" alt="">
                </div>
            </div>
        </div>

{{--        inside layout structure --}}
        <div class="grid grid-cols-10 my-4">
           <div class="px-10 col-span-8">
               <h1 class="text-3xl font-bold">LASTEST NEWS</h1>
               {{--        start of wrapper for the blogs --}}
               <div class="py-5 grid grid-cols-3                                                                      gap-x-5 gap-y-8 ">
                   <div class="border rounded-sm">
                       <div class="px-2 py-1">
                           <p class="text-xs">
                               By
                               <span class=" font-bold">Emmanuel Angoda . </span>
                               <span>6days ago</span>
                           </p>
                           <p class="font-bold text-lg leading-5 mt-0.5">
                               Stop writing every where, here is a smart way
                           </p>
                       </div>

                       <div class="h-[200px]">
                           <img class="w-full h-full object-cover" src="images/image1.jpeg" alt="">
                       </div>
                       <div class="text-xs flex justify-between px-2 py-2">
                           <p>WWT is honored to once again be recognized by Fortune Media and Great Place To Work® for its workplace culture ...</p>
                       </div>
                   </div>

                   <div class="border rounded-sm">
                       <div class="px-2 py-1">
                           <p class="text-xs">
                               By
                               <span class=" font-bold">Emmanuel Angoda . </span>
                               <span>6days ago</span>
                           </p>
                           <p class="font-bold text-lg leading-5 mt-0.5">
                               Stop writing every where, here is a smart way
                           </p>
                       </div>

                       <div class="h-[200px]">
                           <img class="w-full h-full object-cover" src="images/image2.jpeg" alt="">
                       </div>
                       <div class="text-xs flex justify-between px-2 py-2">
                           <p>WWT is honored to once again be recognized by Fortune Media and Great Place To Work® for its workplace culture ...</p>
                       </div>
                   </div>

                   <div class="border rounded-sm">
                       <div class="px-2 py-1">
                           <p class="text-xs">
                               By
                               <span class=" font-bold">Emmanuel Angoda . </span>
                               <span>6days ago</span>
                           </p>
                           <p class="font-bold text-lg leading-5 mt-0.5">
                               Stop writing every where, here is a smart way
                           </p>
                       </div>

                       <div class="h-[200px]">
                           <img class="w-full h-full object-cover" src="images/emmanuel.jpeg" alt="">
                       </div>
                       <div class="text-xs flex justify-between px-2 py-2">
                           <p>WWT is honored to once again be recognized by Fortune Media and Great Place To Work® for its workplace culture ...</p>
                       </div>
                   </div>

                   <div class="border rounded-sm">
                       <div class="px-2 py-1">
                           <p class="text-xs">
                               By
                               <span class=" font-bold">Emmanuel Angoda . </span>
                               <span>6days ago</span>
                           </p>
                           <p class="font-bold text-lg leading-5 mt-0.5">
                               Stop writing every where, here is a smart way
                           </p>
                       </div>

                       <div class="h-[200px]">
                           <img class="w-full h-full object-cover" src="images/image3.jpeg" alt="">
                       </div>
                       <div class="text-xs flex justify-between px-2 py-2">
                           <p>WWT is honored to once again be recognized by Fortune Media and Great Place To Work® for its workplace culture ...</p>
                       </div>
                   </div>

                   <div class="border rounded-sm">
                       <div class="px-2 py-1">
                           <p class="text-xs">
                               By
                               <span class=" font-bold">Emmanuel Angoda . </span>
                               <span>6days ago</span>
                           </p>
                           <p class="font-bold text-lg leading-5 mt-0.5">
                               InversePay Launches in Uganda
                           </p>
                       </div>

                       <div class="h-[200px]">
                           <img class="w-full h-full object-cover" src="images/image5.jpeg" alt="">
                       </div>
                       <div class="text-xs flex justify-between px-2 py-2">
                           <p>WWT is honored to once again be recognized by Fortune Media and Great Place To Work® for its workplace culture ...</p>
                       </div>
                   </div>

                   <div class="border rounded-sm">
                       <div class="px-2 py-1">
                           <p class="text-xs">
                               By
                               <span class=" font-bold">Emmanuel Angoda . </span>
                               <span>6days ago</span>
                           </p>
                           <p class="font-bold text-lg leading-5 mt-0.5">
                               Stop writing every where, here is a smart way
                           </p>
                       </div>

                       <div class="h-[200px]">
                           <img class="w-full h-full object-cover" src="images/image4.jpeg" alt="">
                       </div>
                       <div class="text-xs flex justify-between px-2 py-2">
                           <p>WWT is honored to once again be recognized by Fortune Media and Great Place To Work® for its workplace culture ...</p>
                       </div>
                   </div>

                   <div class="border rounded-sm">
                       <div class="px-2 py-1">
                           <p class="text-xs">
                               By
                               <span class=" font-bold">Emmanuel Angoda . </span>
                               <span>6days ago</span>
                           </p>
                           <p class="font-bold text-lg leading-5 mt-0.5">
                               Stop writing every where, here is a smart way
                           </p>
                       </div>

                       <div class="h-[200px]">
                           <img class="w-full h-full object-cover" src="images/image2.jpeg" alt="">
                       </div>
                       <div class="text-xs flex justify-between px-2 py-2">
                           <p>WWT is honored to once again be recognized by Fortune Media and Great Place To Work® for its workplace culture ...</p>
                       </div>
                   </div>

                   <div class="border rounded-sm">
                       <div class="px-2 py-1">
                           <p class="text-xs">
                               By
                               <span class=" font-bold">Emmanuel Angoda . </span>
                               <span>6days ago</span>
                           </p>
                           <p class="font-bold text-lg leading-5 mt-0.5">
                               April 4th marks Women in Tech Day,
                           </p>
                       </div>

                       <div class="h-[200px]">
                           <img class="w-full h-full object-cover" src="images/image7.jpeg" alt="">
                       </div>
                       <div class="text-xs flex justify-between px-2 py-2">
                           <p>WWT is honored to once again be recognized by Fortune Media and Great Place To Work® for its workplace culture ...</p>
                       </div>
                   </div>

               </div>
               {{--    end of blog wrapper--}}
               <div class="flex justify-center items-center py-4">
                   <button class="border-green-500 border gap-x-1 px-3 py-2 rounded-full flex">
                       <span>See More</span>
                       <span>
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                              <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                            </svg>
                       </span>
                   </button>
               </div>
           </div>

            {{--        side events component start--}}
            <div class="col-span-2">
                <h1 class="">UpComing Events</h1>
                {{--                an event card--}}
                <div class="flex items-center gap-x-3 mt-3">
                    <div >
                        <div class="bg-slate-300 p-1 rounded-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                            </svg>
                        </div>
                    </div>
                    <div>
                        <p class="font-light">Launch of NEEXA.AI CO</p>
                        <p class="text-sm -my-1">Reception at Four Points</p>
                        <p class="text-xs font-medium">Apr 28, 2025</p>
                    </div>
                </div>
                {{--                end of event card--}}
                <div class="flex items-center gap-x-3 mt-3">
                    <div >
                        <div class="bg-slate-300 p-1 rounded-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                            </svg>
                        </div>
                    </div>
                    <div>
                        <p class="font-light">Launch of NEEXA.AI CO</p>
                        <p class="text-sm -my-1">Reception at Four Points</p>
                        <p class="text-xs font-medium">Apr 28, 2025</p>
                    </div>
                </div>
                {{--                end of event card--}}
                {{--                ean event card--}}
                <div class="flex items-center gap-x-3 mt-3">
                    <div >
                        <div class="bg-slate-300 p-1 rounded-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                            </svg>
                        </div>
                    </div>
                    <div>
                        <p class="font-light">Launch of NEEXA.AI CO</p>
                        <p class="text-sm -my-1">Reception at Four Points</p>
                        <p class="text-xs font-medium">Apr 28, 2025</p>
                    </div>
                </div>
                {{--                end of event card--}}
            </div>
            {{--        side events components end--}}
        </div>
{{--    end of inside layout structure--}}


{{--    latest jobs wrapper--}}
    <div class="bg-green-200 px-10 py-10">
        <h1 class="text-center pb-5 text-2xl font-bold">Lastest Jobs</h1>
        <div class="max-w-5xl mx-auto flex flex-wrap gap-x-24 gap-y-10 justify-evenly ">
            <div class="flex gap-x-2 items-center">
                <img class="w-10 h-10 object-cover rounded-full" src="images/jobs/icon-1.jpeg" alt="">
                <div>
                    <p class="font-bold">Creative Lead</p>
                    <p class="-my-1 text-sm">Oasis Digital</p>
                    <p class="text-sm">2.4M - 3.5M</p>
                </div>
            </div>

            <div class="flex gap-x-2 items-center">
                <img class="w-10 h-10 object-cover rounded-full" src="images/jobs/icon4.jpeg" alt="">
                <div>
                    <p class="font-bold">Creative Lead</p>
                    <p class="-my-1 text-sm">Oasis Digital</p>
                    <p class="text-sm">2.4M - 3.5M</p>
                </div>
            </div>

            <div class="flex gap-x-2 items-center">
                <img class="w-10 h-10 object-cover rounded-full" src="images/jobs/icon2.png" alt="">
                <div>
                    <p class="font-bold">Creative Lead</p>
                    <p class="-my-1 text-sm">Oasis Digital</p>
                    <p class="text-sm">2.4M - 3.5M</p>
                </div>
            </div>

            <div class="flex gap-x-2 items-center">
                <img class="w-10 h-10 object-cover rounded-full" src="images/jobs/icon3.png" alt="">
                <div>
                    <p class="font-bold">Creative Lead</p>
                    <p class="-my-1 text-sm">Oasis Digital</p>
                    <p class="text-sm">2.4M - 3.5M</p>
                </div>
            </div>

            <div class="flex gap-x-2 items-center">
                <img class="w-10 h-10 object-cover rounded-full" src="images/jobs/icon3.png" alt="">
                <div>
                    <p class="font-bold">Creative Lead</p>
                    <p class="-my-1 text-sm">Oasis Digital</p>
                    <p class="text-sm">2.4M - 3.5M</p>
                </div>
            </div>

            <div class="flex gap-x-2 items-center">
                <img class="w-10 h-10 object-cover rounded-full" src="images/jobs/icon2.png" alt="">
                <div>
                    <p class="font-bold">Creative Lead</p>
                    <p class="-my-1 text-sm">Oasis Digital</p>
                    <p class="text-sm">2.4M - 3.5M</p>
                </div>
            </div>

            <div class="flex gap-x-2 items-center">
                <img class="w-10 h-10 object-cover rounded-full" src="images/jobs/icon4.jpeg" alt="">
                <div>
                    <p class="font-bold">Creative Lead</p>
                    <p class="-my-1 text-sm">Oasis Digital</p>
                    <p class="text-sm">2.4M - 3.5M</p>
                </div>
            </div>

            <div class="flex gap-x-2 items-center">
                <img class="w-10 h-10 object-cover rounded-full" src="images/jobs/icon-1.jpeg" alt="">
                <div>
                    <p class="font-bold">Creative Lead</p>
                    <p class="-my-1 text-sm">Oasis Digital</p>
                    <p class="text-sm">2.4M - 3.5M</p>
                </div>
            </div>

            <div class="flex gap-x-2 items-center">
                <img class="w-10 h-10 object-cover rounded-full" src="images/jobs/icon-1.jpeg" alt="">
                <div>
                    <p class="font-bold">Creative Lead</p>
                    <p class="-my-1 text-sm">Oasis Digital</p>
                    <p class="text-sm">2.4M - 3.5M</p>
                </div>
            </div>

            <div class="flex gap-x-2 items-center">
                <img class="w-10 h-10 object-cover rounded-full" src="images/jobs/icon-1.jpeg" alt="">
                <div>
                    <p class="font-bold">Creative Lead</p>
                    <p class="-my-1 text-sm">Oasis Digital</p>
                    <p class="text-sm">2.4M - 3.5M</p>
                </div>
            </div>
        </div>
    </div>
{{--    end of jobs wrapper--}}

{{--    in brief--}}
    <div class="px-10 my-10">
        <h1 class="text-3xl font-black mb-4">In Short</h1>
        <div>
            <div class="flex gap-x-5 border-b pb-5">
                <div class="h-24 w-32">
                    <img class="w-full h-full object-cover" src="images/image1.jpeg" alt="">
                </div>
                <div>
                    <span class="uppercase text-sm font-bold text-green-500">In Short</span>
                    <p>
                        <a href="" class="font-bold text-lg hover:underline">Protestors Interrupt Kassajja keynote speech on state of the economy</a>
                    </p>
                    <span class="text-slate-500 text-sm">Aaron Nevalinz - 7 hours ago</span>
                </div>
            </div>

            <div class="flex gap-x-5 border-b pb-5 mt-4">
                <div class="h-24 w-32">
                    <img class="w-full h-full object-cover" src="images/image7.jpeg" alt="">
                </div>
                <div>
                    <span class="uppercase text-sm font-bold text-green-500">In Short</span>
                    <p>
                        <a href="" class="font-bold text-lg hover:underline">Protestors Interrupt Kassajja keynote speech on state of the economy</a>
                    </p>
                    <span class="text-slate-500 text-sm">Aaron Nevalinz - 7 hours ago</span>
                </div>
            </div>

            <div class="flex gap-x-5 border-b pb-5 mt-4">
                <div class="h-24 w-32">
                    <img class="w-full h-full object-cover" src="images/image5.jpeg" alt="">
                </div>
                <div>
                    <span class="uppercase text-sm font-bold text-green-500">In Short</span>
                    <p>
                        <a href="" class="font-bold text-lg hover:underline">Protestors Interrupt Kassajja keynote speech on state of the economy</a>
                    </p>
                    <span class="text-slate-500 text-sm">Aaron Nevalinz - 7 hours ago</span>
                </div>
            </div>

            <div class="flex gap-x-5 border-b pb-5 mt-4">
                <div class="h-24 w-32">
                    <img class="w-full h-full object-cover" src="images/image4.jpeg" alt="">
                </div>
                <div>
                    <span class="uppercase text-sm font-bold text-green-500">In Short</span>
                    <p>
                        <a href="" class="font-bold text-lg hover:underline">Protestors Interrupt Kassajja keynote speech on state of the economy</a>
                    </p>
                    <span class="text-slate-500 text-sm">Aaron Nevalinz - 7 hours ago</span>
                </div>
            </div>

            <div class="flex gap-x-5 border-b pb-5 mt-4">
                <div class="h-24 w-32">
                    <img class="w-full h-full object-cover" src="images/image2.jpeg" alt="">
                </div>
                <div>
                    <span class="uppercase text-sm font-bold text-green-500">In Short</span>
                    <p>
                        <a href="" class="font-bold text-lg hover:underline">Protestors Interrupt Kassajja keynote speech on state of the economy</a>
                    </p>
                    <span class="text-slate-500 text-sm">Aaron Nevalinz - 7 hours ago</span>
                </div>
            </div>
        </div>
    </div>


{{--    newsletters--}}
        <div class="px-10 my-10">
            <div class="flex items-center gap-x-5">
                <h1 class="text-4xl text-green-600 font-black">NewsLetters</h1>
                <button class="border-green-500 border gap-x-1 px-3 py-2 rounded-full flex">
                    <span class="font-medium">See More</span>
                    <span>
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                              <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                            </svg>
                       </span>
                </button>
            </div>

            <p class="py-2">Subscribe for the industry’s biggest tech news</p>

            <div class="grid grid-cols-6 gap-x-5 items-center">
                <div class="col-span-4 mt-4">
                    <div class="flex gap-x-5">
                        <div class="border p-2">
                            <div class="flex justify-between">
                                <p class="font-bold text-2xl">TechConnect Daily News</p>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </span>
                            </div>
                            <p>
                                Every WeekDay and Sunday, you get the best of TechConnect's Coverage
                            </p>
                        </div>

                        <div class="border p-2">
                            <div class="flex justify-between">
                                <p class="font-bold text-2xl">TechConnect Daily News</p>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </span>
                            </div>
                            <p>
                                Every WeekDay and Sunday, you get the best of TechConnect's Coverage
                            </p>
                        </div>

                        <div class="border p-2">
                            <div class="flex justify-between">
                                <p class="font-bold text-2xl">TechConnect Daily News</p>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </span>
                            </div>
                            <p>
                                Every WeekDay and Sunday, you get the best of TechConnect's Coverage
                            </p>
                        </div>

                        <div class="border p-2">
                            <div class="flex justify-between">
                                <p class="font-bold text-2xl">TechConnect Daily News</p>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </span>
                            </div>
                            <p>
                                Every WeekDay and Sunday, you get the best of TechConnect's Coverage
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 ">
                    <form action="">
                        <input class="w-full rounded-lg border-slate-500 border" placeholder="Email Address" type="text">
                        <div class="flex mt-4 gap-x-2">
                            <button class="bg-green-700 text-white text-sm px-4 py-0.5 rounded-lg">Subscribe</button>
                            <p class="text-sm">By submitting your email, you agree to our Terms and Privacy Notice.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
{{--    end of newsletters--}}

    </body>
</html>
