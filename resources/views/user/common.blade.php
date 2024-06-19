<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link href="/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- register link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/home.css" rel="stylesheet">
    <!-- Fontowesome icons link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
     {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> --}}
    <style type="text/css" media="screen">
        body{
            overflow-X:hidden;
        }
        .popup-container {
           display: block; /* Hide the popup by default */
           position: fixed; /* Position the popup relative to the viewport */
           top: 50%; /* Center vertically */
           left: 50%; /* Center horizontally */
           transform: translate(-50%, -50%); /* Center the popup exactly */
           background-color:#06BBCC; /* Green background color */
           padding: 20px;
           border-radius: 10px;
           color: #fff;
           text-align: center;
           animation: fadeInScale 0.5s ease forwards; /* Fade in and scale up animation */
           z-index: 1000;
       }

       .popup-container h2{
        color: #fff;
    }

    /* Close button */
    .close-button {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }

    /* Tick animation */
    @keyframes tickAnimation {
        0% {
          transform: scale(0); /* Start with no size */
          opacity: 0; /* Start with transparency */
      }
      100% {
          transform: scale(3); /* End with bigger size */
          opacity: 1; /* End with full opacity */
      }
  }

  .tick {
    font-size: 50px; /* Larger font size */
    animation: tickAnimation 0.5s ease forwards; /* Apply tick animation */
}
.scm i{
    font-size: 5vh;margin: 5vh;
}



.insp1
{
    display:inline-flex;
    justify-content: between;
    padding: 0;
}
.insp11
{
    padding-top:0vh;
    padding-bottom:4vh;
    line-height: 3vh;
}

.him
{
    width: 100%;
    height: 100%;
    margin-top:5vh;
    border-radius: 1vh
}

.upy
{
    padding-left: 20vh;
    padding-top:7vh;
}

.upy p
{
    font-weight:bold;
    text-align:center;
    font-size: 6vh


}
.scm
{

    margin-top: 5vh;
}

.insp3
{
    padding: 5vh 25vh 5vh 25vh;
    display:flex;
    justify-content:space-around;
}

.search-input-caret-jump {
  position: relative;
}
.search-input-caret-jump input {
  padding: 8px;
  border: none;
  border-bottom: 2px solid #ccc;
  outline: none;
  transition: border-color 0.3s;
}
.search-input-caret-jump button {
  position: absolute;
  top: 50%;
  right: 1vh;
  transform: translateY(-50%);
  background: none;
  border: none;
  cursor: pointer;
}


/* Dropdown Button */
.dropbtn {
  background-color: ghostwhite;
  color: #838787;
  padding: 16px;
  font-size: 16px;
  border: none;
  position: relative; /* Needed for icon positioning */
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: ghostwhitesmoke;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}


.dropdown:hover .fas.fa-chevron-down {
  transform: rotate(180deg); /* Rotate the icon */
  transition: transform 0.3s ease; /* Add a smooth transition effect */
}



