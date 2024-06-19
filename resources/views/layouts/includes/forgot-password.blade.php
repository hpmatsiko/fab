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
<div class="animate" id="forg"  style="z-index: 10000899;">
    <div style="position: absolute;top: 30%;left: 0%;background: white;padding: 15vh;border-radius: 2vh;">
        <div class="cr"><i class="fa-solid fa-xmark"></i></div>
    
   <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
             <div class="form_item">
            <x-text-input style="width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #dadce0;
  border-radius: 3px;" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="Enter Your Email"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button style="background: #06BBCC;border: none;">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
    </div>
    </div>