
<style type="text/css" media="screen">
   .ourb h1{
    text-transform: capitalize;
} 

</style>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">

            @if($content->isEmpty())
            @else
            <center>
                <h5 class="alert alert-success" style="color: ">GIHANGO CRAFTS</h5>
            </center>
            @foreach($content as $cont)
            <div class="col-lg-6 col-sm-12 bg-white shadow wow zoomIn" data-wow-delay="0.3s" style="word-break: break-all;">
             <div class="service-item text-center pt-3" >
                <div class="p-4" style="text-align: left;">

                   {!! $cont->content !!}

               </div>
           </div>
       </div>
       @endforeach
       @endif

       @foreach ($productCategories as $productCategory)
       @foreach ($productCategory->subCategories as $subCategory)
       <div align="center" class="alert alert-success">
        <h3>{{ $productCategory->product_category }} - {{ $subCategory->sub_category }}</h3>

    </div>
    @foreach ($subCategory->levels as $level)
    @foreach ($level->products as $product)
    <div class="col-lg-4 col-sm-12 bg-white shadow wow zoomIn" data-wow-delay="0.3s" style="word-break: break-all;">
     <div class="service-item text-center pt-3" >
        <div class="p-4" style="text-align: left;">

            <h5 class="alert alert-success" style="color: ">{{ $level->level }} - {{ $product->pname }}</h5>



            <a href="{{ route("login") }}" style="padding: 4vh;">

                @if ($product->image)
                <center>
                    <img src="/productImages/{{ $product->image }}" alt="Product Image" style="width: 100%;height: 100%;">
                    @endif
                </center>
                <div align="center" class="alert " style="color: black;">
                    {!! $product->description = implode(' ', array_slice(str_word_count($product->description, 1), 0, 10));
                    !!}
                </div>
            </a>
            <div align="center" class="alert alert-success" >
                <span><i class="fas fa-shopping-cart" style="font-size: 5vh;margin-right: .5vh;"></i>Add to cart</span>
            </div>





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






