@extends('layouts.app')
@section('content')
<div class="w-full px-6 py-12 bg-white">
    <latest-articles-component></latest-articles-component>
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
        <div class="w-full md:pr-12 mb-12">
            <div class="flex border-b mb-4 pb-4">
                <div class="w-3/4 ">
                    <a href="topic/members" class="no-underline text-black text-lg font-bold">Featured for members</a>
                </div>
                <div class="w-1/4 text-right">
                    <a href="topic/members" class="no-underline text-grey-dark text-sm">
                        MORE 
                        <svg class="text-sm" width="19" height="19">
                            <path d="M7.6 5.138L12.03 9.5 7.6 13.862l-.554-.554L10.854 9.5 7.046 5.692" fill-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <featured-articles-component></featured-articles-component>
            <topic-wise-articles-component></topic-wise-articles-component>
            <div class="flex text-xs">
                <span class="text-grey no-underline py-2">FEATURED COLLECTIONS</span>
            </div>
            <featured-collections-component></featured-collections-component>
        </div>
        <div class="w-full md:w-64">
            <div class="border-b mb-4 pb-2 pt-5">
                <h3 class="py-3">
                    <a href="topic/members" class="no-underline text-sm text-black">Popular on Medium
                </h3>
            </div>
            <popular-articles-component></popular-articles-component>
        </div>
    </div>
</div>
@endsection