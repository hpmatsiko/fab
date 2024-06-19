  @if (Route::has('login'))


  @extends('/admin/layouts.commonA')
  @section('title', 'Dashboard')

  @section('content')

  <!-- Content Start -->

  <!-- Navbar Start -->
  @include('/admin/layouts/includes/navA')

  <!-- Navbar End -->

  <style type="text/css" media="screen">
    #dash{
        color: darkblue;
    } 
    #dsh{
        background: #000000;
    } 
</style>
<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-4">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-tags me-2" style="color:darkblue;font-size: 4vh;"></i>
                <div class="ms-3">
                    <p class="mb-2">@lang('messages.categories')</p>
                    <h6 style="color:#198754;" class="mb-0">$1234</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-cube" style="color:darkblue;font-size: 4vh;"></i>
               
                <div class="ms-3">
                    <p class="mb-2">@lang('messages.products')</p>
                    <h6 style="color:#198754;" class="mb-0">$1234</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-4">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-user" style="color:darkblue;font-size: 4vh;"></i>
                <div class="ms-3">
                    <p class="mb-2">@lang('messages.customers')</p>
                    <h6 style="color:#198754;" class="mb-0">$1234</h6>
                </div>
            </div>
        </div>
       
    </div>
</div>
<!-- Sale & Revenue End -->

@include('/admin/layouts/includes/footer') 

<!-- Content End -->

@endsection
@endif 


