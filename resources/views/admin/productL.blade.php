@extends('admin/layouts.commonA')
@section('title', 'Add product Category')
@section('content')
@include('admin/layouts/includes/navA')
<style type="text/css">
    #boo{
        color: darkblue;
    } 
    #product{
        background: #000000;
    } 
</style>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
          <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                @if(session('suc'))
                <div class="alert alert-success">{{ session('suc') }}</div>
                @endif
                <h6 style="color: darkgrey;" class="mb-4">product Sub-category List</h6>
                <div class="table-responsive">
                    @if($productCat->isEmpty())
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


                    <table class="table text-start align-middle  table-hover mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Main Category</th>
                                <th scope="col">Category</th>
                                <th scope="col">Sub-Category</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($productCat as $productCategory)
                            @foreach ($productCategory->subCategories as $subCategory)
                            @foreach ($subCategory->levels as $level)
                            @foreach ($level->products as $index => $product)
                            <tr>
                                <td>{{ $index + 1 }})</td>
                                <td>{{ $productCategory->product_category }}</td>
                                <td>{{ $subCategory->sub_category }}</td>
                                <td>{{ $level->level }}</td>
                                <td>{{ $product->pname }}</td>
                                <td>

                                   <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('Updateproduct',$product->id) }}" class="btn btn-success btn-sm" style="margin-right: 2vh;color: darkgrey;">Edit</a>
                                    <button type="submit" class="btn btn-danger btn-sm" style="color: darkgrey;" onclick="return confirm('Are you sure you want to delete this product?')">Remove</button>
                                </form></td>
                            </tr>
                            @endforeach
                            @endforeach
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



