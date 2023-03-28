@extends('layouts.layout')
@section('title') {{'Academia'}}@endsection

@section('content')

    <!-- Banner -->
    <div class="mx-2">
        <div class="bg-bluetange float-left z-05 absolute rounded-b-lg ml-16"> 
            <div class="m-4">
                <p class="text-white"><a class="hover:underline underline-offset-4" href="{{'/'}}">Home</a> <span> /</span> <a href="{{'academia'}}" class="underline underline-offset-4"> Academia</a></p>
            </div>
        </div>
        <div class="lg:absolute h-full w-full m-4 p-4">
            <!-- Banner -->
            
            <div class="grid max-w-screen-4xl ml-12 mr-14 pt-8 mx-auto lg:gap-8 xl:gap-0 lg:pt-2 lg:grid-cols-12">
                
                <div class="mr-auto place-self-center lg:col-span-7">
                    <div class="">
                        <img src="/images/box_logo.png" class="mt-8 h-12 w-12" alt="">
                        <div class="ml-12">
                            <h1 class="max-w-2xl mb-4 text-bluetange text-xsitangeh font-extrabold tracking-tight leading-none ">Academia</h1>
                            <p class="max-w-2xl mb-6 text-bluetange text-sitange lg:mb-8 md:text-lg lg:text-xl dark:text-gray-600">Prof. Moses Ogutu is an ICT specialist and an Associate professor in Entrepreneurship. He also teaches Research Methods and Management at the School of Business, University of Nairobi. Prior to this, he was the Permanent Secretary in the Ministry of Information and Communication where he initiated various transformative projects, including development of the undersea cables into East Africa and the development of the Kenya Open Data Initiative. </p>
                            <a href="#academia-cards" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-semibold text-center text-bluetange border border-gray-300 rounded-lg bg-orangelink hover:bg-gray-100 focus:ring-4 focus:ring-blue-500">
                                Explore
                            </a>  
                        </div>
                    </div>
                </div>
                <div class="h-48 xl:w-full xl:h-full lg:col-span-5 lg:flex">
                    <img src="{{url('/images/profileimg-removebg-preview.png')}}" alt="mockup">
                </div>                
            </div>
        </div>
       
        <img src="/images/background_pattern1.png" alt="" class=" w-full h-min invisible lg:visible">

    </div>

    <div id="academia-cards">
        
    </div>

@endsection