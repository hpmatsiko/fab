
<div class="center2 modal-box2" style="z-index: 1000089;">

 <div class="cl"><i class="fa-solid fa-xmark"></i></div>



 <div class="form_container">
  <x-auth-session-status class="mb-4" :status="session('status')" />
    <form name="form" id="register2" action="{{ route('login') }}" method="post">
      @csrf
        <div>
          <div class="form_wrap">
              <div class="form_item">
              <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

              </div>

          </div>
          <div class="form_wrap">
              <div class="form_item">
                 <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" placeholder="Password"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />

              </div>
             
          </div>

          <div class="btn" style="padding-top:3vh;">
              <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
           @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif 


            <x-primary-button class="ms-3" style="background: #06BBCC;border: none;">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
        </div>
    </div>
</form>
</div>
</div>