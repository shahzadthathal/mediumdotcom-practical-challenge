@extends('admin.admin-layout')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-lg-12">
         <h1 class="page-header">View topic</h1>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-12">
          @foreach (['danger', 'warning', 'success', 'info'] as $key)
            @if(Session::has($key))
               <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
            @endif
         @endforeach
         <a class="btn btn-primary btn-sm" href="{{ route('admin.topics.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
         <a class="btn btn-primary btn-sm" href="{{ route('admin.topics.edit', $item->id) }}"><i class="fa fa-pencil"></i> Update</a>

         {{ Form::open(['method' => 'DELETE','route' => ['admin.topics.destroy', $item->id]]) }}
            {{ Form::submit('Delete this record?', ['class' => 'btn btn-danger btn-sm']) }}
         {{ Form::close() }}


         <hr>
         <ul class="list-group" >
            <li class="list-group-item">ID: {{ $item->id}}</li>
            <li class="list-group-item">Name: {{ $item->name}}</li>
            <li class="list-group-item">Slug: {{ $item->slug}}</li>
            <li class="list-group-item">Status: {{ $item->status == 1 ? 'Active' : 'In Active' }}</li>
         </ul>
      </div>
   </div>
</div>
@endsection