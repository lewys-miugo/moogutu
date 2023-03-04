@extends('layouts.layout')
@section('content')
<section class="bg-pattern1 dark:bg-gray-900">
    <!-- Banner -->
    <div class="grid max-w-screen-xl px-4 pt-8 mx-auto lg:gap-8 xl:gap-0 lg:pt-2 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Prof  Moses  Ogutu</h1>
            <p class="max-w-2xl mb-6 text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-600">I am a global technocrat and currently serving as Kenya’s Ambassador to Belgium. Previously, I was the Permanent Secretary of Kenya’s Ministry of Information and Communication.</p>
            <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white border border-gray-300 rounded-lg bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                About Moses Ogutu
            </a> 
            <!-- <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                Get started
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a> -->
            <a href="{{'blog'}}" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white border border-gray-300 rounded-lg bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                Blogs & Publication
            </a> 
        </div>
        <div class=" lg:col-span-5 lg:flex">
            <img src="{{url('/images/profileimg-removebg-preview.png')}}" alt="mockup">
        </div>                
    </div>

    <!-- navigation Tabs -->

    <ul class="lg:px-16 bg-white text-base font-medium text-center text-gray-900 divide-x divide-gray-200 rounded-lg shadow flex flex-row sm:flex  dark:divide-gray-700 dark:text-gray-400">
        <li class="w-full">
            <a href="#" class="inline-block  w-full p-4 text-white bg-blue-800 hover:text-black hover:bg-blue-500  rounded-l-lg focus:ring-4 focus:ring-blue-300 active focus:outline-none dark:bg-gray-700 dark:text-white" aria-current="page">Profile</a>
        </li>
        <li class="w-full">
            <a href="#" class="inline-block w-full p-4 text-white bg-blue-800 hover:text-black hover:bg-blue-500  focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">Academia</a>
        </li>
        <li class="w-full">
            <a href="#" class="inline-block w-full p-4 text-white bg-blue-800 hover:text-black hover:bg-blue-500  focus:ring-4 focus:ring-blue-300 focus:outline-none dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">Reflections</a>
        </li>
        <li class="w-full">
            <a href="#" class="inline-block w-full p-4 text-white bg-blue-800 hover:text-black hover:bg-blue-500 rounded-r-lg focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700">Gallery</a>
        </li>
    </ul>

    <!-- Biography -->
    <div class="flex items-center flex-col pt-4 px-4">
        <h2 class="text-sitangeh text-bluetange font-extrabold ">Biography</h2>
        <p class="my-4 lg:mx-16  font-medium text-sitange text-bluetange">Moses Ogutu is Professor of Entrepreneurship at the University of Nairobi’s Business School. His research centers on the link between ICTs and small and medium enterprises with emphasis on how ICTs influence economic development in Africa.</P>

        <P class="my-4 lg:mx-16 text-sitange  font-medium text-bluetange"> Prof. Ndemo Chaired the Kenya Distributed Ledgers and Artificial Intelligence Taskforce that developed the country’s a road map for digital transformation. He is an advisor and Board member to several organizations including Safaricom one of the leading telecommunication company in Africa, a member of the OECD Expert Panel for Blockchain, World Economic Forum Global Blockchain Council (part of the World Economic Forum’s Global Fourth Industrial Revolution Councils).</P>

        <P class="my-4 lg:mx-16 text-lg text-bluetange">Besides having been a Permanent Secretary of Kenya’s Ministry of Information and Communication where he was credited with facilitating many transformative ICT projects, a Senior advisor to UN’s Global Pulse (Big Data initiatives) and the UNCDF’s Better than Cash Alliance and UNICEF’s Innovation Council. He is an Open Data/Big Data evangelist and dedicated to simplification (visualization) of data for ordinary citizens to consume. He writes two columns every week for the Business Daily and Nation on-line.</p>
    </div>

    <!-- BLOG -->
    <div class="flex items-center flex-col pt-4 px-4">
        <h2 class="text-4xl font-extrabold pb-4">Blog</h2>

        <div class="flex flex-wrap sm:items-center lg:flex-col-12 ">
                <!-- max-w-sm -->
            <div class="lg:max-w-sm flex lg:col-4 bg-white p-2 border border-gray-200 rounded-lg shadow  mx-2 my-2">
                <a href="#">
                    <img class="rounded-t-lg rounded-b-lg" src="{{url('/images/image-1.jpg')}}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <!-- <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> -->
                    </a>
                </div>
            </div>
            <div class="lg:max-w-sm flex lg:col-4 bg-white p-2 border border-gray-200 rounded-lg shadow mx-2 my-2">
                <a href="#">
                    <img class="rounded-t-lg rounded-b-lg" src="{{url('/images/image-1.jpg')}}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <!-- <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> -->
                    </a>
                </div>
            </div>
            <div class="lg:max-w-sm flex lg:col-4 bg-white p-2 border border-gray-200 rounded-lg shadow mx-2 my-2">
                <a href="#">
                    <img class="rounded-t-lg rounded-b-lg" src="{{url('/images/image-1.jpg')}}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <!-- <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> -->
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- About -->
    <div class="flex flex-col pt-4 px-4 m-2 lg:ml-16 lg:max-w-[60%]">
        <h2 class="text-4xl font-extrabold ">About Moses Ogutu</h2>
        <p class="my-4 text-lg text-gray-500">Prior to this, he was the Permanent Secretary in the Ministry of Information and Communication where he initiated various transformative projects, including development of the undersea cables into East Africa and the development of the Kenya Open Data Initiative. He sits on several Boards including Safaricom, Mpesa Foundation and Research ICT Africa. He is a senior advisor to the UNCDF’s Better than Cash Alliance and the UN Global Pulse. </p>
    </div>

    <!-- CARDS section -->

    <!-- component -->
    <!-- This is an example component -->
    <div class='flex items-center flex-wrap  justify-center flex-col-2 mt-8 py-4 min-h-screen p-2 m-2 from-gray-700 via-gray-800 to-gray-900 bg-gradient-to-br'>
        <!-- Card 1 -->
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
        <div class="relative w-full group max-w-md min-w-0 mx-auto mt-6 mb-6 break-words bg-white border shadow-2xl dark:bg-gray-800 dark:border-gray-700 md:max-w-sm rounded-xl">
            <div class="pb-6">
                <div class="flex flex-wrap justify-center">
                    <div class="flex justify-center w-full">
                        <div class="relative">
                            <img src="/images/profileimg-removebg-preview.png" class="dark:shadow-xl border-blue-400 dark:border-gray-800 rounded-full align-middle border-8 absolute -m-16 -ml-18 lg:-ml-16 max-w-[150px]" />
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
        <div class="relative w-full group max-w-md min-w-0 mx-auto mt-6 mb-6 break-words bg-white border shadow-2xl dark:bg-gray-800 dark:border-gray-700 md:max-w-sm rounded-xl">
            <div class="pb-6">
                <div class="flex flex-wrap justify-center">
                    <div class="flex justify-center w-full">
                        <div class="relative">
                            <img src="/images/tie_shot.jpg" class="dark:shadow-xl border-blue-400 dark:border-gray-800 rounded-full align-middle border-8 absolute -m-16 -ml-18 lg:-ml-16 max-w-[150px]" />
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
        <div class="relative w-full group max-w-md min-w-0 mx-auto mt-6 mb-6 break-words bg-white border shadow-2xl dark:bg-gray-800 dark:border-gray-700 md:max-w-sm rounded-xl">
            <div class="pb-6">
                <div class="flex flex-wrap justify-center">
                    <div class="flex justify-center w-full">
                        <div class="relative">
                            <img src="/images/ruto2.jpeg" class="dark:shadow-xl border-blue-400 dark:border-gray-800 rounded-full align-middle border-8 absolute -m-16 -ml-18 lg:-ml-16 max-w-[150px]" />
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


</section>
@endsection