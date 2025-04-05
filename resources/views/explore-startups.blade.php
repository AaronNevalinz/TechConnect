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
    <style>
        dialog::backdrop{
            background: rgba(15, 23, 42, 0.4);
            backdrop-filter: blur(2px);
        }
        dialog::-webkit-scrollbar{
            display: none;
        }
    </style>
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
                <li>
                    <a href="{{route('jobs')}}">Jobs</a>
                </li>
                <li>Career Hub</li>
                <li>Events</li>
                <li>Insights</li>
                <li>Pricing</li>
            </ul>
            <div class="flex gap-x-10">
                <button>Login</button>
                <button class="bg-green-700 text-white px-2 py-1 rounded-lg">Sign up</button>
            </div>
        </div>
    </nav>
</header>

<main class="px-10 mt-5">

    <div class="grid grid-cols-6 gap-x-10">
        <div class=" col-span-4">
{{--            today's top startups wrapper--}}
            <section class="mb-10">
                <div>
                    <h1 class="text-green-600 font-black text-3xl mb-4">Top Products Launching today...</h1>
                </div>
                <div class="grid grid-cols-2 gap-x-5 gap-y-8 mt-10">

                    <div class="shadow-lg hover:bg-slate-100 px-3 rounded-lg py-3 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-x-4 " onclick="showDetailsDialog()">
                                <div>
                                    <img src="images/comp ai.avif" alt="">
                                </div>
                                <div>
                                    <div>
                                        <p class="font-bold">1. Comp AI</p>
                                        <p>The Open Source Vanta & Drata alternative</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex gap-x-4">
                        <span class="bg-slate-300 hover:bg-white px-4 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                </svg>
                            </span>
                            <span>78</span>
                        </span>
                                <span class="bg-slate-300 hover:bg-white px-2 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                </svg>
                            </span>
                            <span>468</span>
                        </span>
                            </div>
                        </div>
                        <div class="flex gap-x-4 text-slate-600 text-sm mt-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                    </svg>
                                </span>
                            <p>Open Source</p>
                            <p>Artificial Intelligence</p>
                            <p>Security</p>
                        </div>
                    </div>

                    <div class="shadow-lg hover:bg-slate-100 px-3 rounded-lg py-3 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-x-4 ">
                                <div>
                                    <img src="images/clone mytrips.avif" alt="">
                                </div>
                                <div>
                                    <div>
                                        <p class="font-bold">2. CloneMyTrips</p>
                                        <p>The Open Source Vanta & Drata alternative</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-x-4">
                        <span class="bg-slate-300 hover:bg-white px-4 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                </svg>
                            </span>
                            <span>78</span>
                        </span>
                                <span class="bg-slate-300 hover:bg-white px-2 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                </svg>
                            </span>
                            <span>468</span>
                        </span>
                            </div>
                        </div>
                        <div class="flex gap-x-4 text-slate-600 text-sm mt-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                    </svg>
                                </span>
                            <p>Open Source</p>
                            <p>Artificial Intelligence</p>
                            <p>Security</p>
                        </div>
                    </div>

                    <div class="shadow-lg hover:bg-slate-100 px-3 rounded-lg py-3 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-x-4 ">
                                <div>
                                    <img src="images/adobe pr.avif" alt="">
                                </div>
                                <div>
                                    <div>
                                        <p class="font-bold">3. Adobe Premiere Pro 25.2</p>
                                        <p>The Open Source Vanta & Drata alternative</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-x-4">
                        <span class="bg-slate-300 hover:bg-white px-4 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                </svg>
                            </span>
                            <span>78</span>
                        </span>
                                <span class="bg-slate-300 hover:bg-white px-2 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                </svg>
                            </span>
                            <span>468</span>
                        </span>
                            </div>
                        </div>
                        <div class="flex gap-x-4 text-slate-600 text-sm mt-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                    </svg>
                                </span>
                            <p>Open Source</p>
                            <p>Artificial Intelligence</p>
                            <p>Security</p>
                        </div>
                    </div>

                    <div class="shadow-lg hover:bg-slate-100 px-3 rounded-lg py-3 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-x-4 ">
                                <div>
                                    <img src="images/echo.avif" alt="">
                                </div>
                                <div>
                                    <div>
                                        <p class="font-bold">4. Echo Viff</p>
                                        <p>The Open Source Vanta & Drata alternative</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-x-4">
                        <span class="bg-slate-300 hover:bg-white px-4 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                </svg>
                            </span>
                            <span>78</span>
                        </span>
                                <span class="bg-slate-300 hover:bg-white px-2 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                </svg>
                            </span>
                            <span>468</span>
                        </span>
                            </div>
                        </div>
                        <div class="flex gap-x-4 text-slate-600 text-sm mt-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                    </svg>
                                </span>
                            <p>Open Source</p>
                            <p>Artificial Intelligence</p>
                            <p>Security</p>
                        </div>
                    </div>

                    <div class="shadow-lg hover:bg-slate-100 px-3 rounded-lg py-3 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-x-4 ">
                                <div>
                                    <img src="images/supa.avif" alt="">
                                </div>
                                <div>
                                    <div>
                                        <p class="font-bold">5. Supawald</p>
                                        <p>The Open Source Vanta & Drata alternative</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-x-4">
                        <span class="bg-slate-300 hover:bg-white px-4 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                </svg>
                            </span>
                            <span>78</span>
                        </span>
                                <span class="bg-slate-300 hover:bg-white px-2 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                </svg>
                            </span>
                            <span>468</span>
                        </span>
                            </div>
                        </div>
                        <div class="flex gap-x-4 text-slate-600 text-sm mt-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                    </svg>
                                </span>
                            <p>Open Source</p>
                            <p>Artificial Intelligence</p>
                            <p>Security</p>
                        </div>
                    </div>

                    <div class="shadow-lg hover:bg-slate-100 px-3 rounded-lg py-3 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-x-4 ">
                                <div>
                                    <img src="images/comp ai.avif" alt="">
                                </div>
                                <div>
                                    <div>
                                        <p class="font-bold">1. Comp AI</p>
                                        <p>The Open Source Vanta & Drata alternative</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-x-4">
                        <span class="bg-slate-300 hover:bg-white px-4 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                </svg>
                            </span>
                            <span>78</span>
                        </span>
                                <span class="bg-slate-300 hover:bg-white px-2 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                </svg>
                            </span>
                            <span>468</span>
                        </span>
                            </div>
                        </div>
                        <div class="flex gap-x-4 text-slate-600 text-sm mt-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                    </svg>
                                </span>
                            <p>Open Source</p>
                            <p>Artificial Intelligence</p>
                            <p>Security</p>
                        </div>
                    </div>

                    <div class="shadow-lg hover:bg-slate-100 px-3 rounded-lg py-3 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-x-4 ">
                                <div>
                                    <img src="images/clone mytrips.avif" alt="">
                                </div>
                                <div>
                                    <div>
                                        <p class="font-bold">2. CloneMyTrips</p>
                                        <p>The Open Source Vanta & Drata alternative</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-x-4">
                        <span class="bg-slate-300 hover:bg-white px-4 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                </svg>
                            </span>
                            <span>78</span>
                        </span>
                                <span class="bg-slate-300 hover:bg-white px-2 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                </svg>
                            </span>
                            <span>468</span>
                        </span>
                            </div>
                        </div>
                        <div class="flex gap-x-4 text-slate-600 text-sm mt-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                    </svg>
                                </span>
                            <p>Open Source</p>
                            <p>Artificial Intelligence</p>
                            <p>Security</p>
                        </div>
                    </div>

                    <div class="shadow-lg hover:bg-slate-100 px-3 rounded-lg py-3 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-x-4 ">
                                <div>
                                    <img src="images/adobe pr.avif" alt="">
                                </div>
                                <div>
                                    <div>
                                        <p class="font-bold">3. Adobe Premiere Pro 25.2</p>
                                        <p>The Open Source Vanta & Drata alternative</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-x-4">
                        <span class="bg-slate-300 hover:bg-white px-4 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                </svg>
                            </span>
                            <span>78</span>
                        </span>
                                <span class="bg-slate-300 hover:bg-white px-2 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                </svg>
                            </span>
                            <span>468</span>
                        </span>
                            </div>
                        </div>
                        <div class="flex gap-x-4 text-slate-600 text-sm mt-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                    </svg>
                                </span>
                            <p>Open Source</p>
                            <p>Artificial Intelligence</p>
                            <p>Security</p>
                        </div>
                    </div>

                    <div class="shadow-lg hover:bg-slate-100 px-3 rounded-lg py-3 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-x-4 ">
                                <div>
                                    <img src="images/echo.avif" alt="">
                                </div>
                                <div>
                                    <div>
                                        <p class="font-bold">4. Echo Viff</p>
                                        <p>The Open Source Vanta & Drata alternative</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-x-4">
                        <span class="bg-slate-300 hover:bg-white px-4 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                </svg>
                            </span>
                            <span>78</span>
                        </span>
                                <span class="bg-slate-300 hover:bg-white px-2 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                </svg>
                            </span>
                            <span>468</span>
                        </span>
                            </div>
                        </div>
                        <div class="flex gap-x-4 text-slate-600 text-sm mt-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                    </svg>
                                </span>
                            <p>Open Source</p>
                            <p>Artificial Intelligence</p>
                            <p>Security</p>
                        </div>
                    </div>

                    <div class="shadow-lg hover:bg-slate-100 px-3 rounded-lg py-3 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-x-4 ">
                                <div>
                                    <img src="images/supa.avif" alt="">
                                </div>
                                <div>
                                    <div>
                                        <p class="font-bold">5. Supawald</p>
                                        <p>The Open Source Vanta & Drata alternative</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-x-4">
                        <span class="bg-slate-300 hover:bg-white px-4 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                </svg>
                            </span>
                            <span>78</span>
                        </span>
                                <span class="bg-slate-300 hover:bg-white px-2 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                </svg>
                            </span>
                            <span>468</span>
                        </span>
                            </div>
                        </div>
                        <div class="flex gap-x-4 text-slate-600 text-sm mt-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                    </svg>
                                </span>
                            <p>Open Source</p>
                            <p>Artificial Intelligence</p>
                            <p>Security</p>
                        </div>
                    </div>

                </div>
                <div class="mt-10 ">
                    <button class="text-lg font-bold text-slate-700 border-slate-400 border-2 w-full py-3 rounded-full">
                        See all of today's product launches
                    </button>
                </div>
            </section>
{{--            end of top startups wrapper--}}

{{--            Yesterday's top products wrapper--}}
            <section class="mb-10">
                <div>
                    <h1 class="text-green-600 font-black text-3xl mb-4">Yesterday's top products...</h1>
                </div>
                <div class="grid grid-cols-2 gap-x-5 gap-y-8 mt-10">
                    <div class="shadow-lg hover:bg-slate-100 px-3 rounded-lg py-3 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-x-4 ">
                                <div>
                                    <img src="images/comp ai.avif" alt="">
                                </div>
                                <div>
                                    <div>
                                        <p class="font-bold">1. Comp AI</p>
                                        <p>The Open Source Vanta & Drata alternative</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-x-4">
                        <span class="bg-slate-300 hover:bg-white px-4 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                </svg>
                            </span>
                            <span>78</span>
                        </span>
                                <span class="bg-slate-300 hover:bg-white px-2 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                </svg>
                            </span>
                            <span>468</span>
                        </span>
                            </div>
                        </div>
                        <div class="flex gap-x-4 text-slate-600 text-sm mt-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                    </svg>
                                </span>
                            <p>Open Source</p>
                            <p>Artificial Intelligence</p>
                            <p>Security</p>
                        </div>
                    </div>

                    <div class="shadow-lg hover:bg-slate-100 px-3 rounded-lg py-3 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-x-4 ">
                                <div>
                                    <img src="images/clone mytrips.avif" alt="">
                                </div>
                                <div>
                                    <div>
                                        <p class="font-bold">2. CloneMyTrips</p>
                                        <p>The Open Source Vanta & Drata alternative</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-x-4">
                        <span class="bg-slate-300 hover:bg-white px-4 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                </svg>
                            </span>
                            <span>78</span>
                        </span>
                                <span class="bg-slate-300 hover:bg-white px-2 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                </svg>
                            </span>
                            <span>468</span>
                        </span>
                            </div>
                        </div>
                        <div class="flex gap-x-4 text-slate-600 text-sm mt-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                    </svg>
                                </span>
                            <p>Open Source</p>
                            <p>Artificial Intelligence</p>
                            <p>Security</p>
                        </div>
                    </div>

                    <div class="shadow-lg hover:bg-slate-100 px-3 rounded-lg py-3 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-x-4 ">
                                <div>
                                    <img src="images/adobe pr.avif" alt="">
                                </div>
                                <div>
                                    <div>
                                        <p class="font-bold">3. Adobe Premiere Pro 25.2</p>
                                        <p>The Open Source Vanta & Drata alternative</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-x-4">
                        <span class="bg-slate-300 hover:bg-white px-4 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                </svg>
                            </span>
                            <span>78</span>
                        </span>
                                <span class="bg-slate-300 hover:bg-white px-2 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                </svg>
                            </span>
                            <span>468</span>
                        </span>
                            </div>
                        </div>
                        <div class="flex gap-x-4 text-slate-600 text-sm mt-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                    </svg>
                                </span>
                            <p>Open Source</p>
                            <p>Artificial Intelligence</p>
                            <p>Security</p>
                        </div>
                    </div>

                    <div class="shadow-lg hover:bg-slate-100 px-3 rounded-lg py-3 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-x-4 ">
                                <div>
                                    <img src="images/echo.avif" alt="">
                                </div>
                                <div>
                                    <div>
                                        <p class="font-bold">4. Echo Viff</p>
                                        <p>The Open Source Vanta & Drata alternative</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-x-4">
                        <span class="bg-slate-300 hover:bg-white px-4 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                </svg>
                            </span>
                            <span>78</span>
                        </span>
                                <span class="bg-slate-300 hover:bg-white px-2 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                </svg>
                            </span>
                            <span>468</span>
                        </span>
                            </div>
                        </div>
                        <div class="flex gap-x-4 text-slate-600 text-sm mt-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                    </svg>
                                </span>
                            <p>Open Source</p>
                            <p>Artificial Intelligence</p>
                            <p>Security</p>
                        </div>
                    </div>

                    <div class="shadow-lg hover:bg-slate-100 px-3 rounded-lg py-3 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-x-4 ">
                                <div>
                                    <img src="images/supa.avif" alt="">
                                </div>
                                <div>
                                    <div>
                                        <p class="font-bold">5. Supawald</p>
                                        <p>The Open Source Vanta & Drata alternative</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-x-4">
                        <span class="bg-slate-300 hover:bg-white px-4 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                </svg>
                            </span>
                            <span>78</span>
                        </span>
                                <span class="bg-slate-300 hover:bg-white px-2 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                </svg>
                            </span>
                            <span>468</span>
                        </span>
                            </div>
                        </div>
                        <div class="flex gap-x-4 text-slate-600 text-sm mt-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                    </svg>
                                </span>
                            <p>Open Source</p>
                            <p>Artificial Intelligence</p>
                            <p>Security</p>
                        </div>
                    </div>

                </div>
                <div class="mt-10 ">
                    <button class="text-lg font-bold text-slate-700 border-slate-400 border-2 w-full py-3 rounded-full">
                        See yesterday's top products
                    </button>
                </div>
            </section>
{{--            end of yesterday's top products wrapper--}}

            {{--            Last week top products wrapper--}}
            <section class="mb-10">
                <div>
                    <h1 class="text-green-600 font-black text-3xl mb-4">Last week's top products...</h1>
                </div>
                <div class="grid grid-cols-2 gap-x-5 gap-y-8 mt-10">
                    <div class="shadow-lg hover:bg-slate-100 px-3 rounded-lg py-3 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-x-4 ">
                                <div>
                                    <img src="images/comp ai.avif" alt="">
                                </div>
                                <div>
                                    <div>
                                        <p class="font-bold">1. Comp AI</p>
                                        <p>The Open Source Vanta & Drata alternative</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-x-4">
                        <span class="bg-slate-300 hover:bg-white px-4 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                </svg>
                            </span>
                            <span>78</span>
                        </span>
                                <span class="bg-slate-300 hover:bg-white px-2 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                </svg>
                            </span>
                            <span>468</span>
                        </span>
                            </div>
                        </div>
                        <div class="flex gap-x-4 text-slate-600 text-sm mt-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                    </svg>
                                </span>
                            <p>Open Source</p>
                            <p>Artificial Intelligence</p>
                            <p>Security</p>
                        </div>
                    </div>

                    <div class="shadow-lg hover:bg-slate-100 px-3 rounded-lg py-3 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-x-4 ">
                                <div>
                                    <img src="images/clone mytrips.avif" alt="">
                                </div>
                                <div>
                                    <div>
                                        <p class="font-bold">2. CloneMyTrips</p>
                                        <p>The Open Source Vanta & Drata alternative</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-x-4">
                        <span class="bg-slate-300 hover:bg-white px-4 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                </svg>
                            </span>
                            <span>78</span>
                        </span>
                                <span class="bg-slate-300 hover:bg-white px-2 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                </svg>
                            </span>
                            <span>468</span>
                        </span>
                            </div>
                        </div>
                        <div class="flex gap-x-4 text-slate-600 text-sm mt-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                    </svg>
                                </span>
                            <p>Open Source</p>
                            <p>Artificial Intelligence</p>
                            <p>Security</p>
                        </div>
                    </div>

                    <div class="shadow-lg hover:bg-slate-100 px-3 rounded-lg py-3 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-x-4 ">
                                <div>
                                    <img src="images/adobe pr.avif" alt="">
                                </div>
                                <div>
                                    <div>
                                        <p class="font-bold">3. Adobe Premiere Pro 25.2</p>
                                        <p>The Open Source Vanta & Drata alternative</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-x-4">
                        <span class="bg-slate-300 hover:bg-white px-4 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                </svg>
                            </span>
                            <span>78</span>
                        </span>
                                <span class="bg-slate-300 hover:bg-white px-2 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                </svg>
                            </span>
                            <span>468</span>
                        </span>
                            </div>
                        </div>
                        <div class="flex gap-x-4 text-slate-600 text-sm mt-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                    </svg>
                                </span>
                            <p>Open Source</p>
                            <p>Artificial Intelligence</p>
                            <p>Security</p>
                        </div>
                    </div>

                    <div class="shadow-lg hover:bg-slate-100 px-3 rounded-lg py-3 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-x-4 ">
                                <div>
                                    <img src="images/echo.avif" alt="">
                                </div>
                                <div>
                                    <div>
                                        <p class="font-bold">4. Echo Viff</p>
                                        <p>The Open Source Vanta & Drata alternative</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-x-4">
                        <span class="bg-slate-300 hover:bg-white px-4 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                </svg>
                            </span>
                            <span>78</span>
                        </span>
                                <span class="bg-slate-300 hover:bg-white px-2 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                </svg>
                            </span>
                            <span>468</span>
                        </span>
                            </div>
                        </div>
                        <div class="flex gap-x-4 text-slate-600 text-sm mt-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                    </svg>
                                </span>
                            <p>Open Source</p>
                            <p>Artificial Intelligence</p>
                            <p>Security</p>
                        </div>
                    </div>

                    <div class="shadow-lg hover:bg-slate-100 px-3 rounded-lg py-3 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-x-4 ">
                                <div>
                                    <img src="images/supa.avif" alt="">
                                </div>
                                <div>
                                    <div>
                                        <p class="font-bold">5. Supawald</p>
                                        <p>The Open Source Vanta & Drata alternative</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-x-4">
                        <span class="bg-slate-300 hover:bg-white px-4 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                </svg>
                            </span>
                            <span>78</span>
                        </span>
                                <span class="bg-slate-300 hover:bg-white px-2 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                </svg>
                            </span>
                            <span>468</span>
                        </span>
                            </div>
                        </div>
                        <div class="flex gap-x-4 text-slate-600 text-sm mt-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                    </svg>
                                </span>
                            <p>Open Source</p>
                            <p>Artificial Intelligence</p>
                            <p>Security</p>
                        </div>
                    </div>

                </div>
                <div class="mt-10 ">
                    <button class="text-lg font-bold text-slate-700 border-slate-400 border-2 w-full py-3 rounded-full">
                        See list of last week's top products
                    </button>
                </div>
            </section>
            {{--            end of last week's top products wrapper--}}

            {{--            Last month top products wrapper--}}
            <section class="mb-10">
                <div>
                    <h1 class="text-green-600 font-black text-3xl mb-4">Last Month top products...</h1>
                </div>
                <div class="grid grid-cols-2 gap-x-5 gap-y-8 mt-10">
                    <div class="shadow-lg hover:bg-slate-100 px-3 rounded-lg py-3 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-x-4 ">
                                <div>
                                    <img src="images/comp ai.avif" alt="">
                                </div>
                                <div>
                                    <div>
                                        <p class="font-bold">1. Comp AI</p>
                                        <p>The Open Source Vanta & Drata alternative</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-x-4">
                        <span class="bg-slate-300 hover:bg-white px-4 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                </svg>
                            </span>
                            <span>78</span>
                        </span>
                                <span class="bg-slate-300 hover:bg-white px-2 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                </svg>
                            </span>
                            <span>468</span>
                        </span>
                            </div>
                        </div>
                        <div class="flex gap-x-4 text-slate-600 text-sm mt-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                    </svg>
                                </span>
                            <p>Open Source</p>
                            <p>Artificial Intelligence</p>
                            <p>Security</p>
                        </div>
                    </div>

                    <div class="shadow-lg hover:bg-slate-100 px-3 rounded-lg py-3 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-x-4 ">
                                <div>
                                    <img src="images/clone mytrips.avif" alt="">
                                </div>
                                <div>
                                    <div>
                                        <p class="font-bold">2. CloneMyTrips</p>
                                        <p>The Open Source Vanta & Drata alternative</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-x-4">
                        <span class="bg-slate-300 hover:bg-white px-4 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                </svg>
                            </span>
                            <span>78</span>
                        </span>
                                <span class="bg-slate-300 hover:bg-white px-2 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                </svg>
                            </span>
                            <span>468</span>
                        </span>
                            </div>
                        </div>
                        <div class="flex gap-x-4 text-slate-600 text-sm mt-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                    </svg>
                                </span>
                            <p>Open Source</p>
                            <p>Artificial Intelligence</p>
                            <p>Security</p>
                        </div>
                    </div>

                    <div class="shadow-lg hover:bg-slate-100 px-3 rounded-lg py-3 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-x-4 ">
                                <div>
                                    <img src="images/adobe pr.avif" alt="">
                                </div>
                                <div>
                                    <div>
                                        <p class="font-bold">3. Adobe Premiere Pro 25.2</p>
                                        <p>The Open Source Vanta & Drata alternative</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-x-4">
                        <span class="bg-slate-300 hover:bg-white px-4 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                </svg>
                            </span>
                            <span>78</span>
                        </span>
                                <span class="bg-slate-300 hover:bg-white px-2 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                </svg>
                            </span>
                            <span>468</span>
                        </span>
                            </div>
                        </div>
                        <div class="flex gap-x-4 text-slate-600 text-sm mt-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                    </svg>
                                </span>
                            <p>Open Source</p>
                            <p>Artificial Intelligence</p>
                            <p>Security</p>
                        </div>
                    </div>

                    <div class="shadow-lg hover:bg-slate-100 px-3 rounded-lg py-3 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-x-4 ">
                                <div>
                                    <img src="images/echo.avif" alt="">
                                </div>
                                <div>
                                    <div>
                                        <p class="font-bold">4. Echo Viff</p>
                                        <p>The Open Source Vanta & Drata alternative</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-x-4">
                        <span class="bg-slate-300 hover:bg-white px-4 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                </svg>
                            </span>
                            <span>78</span>
                        </span>
                                <span class="bg-slate-300 hover:bg-white px-2 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                </svg>
                            </span>
                            <span>468</span>
                        </span>
                            </div>
                        </div>
                        <div class="flex gap-x-4 text-slate-600 text-sm mt-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                    </svg>
                                </span>
                            <p>Open Source</p>
                            <p>Artificial Intelligence</p>
                            <p>Security</p>
                        </div>
                    </div>

                    <div class="shadow-lg hover:bg-slate-100 px-3 rounded-lg py-3 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-x-4 ">
                                <div>
                                    <img src="images/supa.avif" alt="">
                                </div>
                                <div>
                                    <div>
                                        <p class="font-bold">5. Supawald</p>
                                        <p>The Open Source Vanta & Drata alternative</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex gap-x-4">
                        <span class="bg-slate-300 hover:bg-white px-4 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                </svg>
                            </span>
                            <span>78</span>
                        </span>
                                <span class="bg-slate-300 hover:bg-white px-2 py-0.5 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                </svg>
                            </span>
                            <span>468</span>
                        </span>
                            </div>
                        </div>
                        <div class="flex gap-x-4 text-slate-600 text-sm mt-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                    </svg>
                                </span>
                            <p>Open Source</p>
                            <p>Artificial Intelligence</p>
                            <p>Security</p>
                        </div>
                    </div>

                </div>
                <div class="mt-10 ">
                    <button class="text-lg font-bold text-slate-700 border-slate-400 border-2 w-full py-3 rounded-full">
                        See list of last month's top products
                    </button>
                </div>
            </section>
            {{--            end of last month top products wrapper--}}

{{--            footer section--}}
            <footer class="my-10">
                <div class="bg-green-700 flex items-center justify-center h-64 rounded-lg">
                   <div class="flex flex-col gap-y-5">
                       <div>
                           <h1 class="uppercase">best products of 2024</h1>
                           <p class="text-center font-black text-3xl">TechConnect <br> Awards</p>
                       </div>
                       <button class="bg-slate-200 py-0.5 rounded-lg">See the best of 2024</button>
                   </div>
                </div>
                <div class="my-5 text-sm text-slate-500">
                    <ul class="flex gap-x-6 mb-2">
                        <li>Blog</li>
                        <li>NewsLetter</li>
                        <li>FAQ</li>
                        <li>Privacy and Cookies</li>
                    </ul>
                    <p>@copyright 2025 TECHCONNECT</p>
                </div>
            </footer>
{{--            end of footer section--}}
        </div>



        <div class="col-span-2 bg-green-700 px-10 py-10 rounded-lg self-start">
            <div>
                <h1 class="text-slate-200 font-black text-3xl mb-4">Top Startup Funding News.</h1>
            </div>
            <div class="pt-4">
                <ul class="text-slate-100 flex flex-col gap-y-5">
                    <li class="flex items-center gap-2">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                            </svg>
                        </span>
                        <span>
                            ARUDEM secures ugx300M on a seed funding
                        </span>
                    </li>


                    <li class="flex items-center gap-2">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                            </svg>
                        </span>
                        <span>
                           99Exceptions goes public
                        </span>
                    </li>

                    <li class="flex items-center gap-2">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                            </svg>
                        </span>
                        <span>
                           Midjourney releases V7, its first new AI image model in nearly a year
                        </span>
                    </li>

                    <li class="flex items-center gap-2">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                            </svg>
                        </span>
                        <span>
                            Meta officially says goodbye to its US fact-checkers on Monday
                        </span>
                    </li>

                    <li class="flex items-center gap-2">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                            </svg>
                        </span>
                        <span>
                          Elon Musk took a chainsaw to the US government. Tesla is taking the hit.
                        </span>
                    </li>

                    <li class="flex items-center gap-2">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                            </svg>
                        </span>
                        <span>
                           Teen with 4.0 GPA who built the viral Cal AI app was rejected by 15 top universities
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</main>


<dialog id="startup-modal" class="bg-white  lg:max-w-4xl mt-5 rounded-lg">
    <div class="wrapper">
        {{--    start of startup cover image--}}
        <div class="h-40">
            <img class="w-full relative h-full object-cover" src="images/image7.jpeg" alt="">
            <a href="" class="bg-black text-slate-200 gap-x-1 px-3 py-2 rounded-full flex absolute top-0 right-0 mt-3 mr-3">
                <span class="text-sm font-bold">Vist Site</span>
                <span>
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                    </svg>
               </span>
            </a>
        </div>
        {{--    end of startup cover image--}}
        {{--    description section--}}
        <div class="px-4 mt-2">
            <p>Premiere Pro 25.2 adds AI! Use Generative Extend to lengthen clips, AI Media Intelligence to search footage, plus auto caption translation & improved color.</p>
            <ul class="flex gap-x-3 text-slate-500 text-sm mt-2">
                <li>Launch Tags: </li>
                <li>Design Tools</li>
                <li>Artificial Intelligence</li>
                <li>Video</li>
            </ul>
        </div>
        {{--    end of description--}}
        {{--    start of meet the team--}}
        <div class="bg-slate-100 rounded-lg mx-4 px-4 py-4 mt-4">
            <div class="flex items-center gap-x-3">
                <span class="bg-white p-0.5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                    </svg>
                </span>
                <p class="font-medium">Meet the team</p>
            </div>

            <div class="flex flex-col gap-y-2 mt-4">
                <div class="flex items-center gap-x-3">
                    <div class="h-10 w-10 bg-yellow-600 rounded-lg"></div>
                    <div>
                        <h4 class="font-medium">Ezra Obua</h4>
                        <p class="-mt-1 text-sm">Certified problem solver</p>
                    </div>
                </div>
                <div class=" flex items-center gap-x-3">
                    <div class="h-10 w-10 bg-yellow-600 rounded-lg"></div>
                    <div>
                        <h4 class="font-medium">Aaron Nevalinz</h4>
                        <p class="-mt-1 text-sm">Certified problem solver</p>
                    </div>
                </div>
            </div>
        </div>
        {{--    end of meet the team--}}
        {{--start of product images--}}
        <div class="m-4">
            <ul class="flex gap-x-5">
                <li class="h-56">
                    <img class="w-full h-full object-cover rounded-lg" src="images/image1.jpeg" alt="">
                </li>
                <li class="h-56">
                    <img class="w-full h-full object-cover rounded-lg" src="images/image1.jpeg" alt="">
                </li>
            </ul>
        </div>
        {{--end of product images--}}
        {{-- meet the tools used--}}
        <div class="bg-slate-100 rounded-lg mx-4 px-4 py-4 mt-4">
            <div class="flex items-center gap-x-3">
                <span class="bg-white p-0.5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                    </svg>
                </span>
                <p class="font-medium">Meet the team</p>
            </div>

            <div class="flex flex-col gap-y-2 mt-4">
                <div class="flex items-center gap-x-3">
                    <div class="h-10 w-10 bg-yellow-600 rounded-lg"></div>
                    <div>
                        <h4 class="font-medium">Ezra Obua</h4>
                        <p class="-mt-1 text-sm">Certified problem solver</p>
                    </div>
                </div>
                <div class=" flex items-center gap-x-3">
                    <div class="h-10 w-10 bg-yellow-600 rounded-lg"></div>
                    <div>
                        <h4 class="font-medium">Aaron Nevalinz</h4>
                        <p class="-mt-1 text-sm">Certified problem solver</p>
                    </div>
                </div>
            </div>
        </div>
        {{--the tools used --}}
        {{--comments form--}}
        <div class="m-4">
            <form action="">
                <textarea class="w-full h-24 border-slate-300 rounded-lg" placeholder="Comment on the product..."></textarea>
                <button class="bg-green-700 px-2 py-1 rounded-lg text-white text-sm">Comment</button>
            </form>
        </div>
        {{--end of comments form--}}
        {{--comments section--}}
        <div class="m-4 flex flex-col gap-y-3">
            <div class=" flex items-start gap-x-3">
                <div class="h-10 w-10 bg-yellow-600 rounded-lg"></div>
                <div class="flex-1">
                    <div>
                        <h4 class="font-medium">Aaron Nevalinz</h4>
                        <p class="-mt-1 text-sm">Certified problem solver</p>
                    </div>
                    <div class="my-2">
                        <p class="text-sm">
                            FreeGuessr is an immersive, free-to-play geography game that drops players into random locations around the world and challenges them to guess where they are using visual clues from Google Street View.

                            With high-quality maps and global coverage, it delivers a rich experience for both solo players and those looking for competitive or party-style multiplayer. Players can enjoy modes like Daily Challenges, Arena, and ranked Duels—no limits, no paywalls.

                            What sets FreeGuessr apart is its commitment to being 100% free.
                        </p>
                    </div>
                </div>
            </div>

            <div class=" flex items-start gap-x-3">
                <div class="h-10 w-10 bg-pink-600 rounded-lg"></div>
                <div class="flex-1">
                    <div>
                        <h4 class="font-medium">Priscilla Abia</h4>
                        <p class="-mt-1 text-sm">Certified Dentist</p>
                    </div>
                    <div class="my-2">
                        <p class="text-sm">
                            Cool. Absolutely addictive, best thing is we can play it without login in and it's free.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{--end of comments section--}}
    </div>
</dialog>


<script>
    const dialog = document.getElementById("startup-modal")
    const wrapper = document.querySelector(".wrapper")
    function showDetailsDialog(){
        dialog.showModal()
        document.body.style.overflow = 'hidden';
    }
    dialog.addEventListener("click", (e)=>{
        if(!wrapper.contains(e.target)){
            dialog.close()
            document.body.style.overflow = '';
        }
    })
</script>




</body>
</html>
