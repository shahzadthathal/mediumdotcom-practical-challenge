@extends('admin.admin-layout')
@section('content')


<div class="bg-blue-darker p-2 shadow text-xl text-white mt-10">
    <h3 class="pl-2">Add new topic</h3>
</div>

<div class="flex flex-wrap m-5">


   {{ Form::open([
         'route' => 'admin.topics.store', 
         'class' => 'w-full  bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4',
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

   <div class="flex flex-wrap -mx-3 mb-6">
    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-name">
       Topic name
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="name" id="grid-name" type="text" placeholder="Awesome topic" value="{{ old('name') ?  old('name') : '' }}">
    </div>
  </div>

<div class="flex flex-wrap -mx-3 mb-6">
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
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
</div>

<div class="md:flex md:items-center">
    
    <div class="md:w-2/3">

      {{ Form::submit('Submit', array('class'=>'bg-grey-light hover:bg-grey text-grey-darkest font-bold py-2 px-4 rounded')) }}

      <a href="{{ route('admin.topics.index') }}" class="bg-grey-light hover:bg-grey text-grey-darkest font-bold py-2 px-4 rounded">Cancel</a>

    </div>
  </div>

 {{ Form::close() }}

</div>

@endsection

