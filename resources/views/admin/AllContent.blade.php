
@extends('admin/layouts.commonA')
@section('title', 'Add Book Category')
@section('content')
@include('admin/layouts/includes/navA')

@if($content->isEmpty())

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">


        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4" style="color: darkgrey;">
              <!-- Display Success Message -->
              @if(session('suc'))
              <div class="alert alert-success">
                {{ session('suc') }}
            </div>
            @endif
            <p>No any home content found </p>
        </div>
    </div>




</div>
</div>

@else
@foreach($content as $cont)
<style type="text/css" media="screen">
    #cont{
        color: darkblue;
    } 
    #conte{
        background: #000000;
    }
</style>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">




       {!! $cont->content !!}



       <div class="col-sm-12 col-xl-3">
        <div class="bg-secondary rounded h-100 p-4" style="color: darkgrey;">
           
            <form action="{{ route('content.destroy', $cont->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this content?');">
             <a href="{{ route('UpdateContent',$cont->id) }}" class="btn btn-success btn-sm" style="margin-right: 2vh;color: darkgrey;">Edit</a>

             @csrf
             @method('DELETE')
             <button class="btn btn-danger btn-sm" style="color: darkgrey;" type="submit">Remove</button>
         </form>
     </div>
 </div>






</div>
</div>
@endforeach
@endif



@include('admin/layouts/includes/footer') 

@endsection
