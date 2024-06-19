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
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
          <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 style="color: darkgrey;" class="mb-4">Book Sub-category List</h6>
                <div class="table-responsive">
                    @if($bookCategories->isEmpty())
                    <div class="container-fluid pt-4 px-4">
                        <div class="row g-4">


                            <div class="col-sm-12 col-xl-6">
                                <div class="bg-secondary rounded h-100 p-4" style="color: darkgrey;">

                                    <p>No any category found </p>
                                </div>
                            </div>




                        </div>
                    </div>
                    @endif


                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>

                                <th>Book Category</th>
                                <th scope="col">Sub-category Name</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bookCategories as $bookcategory)
                            @foreach($bookcategory->subCategories as $index => $subcategory)

                            <tr>
                                <th scope="row">{{ $index + 1 }})</th>
                                <th scope="row">{{ $bookcategory->book_category }}</th>
                                <td>{{ $subcategory->sub_category }}</td>
                                <td> <a href="{{ route('UpdateSubCat',$subcategory->id) }}" class="btn btn-success btn-sm" style="margin-right: 2vh;color: darkgrey;">Edit</a><a href="" class="btn btn-danger btn-sm" style="color: darkgrey;">Remove</a></td>

                            </tr>
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>

    </div>
</div>
</div>
@include('admin/layouts/includes/footer') 

@endsection
