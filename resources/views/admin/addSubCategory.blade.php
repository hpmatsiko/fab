@extends('admin/layouts.commonA')
@section('title', 'Add Book Category')
@section('content')
@include('admin/layouts/includes/navA')
<style type="text/css">
    #sub{
        color: darkblue;
    } 
    #subb{
        background: #000000;
    } 
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div style="" class="col-sm-12 col-xl-10">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 style="color: #198754;" class="mb-4">Enter Sub-category</h6>

                <!-- Display Success Message -->
                @if(session('suc'))
                <div class="alert alert-success">
                    {{ session('suc') }}
                </div>
                @endif

                <form method="post" action="{{ route('saveSubCat') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <select id="locale" name="locale" class="form-control @error('locale') is-invalid @enderror">
                                <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
                                <option value="fr" {{ app()->getLocale() == 'fr' ? 'selected' : '' }}>French</option>
                                <option value="kin" {{ app()->getLocale() == 'kin' ? 'selected' : '' }}>Kinyarwanda</option>

                            </select>
                            @error('locale')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">

                        <div class="col-sm-12">
                            <input type="text" class="form-control @error('sub_category') is-invalid @enderror" id="sub_category" name="sub_category" value="{{ old('sub_category') }}" placeholder="Enter Sub-category">
                            @error('sub_category')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-3">

                        <div class="col-sm-12">
                            
                           <input type="hidden" name="category" value="{{ $category->id }}">
                       </div>
                   </div>

                   <button style="background: #198754;border: none;color: darkgrey;" type="submit" class="btn btn-primary">Save</button>
               </form>
           </div>
       </div>
   </div>
</div>

@include('admin/layouts/includes/footer') 

@endsection
