@extends('admin.admin-layout')
@section('content')

 <div class="container mx-auto">
   
 <form class="bg-white shadow-md rounded px-8 pt-5 pb-20 mb-4 mt-20" method="POST" action="{{ route('login') }}">
    @csrf

    <h1 class="mb-6 text-grey-darker">{{ __('Login') }}</h1>

    <div class="mb-4">
      <label class="block text-grey-darker text-sm font-bold mb-2" for="email">
        {{ __('E-Mail Address') }}
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="email" name="email" value="{{ old('email') }}" required autofocus>
    </div>
    <div class="mb-6">
      <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
        {{ __('Password') }}
      </label>
      <input class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************"  name="password" required>
      <p class="text-red text-xs italic">Please choose a password.</p>
    </div>

    <div class="mb-6">
        <input class="shadow appearance-none" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

        <label class="block text-grey-darker text-sm font-bold mb-2" for="remember">{{ __('Remember Me') }}</label>
    </div>

    <div class="flex items-center justify-between">
      <button class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        {{ __('Login') }}
      </button>
      <a class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker" href="#">
        Forgot Password?
      </a>
    </div>
  </form>
  <p class="text-center text-grey text-xs">
    ©<?php echo date("Y"); ?>. All rights reserved.
  </p>

</div>


@endsection
