@extends('admin.admin-layout')
@section('content')
<div class="bg-blue-darker p-2 shadow text-xl text-white mt-10">
   <h3 class="pl-2">Articles list</h3>
</div>
<div class="flex flex-wrap m-5">
   <div class="w-full">
      @foreach (['danger', 'warning', 'success', 'info'] as $key)
      @if(Session::has($key))
      <div class="flex items-center bg-blue text-white text-sm font-bold px-4 py-3 mb-5" role="alert">
         <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/>
         </svg>
         <p>{{ Session::get($key) }}</p>
      </div>
      @endif
      @endforeach
      <!--Table Card-->
      <div class="bg-white border-transparent rounded-lg shadow-lg">
         <div class="bg-grey-light border-b-2 border-grey rounded-tl-lg rounded-tr-lg p-2">
            <h5 class="uppercase text-grey-dark"></h5>
            <a class="bg-grey-light hover:bg-grey text-grey-darkest font-semibold py-2 px-4 border border-grey-light rounded shadow" href="{{ route('admin.articles.create') }}"><i class="fa fa-plus"></i> Add article</a>
         </div>
         <div class="p-5">
            <table class="w-full p-5 text-grey-darker table-collapse">
               <thead>
                  <tr>
                     <th class="text-left text-blue-darkest">#</th>
                     <th class="text-left text-blue-darkest">Title</th>
                     <th class="text-left text-blue-darkest">Status</th>
                     <th class="text-left text-blue-darkest">Action</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($model as $item)
                  <tr>
                     <td class="p-2 border-t border-grey-light font-mono text-xs whitespace-no-wrap">{{ $loop->iteration}}</td>
                     <td class="p-2 border-t border-grey-light font-mono text-xs whitespace-no-wrap">{{ $item->title}}</td>
                     <td class="p-2 border-t border-grey-light font-mono text-xs whitespace-no-wrap">
                        {{ $item->status == 1 ? 'Active' : 'In Active' }}
                     </td>
                     <td class="p-2 border-t border-grey-light font-mono text-xs text-purple-dark whitespace-no-wrap">
                        <a title="View"  href="{{ route('admin.articles.show', $item->id) }}">View</a>    
                        <a title="Update"  href="{{ route('admin.articles.edit', $item->id) }}">Edit</a>
                     </td>
                  </tr>
                  @endforeach                                   
               </tbody>
            </table>
            <p class="py-2">
               {{ $model->links() }}
               @empty($model)
               No record
               @endempty
            </p>
         </div>
      </div>
      <!--/table Card-->
   </div>
</div>
@endsection