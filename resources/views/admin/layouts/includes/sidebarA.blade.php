<style type="text/css">
    .nav-link.active {
        color: #198754 !important;
    }
</style>
<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="{{ route('admin') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0" style="color:#000066; font-weight: 1000;">
                <img class="rounded-circle" style="height: 15vh; width: 15vh; margin-bottom: 5vh; margin-top: 1vh;background: white;" src="/img/logo.png" alt="">
            </h2>
        </a>
        <div class="navbar-nav w-100">
            <a href="{{ route('admin') }}" class="nav-item nav-link {{ Request::routeIs('admin') ? 'active' : '' }}" id="dsh" style="margin-bottom: 1.3vh; padding: 0vh; border-radius: 0vh;">
                <i class="fa fa-tachometer-alt me-2"></i>
                <span id="dash">@lang('messages.dashboard')</span>
            </a>
            

            <div class="nav-item dropdown">
                <a href="#" class="nav-link {{ Request::routeIs('addUser') ? 'active' : '' }}" data-bs-toggle="dropdown" id="ques" style="margin-bottom: 1.3vh; padding: 0vh; border-radius: 0vh;">
                    <i class="fa-solid fa-user me-2"></i>
                    <span id="que">@lang('messages.users')</span>
                </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('addUser') }}" class="dropdown-item">@lang('messages.add_user')</a>
                    <a href="UserL" class="dropdown-item">@lang('messages.user_list')</a>
                </div>

            </div>


            <div class="nav-item dropdown">
                <a href="#" class="nav-link {{ Request::routeIs('addproductCat', 'CatL') ? 'active' : '' }}" data-bs-toggle="dropdown" id="ibt" style="margin-bottom: 1.3vh; padding: 0vh; border-radius: 0vh;">
                    <i class="fa fa-tags me-2"></i>
                    <span id="ibn">@lang('messages.classes')</span>
                </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('addproductCat') }}" class="dropdown-item">@lang('messages.add_class')</a>
                    <a href="{{ route('CatL') }}" class="dropdown-item">@lang('messages.classes_list')</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link {{ Request::routeIs('ChooseCat', 'SubCatL') ? 'active' : '' }}" data-bs-toggle="dropdown" id="subb" style="margin-bottom: 1.3vh; padding: 0vh; border-radius: 0vh;">
                    <i class="fa fa-tag me-2"></i>
                    <span id="sub">@lang('messages.categories')</span>
                </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('ChooseCat') }}" class="dropdown-item">@lang('messages.add_category')</a>
                    <a href="{{ route('SubCatL') }}" class="dropdown-item">@lang('messages.categories_list')</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link {{ Request::routeIs('ChooseCat', 'SubCatL') ? 'active' : '' }}" data-bs-toggle="dropdown" id="lev" style="margin-bottom: 1.3vh; padding: 0vh; border-radius: 0vh;">
                    <i class="fa fa-tag me-2"></i>

                    <span id="le">@lang('messages.sub_categories')</span>
                </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('ChooseSubCatL') }}" class="dropdown-item">@lang('messages.add_sub_category')</a>
                    <a href="{{ route('Levels') }}" class="dropdown-item">@lang('messages.sub_categories_list')</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link {{ Request::routeIs('ChooseSubCat', 'productL') ? 'active' : '' }}" data-bs-toggle="dropdown" id="product" style="margin-bottom: 1.3vh; padding: 0vh; border-radius: 0vh;">
                    <i class="fas fa-cube"></i>
                    <span id="boo">@lang('messages.products')</span>
                </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('ChooseLevel') }}" class="dropdown-item">@lang('messages.add_product')</a>
                    <a href="{{ route('productL') }}" class="dropdown-item">@lang('messages.products_list')</a>
                </div>
            </div>


            
            <div class="nav-item dropdown">
                <a href="#" class="nav-link {{ Request::routeIs('ChooseEx', 'ChooseproductLQ') ? 'active' : '' }}" data-bs-toggle="dropdown" id="conte" style="margin-bottom: 1.3vh; padding: 0vh; border-radius: 0vh;">
                    <i class="fa-solid fa-home me-2"></i>
                    <span id="cont">@lang('messages.home_contents')</span>
                </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('addContent') }}" class="dropdown-item">@lang('messages.add_home_content')</a>
                    <a href="{{ route('AllContent') }}" class="dropdown-item">@lang('messages.home_content_list')</a>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Sidebar End -->



<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                // Remove 'active' class from all links
                navLinks.forEach(nav => nav.classList.remove('active'));

                // Add 'active' class to the clicked link
                this.classList.add('active');
            });
        });
    });
</script>


