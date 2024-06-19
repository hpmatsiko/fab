@extends('layouts.common')
@section('title','Home Page')
@section('content')

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
    <div class="wow zoomIn bg-white shadow" data-wow-delay="1.5s" style="position: absolute;top: 30%;background: white;padding: 15vh;border-radius: 2vh;width: 60%;">
        <a href="{{ route("/") }}"><div class="cr"><i class="fa-solid fa-xmark"></i></div></a>
        <div class="mb-4 text-sm text-gray-600" style="color:;">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
        <div style="color: #06BBCC;" class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-primary-button style="background: #06BBCC;border: none;">
                        {{ __('Resend Verification Email') }}
                    </x-primary-button>
                </div>
            </form>

          {{--   <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-primary-button style="background: #06BBCC;border: none;" type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Log Out') }}
                </x-primary-button>
            </form> --}}
        </div>
    </div>
</div>
@include('layouts.includes.services')
@endsection

