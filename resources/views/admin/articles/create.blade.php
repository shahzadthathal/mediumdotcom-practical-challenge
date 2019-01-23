@extends('admin.admin-layout')
@section('content')
<div class="bg-blue-darker p-2 shadow text-xl text-white mt-10">
   <h3 class="pl-2">Add new article</h3>
</div>
<div class="flex flex-wrap m-5">
   {{ Form::open([
   'route' => 'admin.articles.store', 
   'class' => 'w-full  bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4',
   'files' => true
   ]) 
   }}
   @if($errors->any())
   <div class="bg-red-lightest border border-red-light text-red-dark px-4 py-3 rounded relative mb-3" role="alert">
      <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
   @endif
   <div class="flex flex-wrap -mx-3 mb-2">
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
         <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-title">
         Article title
         </label>
         <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="title" id="grid-title" type="text" placeholder="My awesome article" value="{{ old('title') ?  old('title') : '' }}">
      </div>
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
         <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-user_id">
         Select user
         </label>
         <div class="relative">
            <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-user_id" name="user_id">
               @foreach($users as $user)
               <option value="{{$user->id}}">{{$user->name}}</option>
               @endforeach
            </select>
            <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
               <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
               </svg>
            </div>
         </div>
      </div>
   </div>
   <div class="flex flex-wrap -mx-3 mb-2">
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
         <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-topic">
         Select topic
         </label>
         <div class="relative">
            <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-topic" name="topic_id">
               @foreach($topics as $topic)
               <option value="{{$topic->id}}">{{$topic->name}}</option>
               @endforeach
            </select>
            <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
               <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
               </svg>
            </div>
         </div>
      </div>
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
         <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-tags">
         Select tags
         </label>
         <div class="relative">
            <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-tags" name="tags[]" multiple="multiple">
               @foreach($tags as $tag)
               <option value="{{$tag->name}}">{{$tag->name}}</option>
               @endforeach
            </select>
         </div>
      </div>
   </div>
   <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
         <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-image">
         Image
         </label>
         <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-image" type="text" name="image" value="{{ old('image') ?  old('image') : 'https://via.placeholder.com/500x350' }}" placeholder="https://via.placeholder.com/500x350">
      </div>
      <div class="w-full md:w-1/2 px-3">
         <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-reading_time">
         Reading time
         </label>
         <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-reading_time" name="reading_time" type="text" value="{{ old('reading_time') ?  old('reading_time') : '' }}" placeholder="5 min">
      </div>
   </div>
   <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
         <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-description">
         Description
         </label>
         <textarea id="grid-description" name="description" class="appearance-none block w-full bg-grey-lighter text-grey-darker border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" placeholder="My awesome article description." rows="6">{{ old('description') ?  old('description') : '' }}</textarea>
      </div>
   </div>
   <div class="flex flex-wrap -mx-3 mb-2">
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
         <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-status">
         Status
         </label>
         <div class="relative">
            <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-status" name="status">
            <option value="1" {{ old('status')==1 ? 'selected' : '' }}>Yes</option>
            <option value="0" {{ old('status')==0 ? 'selected' : '' }}>No</option>
            </select>
            <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
               <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
               </svg>
            </div>
         </div>
      </div>
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
         <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-is_popular">
         Is popular
         </label>
         <div class="relative">
            <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-is_popular" name="is_popular">
            <option value="1" {{ old('is_popular')==1 ? 'selected' : '' }}>Yes</option>
            <option value="0" {{ old('is_popular')==0 ? 'selected' : '' }}>No</option>
            </select>
            <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
               <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
               </svg>
            </div>
         </div>
      </div>
   </div>
   <div class="md:flex md:items-center">
      <div class="md:w-1/3"></div>
      <div class="md:w-2/3">
         {{ Form::submit('Submit', array('class'=>'bg-grey-light hover:bg-grey text-grey-darkest font-bold py-2 px-4 rounded')) }}
         <a href="{{ route('admin.articles.index') }}" class="bg-grey-light hover:bg-grey text-grey-darkest font-bold py-2 px-4 rounded">Cancel</a>
      </div>
   </div>
   {{ Form::close() }}
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.7.13/tinymce.min.js"></script>
<script type="text/javascript">
   tinymce.init({
     selector: '#grid-description',  // change this value according to your html
     plugins: 'image , code, link', // change this value according to your html
     //height : '1500px',
     images_upload_url: "{{ route('ajaxUploadImageDescription') }}"
     
   });
</script>
@endsection