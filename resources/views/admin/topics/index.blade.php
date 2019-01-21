@extends('admin.admin-layout')
@section('content')
<div>
   <div class="row">
      <div class="col-lg-12">
         @foreach (['danger', 'warning', 'success', 'info'] as $key)
             @if(Session::has($key))
                <div class="alert marg-btm-0 alert-{{ $key }}">{{ Session::get($key) }}</div>
             @endif
         @endforeach

         <h1 class="page-header">Topics list</h1>

          <a class="btn btn-primary" href="{{ route('admin.topics.create') }}"><i class="fa fa-plus"></i> Add topic</a>
         <hr>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-12">
         <div class="panel panel-default">
            <div class="panel-body">

               <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Topic name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($model as $item)
                     <tr class="odd gradeX">
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $item->name}}</td>
                        <td>{{ $item->slug}}</td>
                       
                         <td class="center">
                           {{ $item->status == 1 ? 'Active' : 'In Active' }}
                        </td>
                        
                        <td>
                           <a title="View" class="" href="{{ route('admin.topics.show', $item->id) }}"><span class="fa fa-eye">View</a>    
                           <a title="Update" class="" href="{{ route('admin.topics.edit', $item->id) }}"><span class="fa fa-pencil">Edit</a>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
               {{ $model->links() }}
                  @empty($model)
                     No record
                  @endempty
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

