<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Admin panel</title>
      <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
   </head>
   <body>
      <!--Nav-->
      <nav class="bg-black pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 pin-t">
         <div class="flex flex-wrap items-center">
            <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">
               <a href="#">
               <span class="text-xl pl-2 text-white"><i class="em em-grinning"></i>Practical Challenge</span>
               </a>
            </div>
            <div class="flex flex-1 md:w-1/3 justify-center md:justify-start text-white px-2">
               <span class="relative w-full">
                  <input type="search" placeholder="Search" class="w-full bg-grey-darkest text-sm text-white transition border border-transparent focus:outline-none focus:border-grey-darker rounded py-1 px-2 pl-10 appearance-none leading-normal">
                  <div class="absolute search-icon" style="top: .5rem; left: .8rem;">
                     <svg class="fill-current pointer-events-none text-white w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                     </svg>
                  </div>
               </span>
            </div>

            

            <div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end">
               @auth
               <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                  <li class="flex-1 md:flex-none md:mr-3">
                     <a class="inline-block py-2 px-4 text-white no-underline" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>  {{ __('Logout') }}</a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                     </form>
                  </li>
                  <li class="flex-1 md:flex-none md:mr-3">
                     <div class="relative inline-block">
                        <button onclick="toggleDD('myDropdown')" class="drop-button text-white focus:outline-none">
                           <span class="pr-2"><i class="em em-robot_face"></i></span> Hi, {{Auth::user()->name}} 
                           <svg class="h-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                              <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                           </svg>
                        </button>
                        <div id="myDropdown" class="dropdownlist absolute bg-black text-white pin-r mt-3 p-3 overflow-auto z-30 invisible">
                           <input type="text" class="drop-search p-2 text-grey-dark" placeholder="Search.." id="myInput" onkeyup="filterDD('myDropdown','myInput')">
                           <a href="#" class="p-2 hover:bg-grey-darkest text-white text-sm no-underline hover:no-underline block"><i class="fa fa-user fa-fw"></i> Profile</a>
                           <a href="#" class="p-2 hover:bg-grey-darkest text-white text-sm no-underline hover:no-underline block"><i class="fa fa-cog fa-fw"></i> Settings</a>
                           <div class="border border-grey-darkest"></div>
                           <a href="#" class="p-2 hover:bg-grey-darkest text-white text-sm no-underline hover:no-underline block"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a>
                        </div>
                     </div>
                  </li>
               </ul>
               @endauth
            </div>

         </div>
      </nav>
     
      <div class="flex flex-col md:flex-row">
         @auth
         <div class="bg-black shadow-lg h-16 fixed pin-b mt-12 md:relative md:h-screen z-10 w-full md:w-48">
            <div class="md:mt-12 md:w-48 md:fixed md:pin-l md:pin-t content-center md:content-start text-left justify-between">
               <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
                  <li class="mr-3 flex-1">
                     <a href="{{route('admin-dashboard')}}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-grey-darkest hover:border-pink">
                     <i class="fas fa-tasks pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-grey-dark md:text-grey-light block md:inline-block">Dashboard</span>
                     </a>
                  </li>
                  <li class="mr-3 flex-1">
                     <a href="{{route('admin.articles.index')}}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-grey-darkest hover:border-purple">
                     <i class="fa fa-envelope pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-grey-dark md:text-grey-light block md:inline-block">Manage articles</span>
                     </a>
                  </li>
                  <li class="mr-3 flex-1">
                     <a href="{{route('admin.topics.index')}}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-grey-darkest hover:border-purple">
                     <i class="fa fa-envelope pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-grey-dark md:text-grey-light block md:inline-block">Manage topics</span>
                     </a>
                  </li>
                  <li class="mr-3 flex-1">
                     <a href="{{route('admin.tags.index')}}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-grey-darkest hover:border-purple">
                     <i class="fa fa-envelope pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-grey-dark md:text-grey-light block md:inline-block">Manage tags</span>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         @endauth
         <div class="main-content flex-1 bg-grey-lightest mt-12 md:mt-2 pb-24 md:pb-5">
            @yield('content')
         </div>
      </div>

      <!-- <script src="{{ asset('public/js/app.js') }}"></script> -->
      <script>
         /*Toggle dropdown list*/
         function toggleDD(myDropMenu) {
             document.getElementById(myDropMenu).classList.toggle("invisible");
         }
         
         /*Filter dropdown options*/
         function filterDD(myDropMenu, myDropMenuSearch) {
             var input, filter, ul, li, a, i;
             input = document.getElementById(myDropMenuSearch);
             filter = input.value.toUpperCase();
             div = document.getElementById(myDropMenu);
             a = div.getElementsByTagName("a");
             for (i = 0; i < a.length; i++) {
                 if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                     a[i].style.display = "";
                 } else {
                     a[i].style.display = "none";
                 }
             }
         }
         
         // Close the dropdown menu if the user clicks outside of it
         window.onclick = function(event) {
             if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
         
                 var dropdowns = document.getElementsByClassName("dropdownlist");
                 for (var i = 0; i < dropdowns.length; i++) {
                     var openDropdown = dropdowns[i];
                     if (!openDropdown.classList.contains('invisible')) {
                         openDropdown.classList.add('invisible');
                     }
                 }
             }
         }
      </script>
   </body>
</html>