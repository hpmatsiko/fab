<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <script src="https://kit.fontawesome.com/108c89cee8.js" crossorigin="anonymous"></script>
    <!-- Favicon -->
    <link href="/admin/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/admin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/admin/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid position-relative d-flex p-0">
       <!-- Spinner Start -->
     <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        
           <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2  class="m-0" style="color:#000066
            ;font-weight: 1000;"><img style="height: 15vh;width: 15vh;margin-bottom: 5vh;" class="rounded-circle" style="margin-top: 1vh;" src="/img/logo.png" alt="">
        </h2>
    </a>

</div>
<!-- Spinner End -->
@include('/admin/layouts/includes/sidebar')
<div align="" class="content" style="padding-bottom: 5vh;">
    @yield('content')
</div>


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" style="background: #198754;border: none;"><i style="color: darkgrey;" class="bi bi-arrow-up"></i></a>

</div>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/admin/lib/chart/chart.min.js"></script>
<script src="/admin/lib/easing/easing.min.js"></script>
<script src="/admin/lib/waypoints/waypoints.min.js"></script>
<script src="/admin/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/admin/lib/tempusdominus/js/moment.min.js"></script>
<script src="/admin/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>


<!-- Template Javascript -->
<script src="/admin/js/main.js"></script>
</body>
</html>