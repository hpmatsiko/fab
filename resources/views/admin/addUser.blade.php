@extends('admin/layouts.commonA')
@section('title', 'Add Book Category')
@section('content')
@include('admin/layouts/includes/navA')
<style type="text/css">
    #teac{
        color: #6C7293;
    } 
    #teach{
        background: #000000;
    } 
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div style="" class="col-sm-12 col-xl-10">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 style="color: #198754;" class="mb-4">Teacher Registration</h6>

                <!-- Display Success Message -->
                @if(session('suc'))
                <div class="alert alert-success">
                    {{ session('suc') }}
                </div>
                @endif
                <form  method="POST" action="{{ route('register') }}">
                    @csrf

                   
                    <div class="row mb-3">
                        <div class="col-sm-12">

                          <x-text-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email"/>
                          <x-input-error :messages="$errors->get('email')" class="mt-2"  />
                          </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-sm-12">

                            <input id="phone" class="form-control" type="text" name="phone" value="{{ old('phone_number') }}" required  placeholder="Phone Number">
                        </div>
                    </div>


                    <div class="row mb-3">
                        <div class="col-sm-12">


                            <x-text-input id="password" class="block mt-1 w-full form-control"
                            type="password"
                            name="password"
                            required autocomplete="new-password" placeholder="Password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12">

                              <x-text-input id="password_confirmation" class="block mt-1 w-full form-control"
                              type="password"
                              name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />

                              <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                              </div>
                          </div>


                          <div class="row mb-3">
                            <div class="col-sm-12">

                                <input class="form-control" id="phone_number" type="text" name="fname" value="{{ old('phone_number') }}" required  placeholder="First name">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12">

                                <input class="form-control" id="phone_number" type="text" name="lname" value="{{ old('phone_number') }}" required  placeholder="Last name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12">

                                <select class="form-control" name="gender">
                                  <option value="#">Gender</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                  <option value="Others">Others</option>
                              </select>
                          </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-sm-12">

                            <select class="form-control" name="usertype">
                                <option value="#">User Type</option>
                                <option value="user">Student</option>
                                <option value="teacher">Teacher</option>

                            </select>
                        </div>
                    </div>



                    <div class="row mb-3">
                        <div class="col-sm-12">
                          <button style="background: #198754;border: none;color: darkgrey;" type="submit" class="btn btn-primary">
                              {{ __('save') }}
                          </button>

                      </div>
                  </div>

              </form>
          </div>
      </div>
  </div>
</div>
@include('admin/layouts/includes/footer') 

@endsection
