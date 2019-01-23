@extends('layouts.app')
@section('content')
<div class="w-full py-24 px-6 bg-white relative z-10">
		
			<div class="container max-w-xl mx-auto text-left flex items-center flex-wrap">

				<div class="w-full md:w-2/3">
					<a href="" class="text-grey-dark no-underline  hover:text-grey-darkest font-bold mb-3"> {{$item->topic->name}}
                    </a>

					<h1 class="text-2xl md:text-4xl text-grey-darkest mb-3">{{$item->title}}</h1>
					<p class="text-md md:text-lg text-grey-dark leading-normal">
					</p>

					<div class="text-sm mt-2">
                <p class="text-black leading-none">
                    <a href="#" class="text-black no-underline  hover:text-grey-darkest">{{$item->user->name}}</a> <a href="#" class="inline-block bg-transparent  no-underline text-green py-2 px-4 border border-green rounded">Follow</a>

                </p>
                <p class="text-grey-dark mt-1">
                    <span> {{$item->created_at}} </span> . <span>{{$item->reading_time}} read</span>
                </p>
            </div>


				</div>

				<div class="hidden md:block w-1/3">
					<img src="{{$item->image}}" alt="{{$item->title}}" class="w-full h-auto shadow-lg">
				</div>

				

			</div>

			<div class="container max-w-xl mx-auto text-left flex items-center flex-wrap  mt-10">

				<div class="w-full">
					{!! $item->description !!}
				</div>

			</div>

		</div>
@endsection