
@extends('admin/layouts.commonA')
@section('title', 'Add product Category')
@section('content')
@include('admin/layouts/includes/navA')
@foreach ($productCategories as $productCategory)
<style type="text/css">
        #sub{
        color: darkblue;
    } 
    #subb{
        background: #000000;
    } 
</style>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">

        <a class="col-sm-12 col-xl-6" href="{{ route('addSubCat', $productCategory->id) }}">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4" style="color: darkgrey;">
 
            {{ $productCategory->product_category }}
            </div>
        </div>

        </a>


    </div>
</div>
@endforeach



@include('admin/layouts/includes/footer') 

@endsection
