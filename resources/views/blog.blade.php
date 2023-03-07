@extends('layouts.layout')
@section('content')

    <section>
        <div class="bg-blue-900 float-left z-05 absolute rounded-b-lg ml-16"> 
            <div class="m-4">
                <p class="text-white">
                    <a class="hover:underline underline-offset-4" href="{{'/'}}">Home</a> 
                    <!-- <span> /</span> 
                    <a class="hover:underline underline-offset-4" href="{{'about'}}"> About Moses Ogutu</a> -->
                    
                    <span> /</span> <a class="underline underline-offset-4" href="">Blog & Publications</a>
                </p>
            </div>
        </div>
    </section>
    
    <section class=" lg:m-24">
        <div class="h-8 w-8">
            <img src="/images/box_logo.png" alt="">
        </div>
        <section class="mx-8">
            <h2 class="text-xsitangeh font-extrabold text-bluetange">Blog</h2>
            <div class="flex flex-cols m-12 lg:h-48 lg:w-full ">
                <a href="#" class="bg-blue-500 mx-8 lg:p-20 text-white hover:text-gray-800 rounded-lg lg:w-full text-center">                
                    <p class="lg:text-xxl">Daily Nation</p>                
                </a>
                <a href="#" class="bg-blue-500 mx-8 lg:p-20 text-white hover:text-gray-800 rounded-lg lg:w-full text-center">                
                    <p class="lg:text-xxl">Business Daily</p>                
                </a>
            </div>
        </section>
    </section>

    <section class="lg:m-32">
        <h2 class="text-xsitangeh font-extrabold text-bluetange">Blog Articles</h2>
        <div class="lg:m-8 flex flex-row flex-wrap">            
            <div class="my-4 p-4 w-1/3 max-h-80">
                <a href="" class="flex items-center flex-col ">
                    <div class="">
                        <img src="/images/ruto.jpeg" alt="" class="rounded-lg max-h-60">
                    </div>
                    <div>
                        <h2 class="px-2 text-bluetange text-blog font-semibold" >Chandarana Foodplus Marketing Goof: a Lesson from Condoleezza Rice on Political Risk Through Social Activism</h2>
                        <p class="text-sm font-semibold pl-2 text-left text-bloglink underline underline-offset-2">Read More</p>

                    </div>
                </a>
            </div>
        </div>

    </section>

@endsection