@extends('admin.admin-layout')
@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-lg-12">
         <h1 class="page-header">Update topic</h1>
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
                'method' => 'PATCH',
                'route' => ['admin.topics.update', $item->id], 
                'class' => 'form',
               ]) 
               }}
               <div class="col-xs-6">
                  
                  <div class="form-group">
                     <label class="control-label">Name*</label>
                     <input class="form-control" name="name" type="text" value="{{$item->name}}">
                  </div>

                  <div class="form-group">
                     <label class="control-label">Status</label>
                     <select class="form-control" id="status" name="status">
                        <option value="1" {{ $item->status==1 ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ $item->status==0 ? 'selected' : '' }}>No</option>
                     </select>
                  </div>

               </div>

               <div class="col-xs-12">
                  {{ Form::submit('Submit', array('class'=>'btn btn-primary')) }}
                  <a href="{{ route('admin.topics.index') }}" class="btn btn-primary">Cancel</a>
               </div>
               {{ Form::close() }}
            </div>
         </div>
      </div>
   </div>
</div>
</div>

@endsection

