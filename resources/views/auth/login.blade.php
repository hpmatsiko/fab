@extends('layouts.common')
@section('title','Home Page')
@section('content')
<style type="text/css">
  .animate {
    -webkit-animation: animatezoom 6s;
    animation: animatezoom 0.6s
  }

  @-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
  }
  
  @keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
  }
</style>
<script type="text/javascript">
  function mvh() {
    var hid=document.querySelector('#forg');
    if (hid.style.display=='none') {
      hid.style.display='block';
      document.querySelector('.center2').style.display='none';
    }

    else{
      hid.style.display='none';
    }
  }
</script>

<div  id="forg"  style="z-index: 10000899;display: flex;justify-content: center;width: 100%;">
  <div class="wow zoomIn bg-white shadow" data-wow-delay="1.5s" style="position: absolute;top: 30%;background: white;padding: 0vh;border-radius: 2vh;width: 50%;">
    <a href="{{ route("/") }}"><div class="cr"><i class="fa-solid fa-xmark"></i></div></a>
    <div class="form_container" style="margin-top: 6vh;">
      @if(session()->has('suc'))
      <!-- Display success message -->
      <div class="alert alert-success">
        {{ session('suc') }}
      </div>
      @endif
      <x-auth-session-status class="mb-4" :status="session('status')" />
      <form name="form" id="register2" action="{{ route('login') }}" method="post">
        @csrf
        <div>
         <div class="form_wrap">
            <div class="form_item">
              <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('username')" required autofocus autocomplete="username" placeholder="@lang('messages.email')"/>
              <x-input-error :messages="$errors->get('email')" class="mt-2" />

              </div>

            </div>
            <div class="form_wrap">
              <div class="form_item">
               <input id="password" class="block mt-1 w-full"
               type="password"
               name="password"
               required autocomplete="current-password" placeholder="@lang('messages.password')"/>

               <x-input-error :messages="$errors->get('password')" class="mt-2" />

               </div>

             </div>

             <div class="btn" style="padding-top:3vh;">
              <!-- Remember Me -->
              <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                  <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                  <span class="ms-2 text-sm text-gray-600">@lang('messages.remember_me')</span>
                </label>
              </div>

              <div class="flex items-center justify-end mt-4">
               @if (Route::has('password.request'))
               <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                @lang('messages.forgott_your_password')
              </a>
              @endif 


              <x-primary-button class="ms-3" style="background: #06BBCC;border: none;">
                @lang('messages.Login')
              </x-primary-button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@include('layouts.includes.services')
@endsection

