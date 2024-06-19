@extends('user.common')
@section('title','Home Page')
@section('content')
<div  id="forg"  style="z-index: 10000899;display: flex;justify-content: center;width: 100%;">
    <div class="wow zoomIn bg-white shadow" data-wow-delay="1.5s" style="position: absolute;top: 30%;background: white;padding: 0vh;border-radius: 2vh;width: 60%;">
        <a href="{{ route("user") }}"><div class="cr"><i class="fa-solid fa-xmark"></i></div></a>
        <div class="form_container" style="margin-top: 6vh;">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8  sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8  sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8  sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@include('user/includes/services')
@endsection
