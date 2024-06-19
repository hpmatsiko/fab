
@extends('admin/layouts.commonA')
@section('title', 'Add Book Category')
@section('content')
@include('admin/layouts/includes/navA')
<style type="text/css">
    #ibn{
        color: darkblue;
    } 
    #ibt{
        background: #000000;
    } 
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div style="" class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 style="color:#198754 ;" class="mb-4">Kwinjiza Ibitabo</h6>

                @if(session()->has('suc'))
                <!-- Display success message -->
                <div class="alert alert-success">
                    {{ session('suc') }}
                </div>
                @endif

                <form  method="post" action="{{ route('save.category') }}">
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
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="inputEmail3"  name="title" placeholder="Uzuza Izina Rya Kategori">
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <button style="background: #198754;border: none;color: darkgrey;" type="submit" class="btn btn-primary">Kwinjiza</button>
                </form>
            </div>
        </div>
    </div>
</div>


@include('admin/layouts/includes/footer') 

@endsection
