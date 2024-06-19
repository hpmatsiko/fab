@extends('layouts.common')
@section('title','Home Page')
@section('content')
<style type="text/css">
    .animate {
      -webkit-animation: animatezoom 0.6s;
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
<div  id="forg"  style="z-index: 10000899;display: flex;justify-content: center;">
    <div class="wow zoomIn bg-white shadow" data-wow-delay="1.5s" style="position: absolute;top: 20%;background: white;padding: 15vh;border-radius: 2vh;width: 50%;">
        <a href="{{ route("/") }}"><div class="cr"><i class="fa-solid fa-xmark"></i></div></a>
        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <p>Reset Password Form, You will fill password in both fields</p>
            <div>
                
                <x-text-input style="width: 100%;
                padding: 10px;
                font-size: 16px;
                border: 1px solid #dadce0;
                border-radius: 3px;" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" readonly="readonly" placeholder="Email"/>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="form_item">
                    
                    <x-text-input style="width: 100%;
                    padding: 10px;
                    font-size: 16px;
                    border: 1px solid #dadce0;
                    border-radius: 3px;"  id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="Password"/>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="form_item">
                        

                        <x-text-input style="width: 100%;
                        padding: 10px;
                        font-size: 16px;
                        border: 1px solid #dadce0;
                        border-radius: 3px;"  id="password_confirmation" class="block mt-1 w-full"
                        type="password"
                        name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password"/>

                        <x-input-error  :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button style="background: #06BBCC;border: none;">
                                {{ __('Reset Password') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
            
                    @include('layouts.includes.services')
                    @endsection
