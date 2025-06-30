<x-main-nav>
    <style>
        @media (max-width: 640px) {
            .mobile-hidden {
                display: none;
            }
        }
    </style>


<main class="container mx-auto px-4 py-6 max-w-7xl">

    <div class="grid grid-cols-6 gap-x-10">
        <div class=" col-span-4">

            <section class="mb-10">
                <div>
                    <h1 class="text-dark font-black text-1xl mb-4">Top Products Launching today...</h1>
                </div>
                <div class="mt-8">
                    @forelse($startups as $startup)
                    <div class="shadow-lg hover:bg-slate-100 px-6 rounded-lg py-6 my-6 cursor-pointer">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-x-4 " onclick="showDetailsDialog()">
                                <div>
                                    <img src="images/comp ai.avif" alt="">
                                </div>
                                <div>
                                    <div>
                                        <p class="font-bold">{{ $startup->name }}</p>
                                        <p>{{ Str::limit($startup->description, 70) }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex gap-x-4">
                        <span class="bg-slate-100 hover:bg-white px-4 py-2 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                </svg>
                            </span>
                            <span>78</span>
                        </span>
                                <span class="bg-slate-100 hover:bg-white px-4 py-2 text-xs font-bold rounded-lg cursor-pointer items-center flex flex-col">
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
                            <p>{{ $startup->industry }}</p>
                            <p>Artificial Intelligence</p>
                            <p>Security</p>
                        </div>
                    </div>
                    @empty
                        <div class="col-span-full text-center py-12">
                            <p class="text-gray-500">You haven't created any startups yet.</p>
                            <a href="{{ route('startups.create') }}" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                                Create Your First Startup
                            </a>
                        </div>
                    @endforelse


                </div>

                <div class="mt-10 ">
                    <a href="#" class="text-md text-purple-700 text-center">
                        See all of today's product launches
                    </a>
                </div>
            </section>
{{--            end of top startups wrapper--}}

{{--            Yesterday's top products wrapper--}}
            <section class="mb-10">
                <div>
                    <h1 class="text-dark font-black text-1xl mb-4">Yesterday's top products...</h1>
                </div>
                <div class="grid grid-cols-2 gap-x-5 gap-y-8 mt-10">
                    <div class="shadow-lg hover:bg-slate-100 px-6 rounded-lg py-6 cursor-pointer">
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
                <div class="shadow-lg hover:bg-slate-100 px-6 rounded-lg py-6 cursor-pointer">
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
                    <a href="#" class="text-md text-purple-700 text-center">
                        See yesterday's top products
                    </a>
                </div>
            </section>




        </div>



        <div class="col-span-2 bg-green-700 px-10 py-10 rounded-lg self-start">
            <div>
                <h1 class="text-slate-200 font-black text-2xl mb-4">Top Startup Funding News.</h1>
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
{{--            footer section--}}
            <footer class="my-10">
                <div class="bg-green-700 flex items-center justify-center h-64 rounded-lg">
                   <div class="flex flex-col gap-y-5">
                       <div>
                           <h1 class="uppercase text-white">best products of 2024</h1>
                           <p class="text-center font-black text-3xl">TechConnect <br> Awards</p>
                       </div>
                       <button class="bg-slate-200 py-3 rounded-lg">See the best of 2024</button>
                   </div>
                </div>
            </footer>
{{--            end of footer section--}}
</main>

</x-main-nav>