/*Register form*/
@import url('https://fonts.googleapis.com/css?family=Lobster+Two:700|Poppins&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
/*
.center{
  position: absolute;
  top: 55%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.modal-box{
  top: 40%;
  opacity: 0;
 
  background: #FFFCFC;
  height: auto;
  width: 120vh;
  margin-top:40px;
  padding: 18px 10px;
  border-radius: 5px;
  box-shadow: 5px 5px 30px rgba(0,0,0,.2);
  z-index: 1000;
}

#register{
  display:flex;
  justify-content: space-around;
}

/*.start-btn.show-modal{
  opacity: 0;
  visibility: hidden;
}*/
.modal-box.show-modal{
  top: 50%;
  opacity: 1;
  visibility: visible;
  transition: .4s;
}*/
/*.modal-box .cr{
  position: absolute;
  top: 0;
  right: 0;
  height: 40px;
  width: 40px;
  line-height: 40px;
  margin: 60px;
  color: ghostwhite;
  font-size: 18px;
  border-radius: 100%;
  text-align: center;
  cursor: pointer;
}*/
.cr:hover{
  font-size: 22px;
  background: ;
}
.cr{
  background: #06BBCC;

}


.form_container{
  background: #FFFCFC;
  padding: 30px;
  margin-top: 20px;
  border-radius: 3px;
}

.form_container .form_item{
  margin-bottom: 25px;
}

.form_container .form_wrap.form_grp{
  display: flex;
}

.form_container .form_wrap.form_grp .form_item{
  width: 50%;
}

.form_container .form_wrap.form_grp .form_item:first-child{
  margin-right: 4%;
}

.form_container .form_item label{
  display: block;
  margin-bottom: 5px;
}

.form_container .form_item input,
.form_container .form_item select{
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #dadce0;
  border-radius: 3px;
}

.form_container .btn input[type="submit"]{
  background: #06BBCC;
  border: 1px solid #6271f0;
  padding: 10px;
  width: 100%;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  color: #fff;
}

@media only screen and (max-width: 760px) {
  /* For mobile phones: */

  #register{
    display: block;
}

}


@media only screen and (max-width: 1200px) {
  /* For mobile phones: */

  .rgrg{
    padding-right: 2vh;
    padding-left: 2vh;
}

}

@media only screen and (max-width: 991px) {
  /* For mobile phones: */

  .rgrg,.mnn{
    padding-top: 1vh;
    padding-bottom: 1vh;
}

.modal-box{
    width: calc(100% - 4vh);
}
}


@media only screen and (max-width: 1200px) {
  /* For mobile phones: */

  .modal-box{
    width: calc(100% - 4vh);
}
}


/*Login form*/
@import url('https://fonts.googleapis.com/css?family=Lobster+Two:700|Poppins&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.center2{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.modal-box2{
  top: 40%;
  opacity: 0;
/*  visibility: hidden;*/
background: #FFFCFC;
height: auto;
width: 50vh;
margin-top:40px;
padding: 18px 10px;
border-radius: 5px;
box-shadow: 5px 5px 30px rgba(0,0,0,.2);
z-index: 1000;
}
.center3{

}

.modal-box3{

}

#register2{
  display:block;
  justify-content: space-around;
}

/*.start-btn.show-modal{
  opacity: 0;
  visibility: hidden;
}*/
.modal-box2.show-modal2{
  top: 50%;
  opacity: 1;
  visibility: visible;
  transition: .4s;
}

.hide{
  visibility: hidden;
}
#forg .cr,.modal-box2 .cl{
  position: absolute;
  top: 0;
  right: 0;
  height: 40px;
  width: 40px;
  line-height: 40px;
  margin: 10px;
  color: ghostwhite;
  font-size: 18px;
  border-radius: 100%;
  text-align: center;
  cursor: pointer;
}
#forg .crp{
  position: relative;
  top: 0;
  right: 0;
  height: 40px;
  width: 40px;
  line-height: 40px;
  margin: 10px;
  color: ghostwhite;
  font-size: 18px;
  border-radius: 100%;
  text-align: center;
  cursor: pointer;
}
#forg .cr,.cl:hover{
  font-size: 22px;
  background: ;
}
#forg .cr,.cl{
  background: #06BBCC;
  font-weight: bold;
  font-family: arial;
}

#forg .crp:hover{
  font-size: 22px;
  background: ;
}
#forg .crp{
  background: #06BBCC;
  font-weight: bold;
  font-family: arial;
}




.form_container{
  background: #FFFCFC;
  padding: 30px;
  margin-top: 20px;
  border-radius: 3px;
}

.form_container .form_item{
  margin-bottom: 25px;
}

.form_container .form_wrap.form_grp{
  display: flex;
}

.form_container .form_wrap.form_grp .form_item{
  width: 50%;
}

.form_container .form_wrap.form_grp .form_item:first-child{
  margin-right: 4%;
}

.form_container .form_item label{
  display: block;
  margin-bottom: 5px;
}

