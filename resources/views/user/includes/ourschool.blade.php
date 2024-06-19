<style type="text/css" media="screen">
   .ourschools
   {
    width: 170vh;
    display:flex;
    justify-content: space-around;
    padding:7vh;
}

</style>
<div>

    <div class="ourschools">

        <!-- Add your preferred icon library (e.g., Font Awesome) -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        {{-- <div class="nav-item dropdown wow fadeInUp">
            <a style="background:#fff;color: black; font-size: 18px;padding: 0;" href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">@lang('messages.school_category')</a>
            <div class="dropdown-menu fade-down m-0 wow fadeInUp">
                @foreach ($productCategories as $productCategory)
                
                <a class="dropdown-item" href="{{ route('showu', $productCategory->id) }}">{{ $productCategory->book_category }}</a>
                
                @endforeach
            </div>
        </div> --}}


        <div class="nav-item dropdown wow fadeInUp">
            <a style="background:#fff;color: black; font-size: 18px;padding: 0;" href="#" class="nav-link" data-bs-toggle="dropdown"> <div class="search-input-caret-jump wow fadeInUp" data-wow-delay="0.5s" style=" font-size: 18px;">
              <input type="text" name="search" id="search" placeholder="@lang('messages.search_product')" class="form-control" onfocus="this.value=''" style="padding: 0;">
              <button><i class="fas fa-search"></i></button>
          </div></a>
          <div id="search_list" class="dropdown-menu fade-down m-0 wow fadeInUp">

        </div>
    </div>


    <div>

        <div class="nav-item dropdown wow fadeInUp" data-wow-delay="0.6s">
           <div style="display: flex;justify-content: center;align-items: center;">

              <a style="background:#fff;color: black; font-size: 18px;padding: 0;" href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i  style="font-size:;margin-right: 1vh;" class="fa-solid fa-globe i"></i>@lang('messages.Language')</a>
           </div> 
           <div class="dropdown-menu fade-down m-0 wow fadeInUp">
            <a href="{{ route('locale', ['locale' => 'en']) }}" class="dropdown-item">@lang('messages.English')</a>
            <a href="{{ route('locale', ['locale' => 'fr']) }}" class="dropdown-item">@lang('messages.French')</a>
            <a href="{{ route('locale', ['locale' => 'kin']) }}" class="dropdown-item">@lang('messages.Kinyarwanda')</a>

        </div>
    </div> 
</div>
 <div class="nav-item dropdown wow fadeInUp" data-wow-delay="0.6s">
           <div style="display: flex;justify-content: center;align-items: center;">

               <a style="background:#fff;color: black; font-size: 18px;padding: 0;margin-right: 3vh;word-spacing: 0.5vh;" href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ Auth::user()->fname }} {{ Auth::user()->lname }}</a>
           </div> 
           <div class="dropdown-menu fade-down m-0 wow fadeInUp">
             <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('messages.my_account') }}
                </x-responsive-nav-link>
             <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('messages.logout') }}
                    </x-responsive-nav-link>
                </form>
           
        </div>
    </div> 
</div>

</div>