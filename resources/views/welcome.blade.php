@extends('layouts.app')

@section('content')

<!-- blog -->
        <div class="w-full bg-white">

            <!-- title -->
            <div class="text-center px-6 py-12 mb-6 bg-grey-lightest border-b">
                <h1 class=" text-xl md:text-4xl pb-4">Blog</h1>
                <p class="leading-loose text-grey-dark">
                    Catch up on the latest news and updates.
                </p>
            </div>
            <!-- /title -->

            <div class="container max-w-xl mx-auto md:flex items-start py-8 px-6">

                <!-- articles -->
                <div class="w-full md:pr-12 mb-12">
                    <article class="mb-12">
                        <h2 class="mb-4">
                            <a href="#" class="text-black text-xl md:text-2xl no-underline hover:underline">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </a>
                        </h2>

                        <div class="mb-4 text-sm text-grey-darker">
                            by <a href="#" class="text-grey-darker">Joe Bloggs</a> on 19th March 2019
                            <span class="font-bold mx-1"> | </span>
                            <a href="#" class="text-grey-darker">Uncategorised</a>
                            <span class="font-bold mx-1"> | </span>
                            <a href="#" class="text-grey-darker">2 Comments</a>
                        </div>

                        <p class="text-grey-darker leading-normal">
                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>

                    </article>

                    <article class="mb-12">
                        <h2 class="mb-4">
                            <a href="#" class="text-black text-xl md:text-2xl no-underline hover:underline">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </a>
                        </h2>

                        <div class="mb-4 text-sm text-grey-darker">
                            by <a href="#" class="text-grey-darker">Joe Bloggs</a> on 19th March 2019
                            <span class="font-bold mx-1"> | </span>
                            <a href="#" class="text-grey-darker">Uncategorised</a>
                            <span class="font-bold mx-1"> | </span>
                            <a href="#" class="text-grey-darker">2 Comments</a>
                        </div>

                        <p class="text-grey-darker leading-normal">
                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>

                    </article>

                    <article class="mb-12">
                        <h2 class="mb-4">
                            <a href="#" class="text-black text-xl md:text-2xl no-underline hover:underline">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </a>
                        </h2>

                        <div class="mb-4 text-sm text-grey-darker">
                            by <a href="#" class="text-grey-darker">Joe Bloggs</a> on 19th March 2019
                            <span class="font-bold mx-1"> | </span>
                            <a href="#" class="text-grey-darker">Uncategorised</a>
                            <span class="font-bold mx-1"> | </span>
                            <a href="#" class="text-grey-darker">2 Comments</a>
                        </div>

                        <p class="text-grey-darker leading-normal">
                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>

                    </article>

                    <article class="mb-12">
                        <h2 class="mb-4">
                            <a href="#" class="text-black text-xl md:text-2xl no-underline hover:underline">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </a>
                        </h2>

                        <div class="mb-4 text-sm text-grey-darker">
                            by <a href="#" class="text-grey-darker">Joe Bloggs</a> on 19th March 2019
                            <span class="font-bold mx-1"> | </span>
                            <a href="#" class="text-grey-darker">Uncategorised</a>
                            <span class="font-bold mx-1"> | </span>
                            <a href="#" class="text-grey-darker">2 Comments</a>
                        </div>

                        <p class="text-grey-darker leading-normal">
                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>

                    </article>

                    <div class="flex justify-between text-xs">
                        <a href="#" class="bg-grey text-white no-underline py-2 px-3 rounded">Previous</a>
                        <a href="#" class="bg-black text-white no-underline py-2 px-3 rounded">Next</a>
                    </div>
                </div>
                <!--/ articles -->

                <!-- sidebar -->
                <div class="w-full md:w-64">
                    
                    <aside class="rounded shadow overflow-hidden mb-6">
                        <h3 class="text-sm bg-grey-lighter text-grey-darker py-3 px-4 border-b">Categories</h3>

                        <div class="p-4">
                            <ul class="list-reset leading-normal">
                                <li><a href="#" class="text-grey-darkest text-sm">Uncategorised</a></li>
                                <li><a href="#" class="text-grey-darkest text-sm">Food &amp; Drink</a></li>
                                <li><a href="#" class="text-grey-darkest text-sm">Garden</a></li>
                                <li><a href="#" class="text-grey-darkest text-sm">Tools</a></li>
                            </ul>
                        </div>
                    </aside>
                    
                    <aside class="rounded shadow overflow-hidden mb-6">
                        <h3 class="text-sm bg-grey-lighter text-grey-darker py-3 px-4 border-b">Latest Posts</h3>

                        <div class="p-4">
                            <ul class="list-reset leading-normal">
                                <li><a href="#" class="text-grey-darkest text-sm">Lorem ipsum dolor sit amet.</a></li>
                                <li><a href="#" class="text-grey-darkest text-sm">Sit amet, consectetur adipisicing elit.</a></li>
                                <li><a href="#" class="text-grey-darkest text-sm">Lorem ipsum dolor sit amet.</a></li>
                                <li><a href="#" class="text-grey-darkest text-sm">Sit amet, consectetur adipisicing elit.</a></li>
                            </ul>
                        </div>
                    </aside>

                </div>
                <!-- /sidebar -->

            </div>

        </div>
        <!-- /blog -->

@endsection