.form_container .form_item input,
.form_container .form_item select{
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #dadce0;
  border-radius: 3px;
}

.form_container .btn input[type="submit"]{
  background: #06BBCC;
  border: 1px solid #6271f0;
  padding: 10px;
  width: 100%;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  color: #fff;
}

@media only screen and (max-width: 760px) {
  /* For mobile phones: */

  #register2{
    display: block;
}



.modal-box2{
    width: calc(100% - 4vh);
}
}


/* Basic styling */
.dropdown2 {
    position: relative;
    display: inline-block;
    font-family: Arial, sans-serif; /* Change font family */
    display: none;
}

/* Dropdown content (hidden by default) */
.dropdown-content2 {
    display: none;
    position: absolute;
    background-color: ghostwhitesmoke;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content2 a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content2 a:hover {
    background-color: #f1f1f1;
}

/* Show the dropdown menu on hover */
.dropdown2:hover .dropdown-content2 {
    display: block;
}


/* Style for the dropdown arrow icon */
.dropdown-icon {
    position: absolute;
    top: 50%;
    right: 8px;
    transform: translateY(-50%);
    transition: transform 0.3s ease; /* Add transition for smooth rotation */
    color: #fff;
    font-size: 2vh;
}

/* Rotate the icon on hover */
.dropdown2:hover .dropdown-icon {
    transform: translateY(-50%) rotate(180deg);
}

/* Style for the span text */
.dropdown-text2 {
   /* Adjust padding */
   display: inline-block;
   background-color: transparent; /* Background color */
   border-radius: 5px; /* Rounded corners */
   cursor: pointer;
   border: none;
   color: #fff; /* Change cursor to pointer */
}
/********** Template CSS **********/
:root {
    --primary: #06BBCC;
    --light: #F0FBFC;
    --dark: #181d38;
}

.navbar-nav{
    display: flex;
}

.fw-medium {
    font-weight: 600 !important;
}

.fw-semi-bold {
    font-weight: 700 !important;
}

.back-to-top {
    position: fixed;
    display: none;
    right: 45px;
    bottom: 45px;
    z-index: 99;
}


/*** Spinner ***/
#spinner {
    opacity: 0;
    visibility: hidden;
    transition: opacity .5s ease-out, visibility 0s linear .5s;
    z-index: 99999;
}

#spinner.show {
    transition: opacity .5s ease-out, visibility 0s linear 0s;
    visibility: visible;
    opacity: 1;
}


/*** Button ***/

.btn {
    font-family: 'Nunito', sans-serif;
    font-weight: 600;
    transition: .5s;
}

.btn.btn-primary,
.btn.btn-secondary {
    color: black;
    border: none;
}

.btn-square {
    width: 38px;
    height: 38px;
}

.btn-sm-square {
    width: 32px;
    height: 32px;
}

.btn-lg-square {
    width: 48px;
    height: 48px;
}

.btn-square,
.btn-sm-square,
.btn-lg-square {
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: normal;
    border-radius: 0px;
}



@media (max-width: 768px) {
    .header-carousel .owl-carousel-item {
        position: relative;
        min-height: 500px;
    }
    
    .header-carousel .owl-carousel-item img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
}

.header-carousel .owl-nav {
    position: absolute;
    top: 50%;
    right: 8%;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
}

.header-carousel .owl-nav .owl-prev,
.header-carousel .owl-nav .owl-next {
    margin: 7px 0;
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: black;
    background: transparent;
    border: 1px solid black;
    font-size: 22px;
    transition: .5s;
}

.header-carousel .owl-nav .owl-prev:hover,
.header-carousel .owl-nav .owl-next:hover {
    background: var(--primary);
    border-color: var(--primary);
}

