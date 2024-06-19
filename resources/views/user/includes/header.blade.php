  <!-- Spinner Start -->
     <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        
           <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2  class="m-0" style="color:#000066
            ;font-weight: 1000;"><img style="height: 20vh;width: 20vh;margin-bottom: 5vh;" class="rounded-circle" style="margin-top: 1vh;background: white;" src="/img/logo.png" alt="">
        </h2>
    </a>

</div>
<!-- Spinner End -->

    <style type="text/css">
        /*** Navbar ***/
        .navbar .dropdown-toggle::after {
            border: none;
            content: "\f107";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            vertical-align: middle;
            margin-left: 0x;
        }

        .navbar-light .navbar-nav .nav-link {
            margin-right: 5px;
            padding: 2px 0;
            color: black;
            font-size: 14px;
            text-transform: capitalize;
            outline: none;
        }

        .navbar-light .navbar-nav .nav-link:hover,
        .navbar-light .navbar-nav .nav-link.active {
            color: #006600;
        }

        @media (max-width: 991.98px) {
            .navbar-light .navbar-nav .nav-link  {
                margin-right: 0;
                padding: 10px 0;
            }

            .navbar-light .navbar-nav {
                border-top: 1px solid #EEEEEE;
            }

            .navbar-nav{
                display: none;
            }

            .dropdown2{
                display: block;
            }
        }

        .navbar-light .navbar-brand,
        .navbar-light a.btn {
            height: 75px;
        }

        .navbar-light .navbar-nav .nav-link {
            color: black;
            font-weight: 500;
        }

        .navbar-light.sticky-top {
            top: -100px;
            transition: .5s;
        }

        @media (min-width: 992px) {
            .navbar .nav-item .dropdown-menu {
                display: block;
                margin-top: 0;
                opacity: 0;
                visibility: hidden;
                transition: .5s;
            }

            .navbar .dropdown-menu.fade-down {
                top: 100%;
                transform: rotateX(-75deg);
                transform-origin: 0% 0%;
            }

            .navbar .nav-item:hover .dropdown-menu {
                top: 100%;
                transform: rotateX(0deg);
                visibility: visible;
                transition: .5s;
                opacity: 1;
            }
        }


/*** Header carousel ***/
.rgrg{
    text-transform: capitalize;
    background:transparent;
}

.mnn{
/*    background: #006600;*/
color: #fff;
/*padding: 3.6vh 3vh 3.6vh 3vh;*/
}
.rgrg{

    color: black;
/*    padding: 3.6vh 3vh 3.6vh 3vh;*/
border: none;
font-size:18px;
}

</style>
<!-- Navbar Start -->
<div style="z-index: 1000088;background: white;display: block;"  class="navbar navbar-expand-lg  bg-white shadow navbar-light  sticky-top p-0 wow zoomIn"  data-wow-delay="0.3s">
    <div style="display: flex;justify-content: space-between;align-items: center;padding-bottom: 3vh;">
        <a  href="{{ route("user") }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5 ">
            <h2  class="m-0" style="color:#000066
            ;font-weight: 1000;"><img style="margin-top: 1vh;height: 20vh;width: 20vh;" src="/img/logo.png" alt="">
        </h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">

        <center> @include('user/includes/ourschool')</center>
        
    </div>
</div> 

</div>


