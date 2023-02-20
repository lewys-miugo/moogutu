@extends('layouts.layout')
@section('content')
<section>
    <!-- Banner -->
    <div class="grid max-w-screen-xl px-4 pt-8 mx-auto lg:gap-8 xl:gap-0 lg:pt-2 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">About <br> Prof  Moses  Ogutu</h1>
            <p class="max-w-2xl mb-6 text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-600">Prof Moses Ogutu is a public servant currently serving as the Kenya’s Ambassador to the Kingdom of Belgium, Professor of Entrepreneurship, Technocrat, previously the Permanent Secretary of Kenya’s Ministry of Information and Communication, editor, advisor and a champion of Pan-Africanism.</p>
            <a href="#" class="inline-flex  items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white border border-gray-300 rounded-lg bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                Read Full Profile
            </a> 
            <!-- <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                Get started
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a> -->
            <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white border border-gray-300 rounded-lg bg-blue-500 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                Download Printable Profile
            </a> 
        </div>
        <div class=" lg:col-span-5 lg:flex">
            <img src="{{url('/images/profileimg-removebg-preview.png')}}" alt="mockup">
        </div>                
    </div>

    <!-- Profile key experience -->
    <div class='flex items-center flex-wrap  justify-center flex-col-2 mt-8 py-4 min-h-screen p-2 m-2 from-gray-700 via-gray-800 to-gray-900 bg-gradient-to-br'>
        <!-- Card 1 -->
        <div class="relative w-full group max-w-md min-w-0 mx-auto mt-8 mb-12 break-words bg-white border shadow-2xl dark:bg-gray-800 dark:border-gray-700 md:max-w-sm rounded-xl">
            <div class="pb-6">
                <div class="flex flex-wrap justify-center">
                    <div class="flex justify-center w-full">
                        <div class="relative">
                            <img src="/images/profileimg-removebg-preview.png" class="dark:shadow-xl border-blue-400 dark:border-gray-800 rounded-full align-middle border-8 absolute -m-16 -ml-18 lg:-ml-16 max-w-[150px]" />
                        </div>
                    </div>
                </div>
                <div class="mt-2 mt-20 text-center">
                    <h3 class="mb-1 text-2xl font-bold leading-normal text-gray-700 dark:text-gray-300">Profile</h3>
                    <div class="flex flex-row justify-center w-full mx-auto space-x-2 text-center">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg> -->
                        <!-- /typography/_h3.antlers.html -->
                        <div class="text-sm font-normal tracking-tight text-gray-600 font-mono ">
                            <p>
                                Prof. Ndemo has over 20 years of business, finance and technology expertise gained…
                            </p>
                        </div>
                        <!-- End: /typography/_h3.antlers.html -->
                    </div>
                    <div class="w-full text-center">
                        <div class="flex justify-center pt-8 pb-0 lg:pt-4">
                            
                        </div>
                    </div>
                </div>
                <!-- <div class="pt-6 mx-6 mt-6 text-center border-t border-gray-200 dark:border-gray-700/50">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full px-6">
                            <p class="mb-4 font-light leading-relaxed text-gray-600 dark:text-gray-400">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin turpis orci, maximus sed purus a, cursus scelerisque purus. Morbi molestie, odio at sagittis rhoncus, felis massa iaculis mi, quis molestie erat ipsum vel risus.
                            </p>
                        </div>
                    </div>
                </div> -->
            </div>   
        </div>
        <!-- Card2 -->
        <div class="relative w-full group max-w-md min-w-0 mx-auto mt-8 mb-12 break-words bg-white border shadow-2xl dark:bg-gray-800 dark:border-gray-700 md:max-w-sm rounded-xl">
            <div class="pb-6">
                <div class="flex flex-wrap justify-center">
                    <div class="flex justify-center w-full">
                        <div class="relative">
                            <img src="/images/ruto2.jpeg" class="dark:shadow-xl border-blue-400 dark:border-gray-800 rounded-full align-middle border-8 absolute -m-16 -ml-18 lg:-ml-16 max-w-[150px]" />
                        </div>
                    </div>
                </div>
                <div class="mt-2 mt-20 text-center">
                    <h3 class="mb-1 text-2xl font-bold leading-normal text-gray-700 dark:text-gray-300">Key experience</h3>
                    <div class="flex flex-row justify-center w-full mx-auto space-x-2 text-center">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg> -->
                        <!-- /typography/_h3.antlers.html -->
                        <div class="text-sm font-normal tracking-tight text-gray-600 font-mono ">
                            <p>
                                Prof. Ndemo has over 20 years of business, finance and technology expertise gained…
                            </p>
                        </div>
                        <!-- End: /typography/_h3.antlers.html -->
                    </div>
                    <div class="w-full text-center">
                        <div class="flex justify-center pt-8 pb-0 lg:pt-4">
                            
                        </div>
                    </div>
                </div>
                <!-- <div class="pt-6 mx-6 mt-6 text-center border-t border-gray-200 dark:border-gray-700/50">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full px-6">
                            <p class="mb-4 font-light leading-relaxed text-gray-600 dark:text-gray-400">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin turpis orci, maximus sed purus a, cursus scelerisque purus. Morbi molestie, odio at sagittis rhoncus, felis massa iaculis mi, quis molestie erat ipsum vel risus.
                            </p>
                        </div>
                    </div>
                </div> -->
            </div>   
        </div>
        <!-- Card 3 -->
        <div class="relative w-full group max-w-md min-w-0 mx-auto mt-8 mb-12 break-words bg-white border shadow-2xl dark:bg-gray-800 dark:border-gray-700 md:max-w-sm rounded-xl">
            <div class="pb-6">
                <div class="flex flex-wrap justify-center">
                    <div class="flex justify-center w-full">
                        <div class="relative">
                            <img src="/images/no_tie_shot.jpg" class="dark:shadow-xl border-blue-400 dark:border-gray-800 rounded-full align-middle border-8 absolute -m-16 -ml-18 lg:-ml-16 max-w-[150px]" />
                        </div>
                    </div>
                </div>
                <div class="mt-2 mt-20 text-center">
                    <h3 class="mb-1 text-2xl font-bold leading-normal text-gray-700 dark:text-gray-300">Membership & honors</h3>
                    <div class="flex flex-row justify-center w-full mx-auto space-x-2 text-center">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg> -->
                        <!-- /typography/_h3.antlers.html -->
                        <div class="text-sm font-normal tracking-tight text-gray-600 font-mono ">
                            <p>
                                Prof. Ndemo has over 20 years of business, finance and technology expertise gained…
                            </p>
                        </div>
                        <!-- End: /typography/_h3.antlers.html -->
                    </div>
                    <div class="w-full text-center">
                        <div class="flex justify-center pt-8 pb-0 lg:pt-4">
                            
                        </div>
                    </div>
                </div>
                <!-- <div class="pt-6 mx-6 mt-6 text-center border-t border-gray-200 dark:border-gray-700/50">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full px-6">
                            <p class="mb-4 font-light leading-relaxed text-gray-600 dark:text-gray-400">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin turpis orci, maximus sed purus a, cursus scelerisque purus. Morbi molestie, odio at sagittis rhoncus, felis massa iaculis mi, quis molestie erat ipsum vel risus.
                            </p>
                        </div>
                    </div>
                </div> -->
            </div>   
        </div>
        <!-- card 4 -->
        <div class="relative w-full group max-w-md min-w-0 mx-auto mt-8 mb-12 break-words bg-white border shadow-2xl dark:bg-gray-800 dark:border-gray-700 md:max-w-sm rounded-xl">
            <div class="pb-6">
                <div class="flex flex-wrap justify-center">
                    <div class="flex justify-center w-full">
                        <div class="relative">
                            <img src="/images/tie_shot.jpg" class="dark:shadow-xl border-blue-400 dark:border-gray-800 rounded-full align-middle border-8 absolute -m-16 -ml-18 lg:-ml-16 max-w-[150px]" />
                        </div>
                    </div>
                </div>
                <div class="mt-2 mt-20 text-center">
                    <h3 class="mb-1 text-2xl font-bold leading-normal text-gray-700 dark:text-gray-300">Talks & Conferences</h3>
                    <div class="flex flex-row justify-center w-full mx-auto space-x-2 text-center">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg> -->
                        <!-- /typography/_h3.antlers.html -->
                        <div class="text-sm font-normal tracking-tight text-gray-600 font-mono ">
                            <p>
                                Prof. Ndemo has over 20 years of business, finance and technology expertise gained…
                            </p>
                        </div>
                        <!-- End: /typography/_h3.antlers.html -->
                    </div>
                    <div class="w-full text-center">
                        <div class="flex justify-center pt-8 pb-0 lg:pt-4">
                            
                        </div>
                    </div>
                </div>
                <!-- <div class="pt-6 mx-6 mt-6 text-center border-t border-gray-200 dark:border-gray-700/50">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full px-6">
                            <p class="mb-4 font-light leading-relaxed text-gray-600 dark:text-gray-400">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin turpis orci, maximus sed purus a, cursus scelerisque purus. Morbi molestie, odio at sagittis rhoncus, felis massa iaculis mi, quis molestie erat ipsum vel risus.
                            </p>
                        </div>
                    </div>
                </div> -->
            </div>   
        </div>
    </div>

    <!-- ====== Cards Section Start -->
        
    <section class="bg-gray-100 pt-20 pb-10 lg:pt-[120px] lg:pb-20">

        <div class="flex items-center flex-col pt-4 px-4">
            <img class="h-12 w-12 ml-4 mr-12 mb-4" src="/images/box_logo.png" alt="">
            <h2 class="text-4xl font-extrabold">Gallery</h2>
        </div>

        <div class="container mx-auto">
            <div class="m-4 flex flex-wrap">
            <div class="w-full px-4 md:w-1/2 xl:w-1/3">
                <div class="mb-10 overflow-hidden rounded-lg bg-white">
                <img
                    src="https://cdn.tailgrids.com/2.0/image/application/images/cards/card-01/image-01.jpg"
                    alt="image"
                    class="w-full"
                />
                <div class="p-8 text-center sm:p-9 md:p-7 xl:p-9">
                    <h3>
                    <a
                        href="javascript:void(0)"
                        class="text-dark hover:text-primary mb-4 block text-xl font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]"
                    >
                        50+ Best creative website themes & templates
                    </a>
                    </h3>
                    <p class="text-body-color mb-7 text-base leading-relaxed">
                    Lorem ipsum dolor sit amet pretium consectetur adipiscing elit.
                    Lorem consectetur adipiscing elit.
                    </p>
                    <a
                    href="javascript:void(0)"
                    class="text-body-color hover:border-primary hover:bg-primary inline-block rounded-full border border-[#E5E7EB] py-2 px-7 text-base font-medium transition hover:text-white"
                    >
                    View Details
                    </a>
                </div>
                </div>
            </div>
            <div class="w-full px-4 md:w-1/2 xl:w-1/3">
                <div class="mb-10 overflow-hidden rounded-lg bg-white">
                <img
                    src="https://cdn.tailgrids.com/2.0/image/application/images/cards/card-01/image-02.jpg"
                    alt="image"
                    class="w-full"
                />
                <div class="p-8 text-center sm:p-9 md:p-7 xl:p-9">
                    <h3>
                    <a
                        href="javascript:void(0)"
                        class="text-dark hover:text-primary mb-4 block text-xl font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]"
                    >
                        The ultimate UX and UI guide to card design
                    </a>
                    </h3>
                    <p class="text-body-color mb-7 text-base leading-relaxed">
                    Lorem ipsum dolor sit amet pretium consectetur adipiscing elit.
                    Lorem consectetur adipiscing elit.
                    </p>
                    <a
                    href="javascript:void(0)"
                    class="text-body-color hover:border-primary hover:bg-primary inline-block rounded-full border border-[#E5E7EB] py-2 px-7 text-base font-medium transition hover:text-white"
                    >
                    View Details
                    </a>
                </div>
                </div>
            </div>
            <div class="w-full px-4 md:w-1/2 xl:w-1/3">
                <div class="mb-10 overflow-hidden rounded-lg bg-white">
                <img
                    src="https://cdn.tailgrids.com/2.0/image/application/images/cards/card-01/image-03.jpg"
                    alt="image"
                    class="w-full"
                />
                <div class="p-8 text-center sm:p-9 md:p-7 xl:p-9">
                    <h3>
                    <a
                        href="javascript:void(0)"
                        class="text-dark hover:text-primary mb-4 block text-xl font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]"
                    >
                        Creative Card Component designs graphic elements
                    </a>
                    </h3>
                    <p class="text-body-color mb-7 text-base leading-relaxed">
                    Lorem ipsum dolor sit amet pretium consectetur adipiscing elit.
                    Lorem consectetur adipiscing elit.
                    </p>
                    <a
                    href="javascript:void(0)"
                    class="text-body-color hover:border-primary hover:bg-primary inline-block rounded-full border border-[#E5E7EB] py-2 px-7 text-base font-medium transition hover:text-white"
                    >
                    View Details
                    </a>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- ====== Cards Section End -->


</section>
@endsection