.page-header {
    background: linear-gradient(rgba(24, 29, 56, .7), rgba(24, 29, 56, .7)), url(../img/carousel-1.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}

.page-header-inner {
    background: rgba(15, 23, 43, .7);
}

.breadcrumb-item + .breadcrumb-item::before {
    color: var(--light);
}


/*** Section Title ***/
.section-title {
    position: relative;
    display: inline-block;
    text-transform: uppercase;
}

.section-title::before {
    position: absolute;
    content: "";
    width: calc(100% + 80px);
    height: 2px;
    top: 4px;
    left: -40px;
    background: var(--primary);
    z-index: -1;
}

.section-title::after {
    position: absolute;
    content: "";
    width: calc(100% + 120px);
    height: 2px;
    bottom: 5px;
    left: -60px;
    background: var(--primary);
    z-index: -1;
}

.section-title.text-start::before {
    width: calc(100% + 40px);
    left: 0;
}

.section-title.text-start::after {
    width: calc(100% + 60px);
    left: 0;
}


/*** Service ***/
.service-item {
    background: ;
    transition: .5s;
}

.service-item:hover {
    margin-top: -10px;
    background: ;
}

.service-item * {
    transition: .5s;
}

.service-item:hover * {
    color: ;
}

/*** Categories & Courses ***/
.category img,
.course-item img {
    transition: .5s;
}

.category a:hover img,
.course-item:hover img {
    transform: scale(1.1);
}


/*** Team ***/
.team-item img {
    transition: .5s;
}

.team-item:hover img {
    transform: scale(1.1);
}


/*** Testimonial ***/
.testimonial-carousel::before {
    position: absolute;
    content: "";
    top: 0;
    left: 0;
    height: 100%;
    width: 0;
    background: linear-gradient(to right, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 100%);
    z-index: 1;
}

.testimonial-carousel::after {
    position: absolute;
    content: "";
    top: 0;
    right: 0;
    height: 100%;
    width: 0;
    background: linear-gradient(to left, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 100%);
    z-index: 1;
}

@media (min-width: 768px) {
    .testimonial-carousel::before,
    .testimonial-carousel::after {
        width: 200px;
    }

}

@media (min-width: 992px) {
    .testimonial-carousel::before,
    .testimonial-carousel::after {
        width: 300px;
    }
}

.testimonial-carousel .owl-item .testimonial-text,
.testimonial-carousel .owl-item.center .testimonial-text * {
    transition: .5s;
}

.testimonial-carousel .owl-item.center .testimonial-text {
    background: var(--primary) !important;
}

.testimonial-carousel .owl-item.center .testimonial-text * {
    color: black !important;
}

.testimonial-carousel .owl-dots {
    margin-top: 24px;
    display: flex;
    align-items: flex-end;
    justify-content: center;
}

.testimonial-carousel .owl-dot {
    position: relative;
    display: inline-block;
    margin: 0 5px;
    width: 15px;
    height: 15px;
    border: 1px solid #CCCCCC;
    transition: .5s;
}

.testimonial-carousel .owl-dot.active {
    background: var(--primary);
    border-color: var(--primary);
}


/*** Footer ***/
.footer .btn.btn-social {
    margin-right: 5px;
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--light);
    font-weight: normal;
    border: 1px solid black;
    border-radius: 35px;
    transition: .3s;
}

.footer .btn.btn-social:hover {
    color: var(--primary);
}

.footer .btn.btn-link {
    display: block;
    margin-bottom: 5px;
    padding: 0;
    text-align: left;
    color: black;
    font-size: 15px;
    font-weight: normal;
    text-transform: capitalize;
    transition: .3s;
}

.footer .btn.btn-link::before {
    position: relative;
    content: "\f105";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    margin-right: 10px;
}

.footer .btn.btn-link:hover {
    letter-spacing: 1px;
    box-shadow: none;
}

.footer .copyright {
    padding: 25px 0;
    font-size: 15px;
    border-top: 1px solid rgba(256, 256, 256, .1);
}

.footer .copyright a {
    color: var(--light);
}

.footer .footer-menu a {
    margin-right: 15px;
    padding-right: 15px;
    border-right: 1px solid rgba(255, 255, 255, .1);
}

