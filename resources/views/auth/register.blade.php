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

<div  id="forg"  style="z-index: 10000899;display: flex;justify-content: center;width: 100%;">
  <div class="wow zoomIn bg-white shadow" data-wow-delay="1.5s" style="position: absolute;top: 30%;background: white;padding: 0vh;border-radius: 2vh;width: 60%;">
    <a href="{{ route("/") }}"><div class="cr"><i class="fa-solid fa-xmark"></i></div></a>
    <div class="form_container" style="margin-top: 6vh;">
      <x-auth-session-status class="mb-4" :status="session('status')" />
      <form  method="POST" action="{{ route('register') }}">
        @csrf



        <div>

          <input type="hidden" name="usertype" value="user">
          <!-- Email Address -->
          <div class="form_wrap form_grp">
            <div class="form_item">

              <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="{{ __('messages.email') }}"/>
              <x-input-error :messages="$errors->get('email')" class="mt-2"  />
              </div>

              <div class="form_item">

                <input id="phone" type="text" name="phone" value="{{ old('phone_number') }}" required autofocus placeholder="{{ __('messages.phone') }}">
              </div>

            </div>
            <div class="form_wrap form_grp">
              <!-- Password -->
              <div class="form_item">


                <x-text-input id="password" class="block mt-1 w-full"
                type="password"
                name="password"
                required autocomplete="new-password" placeholder="{{ __('messages.password') }}" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="form_item">


                  <x-text-input id="password_confirmation" class="block mt-1 w-full"
                  type="password"
                  name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('messages.confirm_password') }}" />

                  <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                  </div>
                </div>

              </div>
              <div>
                <div class="form_wrap form_grp">
                  <div class="form_item">

                    <input id="phone_number" type="text" name="fname" value="{{ old('phone_number') }}" required autofocus placeholder="{{ __('messages.fname') }}">
                  </div>

                  <div class="form_item">

                    <input id="phone_number" type="text" name="lname" value="{{ old('phone_number') }}" required autofocus placeholder="{{ __('messages.lname') }}">
                  </div>
                </div>
                <div class="form_wrap form_grp">
                  <div class="form_item">

                    <select name="gender">
                      <option value="#">{{ __('messages.gender') }}</option>
                      <option value="Male">{{ __('messages.male') }}</option>
                      <option value="Female">{{ __('messages.female') }}</option>
                      <option value="Others">{{ __('messages.others') }}</option>
                    </select>
                  </div>



                  <div class="form_item">
                    <center><a href="{{ route('login') }}">
                      {{ __('messages.already_registered') }}
                    </a>

                    <x-primary-button style="background: #06BBCC;border: none;">
                      {{ __('messages.Register') }}
                    </x-primary-button>
                  </center>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    @include('layouts.includes.services')
    @endsection

