
@extends('admin/layouts.commonA')
@section('title', 'Add Book Category')
@section('content')
@include('admin/layouts/includes/navA')
@foreach ($levels as $level)
<style type="text/css">
        #boo{
        color: #6C7293;
    } 
    #book{
        background: #000000;
    } 
</style>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">

        <a class="col-sm-12 col-xl-6" href="{{ route('addproduct', $level->id) }}">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4" style="color: darkgrey;">
 
            {{ $level->level }}
            </div>
        </div>

        </a>


    </div>
</div>
@endforeach



@include('admin/layouts/includes/footer') 

@endsection
