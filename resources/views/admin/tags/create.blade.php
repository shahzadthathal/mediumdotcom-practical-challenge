@extends('admin.admin-layout')
@section('content')


<div class="bg-blue-darker p-2 shadow text-xl text-white mt-10">
    <h3 class="pl-2">Add new tag</h3>
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

   <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-title">
        Article title
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="title" id="grid-title" type="text" placeholder="My awesome article" value="{{ old('title') ?  old('title') : '' }}">
    </div>
  </div>

  
<div class="container-fluid">
   <div class="row">
      <div class="col-lg-12">
         <h1 class="page-header">Add new tag</h1>
      </div>
   </div>
   <div class="clearfix"></div>
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="clearfix"></div>
            <div class="x_content">
               @if($errors->any())
               <div class="alert alert-danger">
                  <ul>
                     @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                  </ul>
               </div>
               @endif
               {{ Form::open([
               'route' => 'admin.tags.store', 
               'class' => 'form',
               ]) 
               }}
               <div class="col-xs-6">
                  
                  <div class="form-group">
                     <label class="control-label">Name*</label>
                     <input class="form-control" name="name" type="text" value="{{ old('name') ?  old('name') : '' }}">
                  </div>

                  <div class="form-group">
                     <label class="control-label">Status</label>
                     <select class="form-control" id="status" name="status">
                        <option value="1" {{ old('status')==1 ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ old('status')==0 ? 'selected' : '' }}>No</option>
                     </select>
                  </div>

               </div>

               <div class="col-xs-12">
                  {{ Form::submit('Submit', array('class'=>'btn btn-primary')) }}
                  <a href="{{ route('admin.tags.index') }}" class="btn btn-primary">Cancel</a>
               </div>
               {{ Form::close() }}
            </div>
         </div>
      </div>
   </div>
</div>
</div>

@endsection

