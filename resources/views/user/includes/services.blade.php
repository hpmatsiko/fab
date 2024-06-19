
<style type="text/css" media="screen">
   .ourb h1{
    text-transform: capitalize;
} 

</style>

<div class="container-xxl py-5">
    <div class="container">
        <div style="display: flex;justify-content: space-around;" class="row g-4">

            @foreach($content as $cont)
            {!! $cont->content !!}
            @endforeach




            <div class="container-xxl py-5">
                <div class="container">
                    <div style="display: flex;justify-content: space-around;" class="row g-4">

                       @foreach ($productCategories as $productCategory)
                       @foreach ($productCategory->subCategories as $subCategory)
                       <div align="center" class="alert alert-success">
                        <h3>{{ $productCategory->book_category }} - {{ $subCategory->sub_category }}</h3>
                        
                    </div>
                    @foreach ($subCategory->levels as $level)
                    @foreach ($level->books as $product) 
                    <div class="col-lg-4 col-sm-12 bg-white shadow wow zoomIn" data-wow-delay="0.3s" style="word-break: break-all;">
                     <div class="service-item text-center pt-3" >
                        <div class="p-4" style="text-align: left;">

                            <h6 class="alert alert-success" style="color: ">{{ $level->level }}</h6>

                            

                            <a href="{{ route("login") }}" style="padding: 4vh;">{{ $product->pname }}
                                @if ($product->image)
                                <img src="/productImages/{{ $product->image }}" alt="Product Image" width="100">
                                @endif
                            </a>


                            
                        </div>
                    </div>
                </div>
                @endforeach
                @endforeach
                @endforeach
                @endforeach



            </div>
        </div>
    </div>






