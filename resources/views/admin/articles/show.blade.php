@extends('admin.admin-layout')
@section('content')


<div class="bg-blue-darker p-2 shadow text-xl text-white mt-10">
    <h3 class="pl-2">View article</h3>
</div>

<div class="flex flex-wrap m-5">
<div class="w-full">

<div class="md:flex md:items-left">
      <a class="bg-grey-light hover:bg-grey text-grey-darkest font-bold py-2 px-4 rounded m-1" href="{{ route('admin.articles.index') }}">Back</a>
      <a class="bg-grey-light hover:bg-grey text-grey-darkest font-bold py-2 px-4 rounded m-1" href="{{ route('admin.articles.edit', $item->id) }}"> Update</a>

      {{ Form::open(['method' => 'DELETE','route' => ['admin.articles.destroy', $item->id]]) }}
         {{ Form::submit('Delete this record?', ['class' => 'bg-red hover:bg-grey text-grey-darkest font-bold py-2 px-4 rounded m-1']) }}
      {{ Form::close() }}
</div>

       @foreach (['danger', 'warning', 'success', 'info'] as $key)
         @if(Session::has($key))
            <div class="flex items-center bg-blue text-white text-sm font-bold px-4 py-3 mb-5" role="alert">
            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
            
                <p>{{ Session::get($key) }}</p>
          </div>
         @endif
       @endforeach

</div>
</div>


<div class="container-fluid">
   <div class="row">
      <div class="col-lg-12">
         <h1 class="page-header">View article</h1>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-12">
          @foreach (['danger', 'warning', 'success', 'info'] as $key)
            @if(Session::has($key))
               <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
            @endif
         @endforeach
         <a class="btn btn-primary btn-sm" href="{{ route('admin.articles.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
         <a class="btn btn-primary btn-sm" href="{{ route('admin.articles.edit', $item->id) }}"><i class="fa fa-pencil"></i> Update</a>

         {{ Form::open(['method' => 'DELETE','route' => ['admin.articles.destroy', $item->id]]) }}
            {{ Form::submit('Delete this record?', ['class' => 'btn btn-danger btn-sm']) }}
         {{ Form::close() }}


         <hr>
         <ul class="list-group" >
            <li class="list-group-item">ID: {{ $item->id}}</li>
            <li class="list-group-item">Title: {{ $item->title}}</li>
            <li class="list-group-item">Image: <img src="{{ $item->image}}"></li>
            <li class="list-group-item">Slug: {{ $item->slug}}</li>
            <li class="list-group-item">Tags: {{ $item->tags}}</li>
            
            <li class="list-group-item">Reading time: {{ $item->reading_time}}</li>
            <li class="list-group-item">Description: {{ $item->description}}</li>

            <li class="list-group-item">Status: {{ $item->status == 1 ? 'Active' : 'In Active' }}</li>

            <li class="list-group-item">Is popular: {{ $item->is_popular == 1 ? 'Yes' : 'No' }}</li>

            <li class="list-group-item">Viewed: {{ $item->viewed}}</li>
            <li class="list-group-item">Clap: {{ $item->clap}}</li>
            
            <li class="list-group-item">Created at:  {{\Carbon\Carbon::parse($item->created_at)->format('d/m/Y')}}</li>
            <li class="list-group-item">Updated at: {{\Carbon\Carbon::parse($item->updated_at)->format('d/m/Y')}}</li>
            
           
         </ul>
      </div>
   </div>
</div>
@endsection