.footer .footer-menu a:last-child {
    margin-right: 0;
    padding-right: 0;
    border-right: none;
}


@media only screen and (max-width:760px){
    .modal-box.show-modal{
        top: 57%;
    }

    .modal-box2.show-modal2{
        top: 57%;
    }
}


@media only screen and (max-width:600px){
    .ourschools{
        display:block;
        padding-bottom:1vh;
    }
    .him{
        margin-top:2vh;
    }

    .modal-box.show-modal{
        top: 90%;
    }
    .form_container .form_wrap.form_grp .form_item{
      width: 100%;
  }
  .form_container{
    width: 100%;
}
.form_grp{
    display: flex;
    flex-wrap: wrap;
    width: 100%;

}

.form_container .form_wrap.form_grp .form_item:first-child{
  margin-right: 0%;
}

.upy p{
    font-size: 3vh;
    text-align :center;
    font-weight:bold;
}

.upy
{
    padding-top:1vh;
}
.insp1{
    padding-top:1vh;
}
.scm i{
   margin-left:10vh;
   margin-bottom:1vh;
   font-size:3.5vh;
   margin:1vh


}


}

</style>
</head>

<body>

    @include('user/includes/header')
    @yield('content')
   {{--  @include('layouts/includes/register')
   @include('layouts/includes/login')  --}}
   {{-- @include('layouts/includes/forgot-password') --}}
   {{-- @include('layouts/includes/ourschool') --}}
   {{-- @include('layouts/includes/home') --}}
   {{-- @include('layouts/includes/services') --}}
   {{-- @include('layouts/includes/categories') --}}
    {{-- @include('layouts/includes/courses')
    @include('layouts/includes/team') --}}
    {{-- @include('layouts/includes/testimonials') --}}

    
    
    @include('layouts/includes/footer')

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
        $('.slider').each(function() {
          var $this   = $(this);
          var $group  = $this.find('.slide-group');
          var $slides = $this.find('.slide');
          var buttonArray  = [];
          var currentIndex = 0;
          var timeout;

          function move(newIndex) {
            var animateLeft, slideLeft;

            advance();

            if ($group.is(':animated') || currentIndex === newIndex) {  
              return;
          }

          buttonArray[currentIndex].removeClass('active');
          buttonArray[newIndex].addClass('active');

          if (newIndex > currentIndex) {
              slideLeft = '100%';
              animateLeft = '-100%';
          } else {
              slideLeft = '-100%';
              animateLeft = '100%';
          }

          $slides.eq(newIndex).css( {left: slideLeft, display: 'block'} );

          $group.animate( {left: animateLeft}, function() {
              $slides.eq(currentIndex).css( {display: 'none'} );    
              $slides.eq(newIndex).css( {left: 0} );
              $group.css( {left: 0} );
              currentIndex = newIndex;
          });
      }

      function advance() {
        clearTimeout(timeout);
        timeout = setTimeout(function() {
          if (currentIndex < ($slides.length - 1)) {
            move(currentIndex + 1);
        } else {
            move(0);
        }
    }, 4000);
    }

    $.each($slides, function(index) {
        var $button = $('<button type="button" class="slide-btn">&bull;</button>');
        if (index === currentIndex) {
          $button.addClass('active');
      }
      $button.on('click', function() {
          move(index);
      }).appendTo('.slide-buttons');
      buttonArray.push($button);
  });

    advance();

});
</script>



<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i style="color: white;" class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/lib/wow/wow.min.js"></script>
<script src="/lib/easing/easing.min.js"></script>
<script src="/lib/waypoints/waypoints.min.js"></script>
<script src="/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<script>
   $(document).ready(function() {
        $('#search').on('keyup', function() {
            var query = $(this).val();

            if (query.length > 0) {
                $.ajax({
                    url: "{{ route('search') }}",
                    type: "GET",
                    data: { search: query },
                    success: function(data) {
                        $('#search_list').html(data.html);
                    }
                });
            } else {
                $('#search_list').html('');
            }
        });
    });
</script>

</body>
