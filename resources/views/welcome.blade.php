@extends('layouts.app')
@section('content')
<div class="w-full px-6 py-12 bg-white">
    
    <home-main-component></home-main-component>

    <div class="container max-w-2xl mx-auto text-right mt-3">
        <a href="#" class="inline-block no-underline text-green hover:text-green-dark text-sm py-2 px-3 ">See All Featured</a>
        <hr class="border-b">
    </div>
</div>
<div class="container max-w-2xl mx-auto bg-white mt-5">
    <div class="text-center pl-6 mb-6 bg-grey-lightest border-b rounded">
        <div class="flex">
            <div class="w-1/2 py-12">
                <h1 class=" text-xl md:text-4xl pb-4 text-left">Welcome to Medium, where words matter.</h1>
                <p class="leading-loose text-grey-dark text-left">
                    We’ll deliver the best stories and ideas on the topics you care about most straight to your homepage, app, or inbox.
                </p>
                <p class="leading-loose text-left mt-5">
                    <a href="#" class="inline-block bg-black hover:bg-green no-underline text-white py-1 px-2 border rounded">Get started</a>
                    <a href="#" class="inline-block bg-transparent  no-underline text-green py-1 px-2 border border-green rounded">Learn more</a>
                </p>
            </div>
            <div class="w-1/2" style="background-image: url('https://cdn-images-1.medium.com/max/1400/1*TckFXfkU_bg0aADPYR_t7Q.png');     background-position: bottom right;background-size: contain;background-repeat: no-repeat;">
            </div>
        </div>
    </div>
    <div class="mx-auto md:flex items-start py-8 px-6">
        <!-- articles -->
        <div class="w-full md:pr-12 mb-12">
            <div class="flex border-b mb-4 pb-4">
                <div class="w-3/4 ">
                    <a href="" class="no-underline text-black text-lg font-bold">Featured for members</a>
                </div>
                <div class="w-1/4 text-right">
                    <a href="" class="no-underline text-grey-dark text-sm">
                        MORE 
                        <svg class="text-sm" width="19" height="19">
                            <path d="M7.6 5.138L12.03 9.5 7.6 13.862l-.554-.554L10.854 9.5 7.046 5.692" fill-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <article class="mb-12 flex">
                <div class="w-3/4">
                    <h2 class="mb-4">
                        <a href="#" class="text-black text-sm md:text-1xl no-underline hover:underline">
                        Habit-Building Self-Awareness Exercises to Keep Yourself Accountable
                        </a>
                    </h2>
                    <p class="text-grey-darker leading-normal">
                        “To thine own self be true”—Here’s how to find out how well you’re taking this advice.
                    </p>
                    <div class="mb-4 mt-4 text-sm text-grey-darker">
                        <a href="#" class="text-black no-underline">Niklas Göke</a>
                        <span class="mx-1"> in </span>
                        <a href="#" class="text-black no-underline">Better Humans</a>
                    </div>
                    <div class="mb-4 mt-4 text-sm text-grey-darker">
                        <a href="#" class="text-grey-darker no-underline">19 Jan</a>
                        <span class="font-bold">.</span>
                        <span class="mx-1 no-underline"> 6 min read </span>
                    </div>
                </div>
                <div class="w-1/4">
                    <img src="http://placehold.it/640x480.jpg">
                </div>
            </article>
            <article class="mb-12 flex">
                <div class="w-3/4">
                    <h2 class="mb-4">
                        <a href="#" class="text-black text-sm md:text-1xl no-underline hover:underline">
                        Habit-Building Self-Awareness Exercises to Keep Yourself Accountable
                        </a>
                    </h2>
                    <p class="text-grey-darker leading-normal">
                        “To thine own self be true”—Here’s how to find out how well you’re taking this advice.
                    </p>
                    <div class="mb-4 mt-4 text-sm text-grey-darker">
                        <a href="#" class="text-black no-underline">Niklas Göke</a>
                        <span class="mx-1"> in </span>
                        <a href="#" class="text-black no-underline">Better Humans</a>
                    </div>
                    <div class="mb-4 mt-4 text-sm text-grey-darker">
                        <a href="#" class="text-grey-darker no-underline">19 Jan</a>
                        <span class="font-bold">.</span>
                        <span class="mx-1 no-underline"> 6 min read </span>
                    </div>
                </div>
                <div class="w-1/4">
                    <img src="http://placehold.it/640x480.jpg">
                </div>
            </article>

            <div class="flex border-b mb-4 pb-4">
                <div class="w-3/4 ">
                    <a href="" class="no-underline text-black text-lg font-bold">Technology</a>
                </div>
                <div class="w-1/4 text-right">
                    <a href="" class="no-underline text-grey-dark text-sm">
                        MORE 
                        <svg class="text-sm" width="19" height="19">
                            <path d="M7.6 5.138L12.03 9.5 7.6 13.862l-.554-.554L10.854 9.5 7.046 5.692" fill-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <article class="mb-12 flex">
                <div class="w-3/4">
                    <h2 class="mb-4">
                        <a href="#" class="text-black text-sm md:text-1xl no-underline hover:underline">
                        Habit-Building Self-Awareness Exercises to Keep Yourself Accountable
                        </a>
                    </h2>
                    <p class="text-grey-darker leading-normal">
                        “To thine own self be true”—Here’s how to find out how well you’re taking this advice.
                    </p>
                    <div class="mb-4 mt-4 text-sm text-grey-darker">
                        <a href="#" class="text-black no-underline">Niklas Göke</a>
                        <span class="mx-1"> in </span>
                        <a href="#" class="text-black no-underline">Better Humans</a>
                    </div>
                    <div class="mb-4 mt-4 text-sm text-grey-darker">
                        <a href="#" class="text-grey-darker no-underline">19 Jan</a>
                        <span class="font-bold">.</span>
                        <span class="mx-1 no-underline"> 6 min read </span>
                    </div>
                </div>
                <div class="w-1/4">
                    <img src="http://placehold.it/640x480.jpg">
                </div>
            </article>
            <article class="mb-12 flex">
                <div class="w-3/4">
                    <h2 class="mb-4">
                        <a href="#" class="text-black text-sm md:text-1xl no-underline hover:underline">
                        Habit-Building Self-Awareness Exercises to Keep Yourself Accountable
                        </a>
                    </h2>
                    <p class="text-grey-darker leading-normal">
                        “To thine own self be true”—Here’s how to find out how well you’re taking this advice.
                    </p>
                    <div class="mb-4 mt-4 text-sm text-grey-darker">
                        <a href="#" class="text-black no-underline">Niklas Göke</a>
                        <span class="mx-1"> in </span>
                        <a href="#" class="text-black no-underline">Better Humans</a>
                    </div>
                    <div class="mb-4 mt-4 text-sm text-grey-darker">
                        <a href="#" class="text-grey-darker no-underline">19 Jan</a>
                        <span class="font-bold">.</span>
                        <span class="mx-1 no-underline"> 6 min read </span>
                    </div>
                </div>
                <div class="w-1/4">
                    <img src="http://placehold.it/640x480.jpg">
                </div>
            </article>
            
            <div class="flex text-xs">
                <span class="text-grey no-underline py-2">FEATURED COLLECTIONS</span>
            </div>

            <div class="container max-w-xl mx-auto text-center flex flex-wrap items-start md:flex-no-wrap">
                
                <div class="my-4 w-full md:w-1/3 flex flex-col  justify-center px-4">
                    <h5 class="text-sm mb-2 text-left">MAGAZINE</h5>
                    <a href="" class="no-underline text-left"><img src="https://cdn-images-1.medium.com/fit/c/200/265/1*BS6e4u9-yu6kGaUlzvl5tw@2x.png" class="mb-1"></a>
                    <a href="" class="text-grey mt-1 text-sm leading-normal text-left no-underline">21 Stories</a>
                </div>
                
                <div class="my-4 w-full md:w-1/3 flex flex-col  justify-center px-4">
                   <h5 class="text-sm mb-2 text-left">ANTHOLOGY</h5>
                    <a href="" class="no-underline text-left"><img src="https://cdn-images-1.medium.com/fit/c/200/265/1*FIhXg3bDIVgUrBtIyRXVxg@2x.png" class="mb-1"></a>
                     <a href="" class="text-grey mt-1 text-sm leading-normal text-left no-underline">21 Stories</a>
                </div>
                
                <div class="my-4 w-full md:w-1/3 flex flex-col justify-center px-4">
                    <h5 class="text-sm mb-2 text-left">ANTHOLOGY</h5>
                    <a href="" class="no-underline text-left"><img src="https://cdn-images-1.medium.com/fit/c/200/265/1*7WZutZWxSFNphqSDnFxGNg@2x.png" class="mb-1"></a>
                    <a href="" class="text-grey mt-1 text-sm leading-normal text-left no-underline">21 Stories</a>
                </div>

            </div>
        </div>
        <!--/ articles -->
        <!-- sidebar -->
        <div class="w-full md:w-64">
            
            <div class="border-b mb-4 pb-2 pt-5">
                     <h3 class="text-sm text-black py-3">Popular on Medium</h3>
            </div>

            <div class="p-1">
                
                <ol class="sm:list-reset md:list-reset lg:list-reset xl:list-reset text-grey-darkest">
                    
                    <li class="flex mb-6">
                        <div class="w-1/4">
                            <span class="text-2xl text-grey"> 01 </span>
                        </div>
                        <div class="w-3/4">
                            <a href="" class="no-underline text-black">
                                <h3 class="text-sm mb-2">I’m With Her. And Her, and Her, and Herand Her, and Her.</h3>
                            </a>    
                            <div class="text-sm mt-2">
                                <p class="text-black leading-none">
                                    <a href="#" class="text-black no-underline  hover:text-grey-darkest">Jonathan Reinink</a>
                                    in <a href="#" class="text-black no-underline  hover:text-grey-darkest">Science
                                    </a>
                                </p>
                                <p class="text-grey-dark mt-1 mb-1">
                                    <span title="Aug 18"> Aug 18</span> . <span title="6 min read">6 min read</span>
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="flex mb-6">
                        <div class="w-1/4">
                            <span class="text-2xl text-grey"> 02 </span>
                        </div>
                        <div class="w-3/4">
                            <a href="" class="no-underline text-black">
                                <h3 class="text-sm mb-2">I’m With Her. And Her, and Her, and Herand Her, and Her.</h3>
                            </a>    
                            <div class="text-sm mt-2">
                                <p class="text-black leading-none">
                                    <a href="#" class="text-black no-underline  hover:text-grey-darkest">Jonathan Reinink</a>
                                    in <a href="#" class="text-black no-underline  hover:text-grey-darkest">Science
                                    </a>
                                </p>
                                <p class="text-grey-dark mt-1 mb-1">
                                    <span title="Aug 18"> Aug 18</span> . <span title="6 min read">6 min read</span>
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="flex mb-6">
                        <div class="w-1/4">
                            <span class="text-2xl text-grey"> 03 </span>
                        </div>
                        <div class="w-3/4">
                            <a href="" class="no-underline text-black">
                                <h3 class="text-sm mb-2">I’m With Her. And Her, and Her, and Herand Her, and Her.</h3>
                            </a>    
                            <div class="text-sm mt-2">
                                <p class="text-black leading-none">
                                    <a href="#" class="text-black no-underline  hover:text-grey-darkest">Jonathan Reinink</a>
                                    in <a href="#" class="text-black no-underline  hover:text-grey-darkest">Science
                                    </a>
                                </p>
                                <p class="text-grey-dark mt-1 mb-1">
                                    <span title="Aug 18"> Aug 18</span> . <span title="6 min read">6 min read</span>
                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="flex mb-6">
                        <div class="w-1/4">
                            <span class="text-2xl text-grey"> 04 </span>
                        </div>
                        <div class="w-3/4">
                            <a href="" class="no-underline text-black">
                                <h3 class="text-sm mb-2">I’m With Her. And Her, and Her, and Herand Her, and Her.</h3>
                            </a>    
                            <div class="text-sm mt-2">
                                <p class="text-black leading-none">
                                    <a href="#" class="text-black no-underline  hover:text-grey-darkest">Jonathan Reinink</a>
                                    in <a href="#" class="text-black no-underline  hover:text-grey-darkest">Science
                                    </a>
                                </p>
                                <p class="text-grey-dark mt-1 mb-1">
                                    <span title="Aug 18"> Aug 18</span> . <span title="6 min read">6 min read</span>
                                </p>
                            </div>
                        </div>
                    </li>

                </ol>
            </div>

        </div>
        <!-- /sidebar -->
    </div>
</div>
<!-- /blog -->
@endsection